<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class HospitalsTableSeeder extends Seeder

{

    public function run () {

        DB::table('hospitals')->insert(array(
            array (
               'id' => '1',
               'name' => 'Центральная Больница'
              

            ),
            array (
                'id' => '2',
                'name' => 'Больница скорой помощи'
               
             ),
             array (
                'id' => '3',
                'name' => 'Районная Больница'

             ),
          
             
            )); 
    }
}
