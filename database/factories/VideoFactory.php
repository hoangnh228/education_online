<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    protected $model = \App\Models\Video::class;

    public function definition()
    {
        $statuses = [0, 1, 2]; // 0 - inactive, 1 - active, 2 - pending

        return [
            'video_name' => $this->faker->sentence(),
            'course_id' => \App\Models\Course::factory(),
            'teacher_id' => \App\Models\User::factory()->state(['role' => 'teacher']),
            'description' => $this->faker->paragraph(),
            'duration' => $this->faker->numberBetween(5, 120),
            'url' => $this->faker->url(),
            'status' => $this->faker->randomElement($statuses),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}