<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctors_patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained(
                table: 'doctors'
            );
            $table->foreignId('patient_id')->constrained(
                table: 'patients'
            );
            $table->timestamps();
            $table->unique('doctor_id', 'patient_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors_patients');
    }
};
