<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('videos')->insert([
            [
                'video_name' => 'Introduction to Python',
                'courses_id' => 1,
                'course_name' => 'Introduction to Programming',
                'teacher_name' => 'John Doe',
                'description' => 'This is an introduction to Python programming.',
                'duration' => '1 hour',
                'url' => 'https://example.com/intro-to-python.mp4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'video_name' => 'Advanced Laravel Techniques',
                'courses_id' => 2,
                'course_name' => 'Advanced Web Development',
                'teacher_name' => 'Jane Smith',
                'description' => 'Learn advanced techniques in Laravel.',
                'duration' => '2 hours',
                'url' => 'https://example.com/advanced-laravel.mp4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'video_name' => 'Data Visualization with R',
                'courses_id' => 3,
                'course_name' => 'Data Science with R',
                'teacher_name' => 'Alice Johnson',
                'description' => 'Visualize data using R programming.',
                'duration' => '1.5 hours',
                'url' => 'https://example.com/data-visualization-r.mp4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}