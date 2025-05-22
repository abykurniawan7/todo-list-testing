<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = \App\Models\Task::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'reminder_at' => $this->faker->dateTimeBetween('now', '+1 month'),
        ];
    }
}
