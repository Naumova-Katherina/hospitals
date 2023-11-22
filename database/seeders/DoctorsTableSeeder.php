<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class DoctorsTableSeeder extends Seeder

{

    public function run () {

        DB::table('doctors')->insert(array(
            array (
                'id' => '1',
                'hospital_id' => '1',
                'name' => 'Игорь',
                'surname' => 'Рачков',
                'dop_name' => 'Васильевич',
                'is_therapevt' => '1',
                'is_active' => '1'

            ),
            array (
                'id' => '2',
                'hospital_id' => '2',
                'name' => 'Николай',
                'surname' => 'Иванов',
                'dop_name' => 'Петрович',
                'is_therapevt' => '1',
                'is_active' => '1'
               
             ),
             array (
                'id' => '3',
                'hospital_id' => '1',
                'name' => 'Денис',
                'surname' => 'Васильев',
                'dop_name' => 'Данилович',
                'is_therapevt' => '1',
                'is_active' => '1'

             ),
          
             
            )); 
    }
}
