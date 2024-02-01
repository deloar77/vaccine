<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VaccineCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    
    public function run(): void
    {
         

         DB::table('centers')->insert([
            [
                'name'=>'man',
            ],
            [
                'name'=>'woman',
            ],
            [
                'name'=>'boy',
            ],
            [
                'name'=>'girl',
            ]
         ]);

        
    }
}
