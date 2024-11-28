<?php

namespace Database\Seeders;

use App\Models\Milestone;
use App\Models\Project;
use Illuminate\Database\Seeder;

class MilestoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get existing projects
        $projects = Project::all();

        // Create milestones for each project
        $projects->each(function ($project) {
            Milestone::factory(rand(1, 4))->create([
                'project_id' => $project->id
            ]);
        });
    }
}
