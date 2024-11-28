<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Habit;
use App\Models\ProgressLog;

class ProgressLogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProgressLog::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'completed_at' => $this->faker->dateTime(),
            'habit_id' => Habit::factory(),
        ];
    }
}
