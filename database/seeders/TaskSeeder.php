<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Exemplo task',
            'description' => 'awdadafs',
            'due_date' => '2024-11-12 00:00:00',
            'user_id' => 1,
            'category_id' => 1,
        ]);
    }
}
