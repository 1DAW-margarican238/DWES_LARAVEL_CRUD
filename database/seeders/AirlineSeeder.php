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
            'country' => 'es',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Ryanair',
            'country' => 'en',
            'created_at' => now(),
            'updated_at' => now(),
            ]
    
    ]);
    }
}
