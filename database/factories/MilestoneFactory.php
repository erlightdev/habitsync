<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Milestone;
use App\Models\Project;

class MilestoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Milestone::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->text(),
            'due_date' => $this->faker->date(),
            'project_id' => Project::factory(),
        ];
    }
}
