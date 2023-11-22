<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class PatientsTableSeeder extends Seeder

{

    public function run () {

        DB::table('patients')->insert(array(
            array (
                'id' => '1',
                'name' => 'Сергей',
                'surname' => 'Соколов',
                'dop_name' => 'Васильевич',
                'is_active' => '1'
              

            ),
            array (
                'id' => '2',
                'name' => 'Анна',
                'surname' => 'Алекссева',
                'dop_name' => 'Сергеевна',
                'is_active' => '1'
               
             ),
             array (
                'id' => '3',
                'name' => 'Ирина',
                'surname' => 'Зайцева',
                'dop_name' => 'Николаевна',
                'is_active' => '1'

             ),
          
             
            )); 
    }
}
