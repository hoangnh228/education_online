<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = \App\Models\Course::class;

    public function definition()
    {
        $statuses = ['active', 'inactive', 'pending'];

        return [
            'course_name' => $this->faker->sentence(),
            'teacher_id' => \App\Models\User::factory()->state(['role' => 'teacher']),
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'description' => $this->faker->paragraph(),
            'duration' => $this->faker->numberBetween(10, 100),
            'status' => $this->faker->randomElement($statuses),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
