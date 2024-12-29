<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('videos')->insert([
            [
                'videoname' => 'Introduction to Python',
                'courses_id' => 1,
                'coursename' => 'Introduction to Programming',
                'teacher_name' => 'John Doe',
                'description' => 'This is an introduction to Python programming.',
                'duration' => '1 hour',
                'url' => 'https://example.com/intro-to-python.mp4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'videoname' => 'Advanced Laravel Techniques',
                'courses_id' => 2,
                'coursename' => 'Advanced Web Development',
                'teacher_name' => 'Jane Smith',
                'description' => 'Learn advanced techniques in Laravel.',
                'duration' => '2 hours',
                'url' => 'https://example.com/advanced-laravel.mp4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'videoname' => 'Data Visualization with R',
                'courses_id' => 3,
                'coursename' => 'Data Science with R',
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
