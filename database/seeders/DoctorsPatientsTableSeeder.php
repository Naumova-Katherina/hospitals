<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class DoctorsPatientsTableSeeder extends Seeder

{

    public function run () {

        DB::table('doctors_patients')->insert(array(
            array (
               'id' => '1',
               'doctor_id' => '1',
               'patient_id' => '2'
              

            ),
            array (
                'id' => '2',
                'doctor_id' => '2',
                'patient_id' => '3'
               
             ),
             array (
                'id' => '3',
                'doctor_id' => '3',
                'patient_id' => '1'

             ),
          
             
            )); 
    }
}
