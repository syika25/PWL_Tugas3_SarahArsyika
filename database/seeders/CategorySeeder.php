<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category' => 'Fiksi'],
            ['category' => 'Non-Fiksi'],
            ['category' => 'Sains'],
            ['category' => 'Teknologi'],
            ['category' => 'Sejarah'],
            ['category' => 'Biografi'],
            ['category' => 'Agama'],
            ['category' => 'Seni'],
            ['category' => 'Budaya'],
            ['category' => 'Bahasa'],
        ];

        DB::table('categories')->insert($categories);
    }
}
