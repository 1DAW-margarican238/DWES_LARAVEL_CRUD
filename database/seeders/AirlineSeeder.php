<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('airlines')->insert([
            [
            'name' => 'Iberia',
            'email'=> 'iberia@gmail.com',
            'country' => 'es',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Ryanair',
            'email'=>'ryanair@gmail.com',
            'country' => 'en',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'France Airlines',
            'email'=>'frairlines@gmail.com',
            'country' => 'fr',
            'created_at' => now(),
            'updated_at' => now(), 
            ]
    
    ]);
    }
}
