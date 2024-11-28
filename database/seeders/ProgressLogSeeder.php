<?php

namespace Database\Seeders;

use App\Models\ProgressLog;
use App\Models\Habit;
use Illuminate\Database\Seeder;

class ProgressLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get existing habits
        $habits = Habit::all();

        // Create progress logs for each habit
        $habits->each(function ($habit) {
            ProgressLog::factory(rand(5, 15))->create([
                'habit_id' => $habit->id
            ]);
        });
    }
}
