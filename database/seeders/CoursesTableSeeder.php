<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->insert([
            [
                'course_name' => 'Introduction to Programming',
                'teacher_name' => 'John Doe',
                'price' => 100.00,
                'description' => 'Learn the basics of programming using Python.',
                'duration' => '10 hours',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Advanced Web Development',
                'teacher_name' => 'Jane Smith',
                'price' => 150.00,
                'description' => 'Master advanced concepts of web development using Laravel.',
                'duration' => '20 hours',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Data Science with R',
                'teacher_name' => 'Alice Johnson',
                'price' => 120.00,
                'description' => 'Explore data science techniques using the R programming language.',
                'duration' => '15 hours',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}