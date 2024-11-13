<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
       Category::create([
        'title' => 'Exemplo',
        'color' => '#ff0000',
        'user_id' => 1,
       ]);
    }
}