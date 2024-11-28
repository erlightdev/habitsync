<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get some existing users
        $users = User::inRandomOrder()->limit(3)->get();

        // Create teams with random users
        Team::factory(5)->create()->each(function ($team) use ($users) {
            $team->users()->attach(
                $users->random(rand(1, 3))->pluck('id')
            );
        });
    }
}
