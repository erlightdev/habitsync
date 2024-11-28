<?php

namespace Database\Seeders;

use App\Models\Habit;
use App\Models\User;
use Illuminate\Database\Seeder;

class HabitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get existing users
        $users = User::all();

        // Create habits for each user
        $users->each(function ($user) {
            Habit::factory(rand(3, 7))->create([
                'user_id' => $user->id
            ]);
        });
    }
}
