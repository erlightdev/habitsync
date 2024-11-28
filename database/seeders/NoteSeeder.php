<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use App\Models\Project;
use App\Models\Habit;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $projects = Project::all();
        $habits = Habit::all();

        $users->each(function ($user) use ($projects, $habits) {
            Note::factory(rand(2, 5))->create([
                'user_id' => $user->id,
                'project_id' => $projects->random()->id,
                'habit_id' => $habits->random()->id
            ]);
        });
    }
}
