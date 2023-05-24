<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('categories')->insert([
            [
                'name' => 'bowls',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'name' => 'tazas',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'name' => 'fuentes',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'name' => 'mates',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'name' => 'platos',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'name' => 'macetas',
                "created_at" => now(),
                "updated_at" => now(),  
            ]
        ]);
    }
}
