<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get existing users
        $users = User::all();

        // Create projects for each user
        $users->each(function ($user) {
            Project::factory(rand(1, 3))->create([
                'user_id' => $user->id
            ]);
        });
    }
}
