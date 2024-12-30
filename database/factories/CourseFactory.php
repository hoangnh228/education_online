<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = \App\Models\Course::class;

    public function definition()
    {
        return [
            'course_name' => $this->faker->sentence(),
            'teacher_id' => \App\Models\User::where('role', 'teacher')->inRandomOrder()->first()->id,
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'description' => $this->faker->paragraph(),
            'duration' => $this->faker->numberBetween(10, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}