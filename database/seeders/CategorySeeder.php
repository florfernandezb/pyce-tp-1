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
                'name' => 'bowls'
            ],
            [
                'name' => 'tazas'
            ],
            [
                'name' => 'fuentes'
            ],
            [
                'name' => 'mates'
            ],
            [
                'name' => 'platos'
            ],
            [
                'name' => 'macetas'
            ]
        ]);
    }
}
