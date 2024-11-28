<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\TeamSeeder;
use Database\Seeders\HabitSeeder;
use Database\Seeders\ProjectSeeder;
use Database\Seeders\MilestoneSeeder;
use Database\Seeders\NoteSeeder;
use Database\Seeders\ProgressLogSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@habitsync.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        // Create additional test users
        User::factory(10)->create();

        // Call other seeders in order
        $this->call([
            TeamSeeder::class,
            HabitSeeder::class,
            ProjectSeeder::class,
            MilestoneSeeder::class,
            NoteSeeder::class,
            ProgressLogSeeder::class,
        ]);
    }
}
