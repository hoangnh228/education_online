<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    protected $model = \App\Models\Video::class;

    public function definition()
    {
        return [
            'video_name' => $this->faker->sentence(),
            'course_id' => \App\Models\Course::factory(),
            'teacher_id' => \App\Models\User::factory()->state(['role' => 'teacher']),
            'description' => $this->faker->paragraph(),
            'duration' => $this->faker->numberBetween(5, 120),
            'url' => $this->faker->url(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}