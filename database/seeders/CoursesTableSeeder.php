<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->insert([
            [
                'title' => 'Introduction to Programming',
                'teacher_name' => 'John Doe',
                'description' => 'Learn the basics of programming using Python.',
                'duration' => '10 hours',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Advanced Web Development',
                'teacher_name' => 'Jane Smith',
                'description' => 'Master advanced concepts of web development using Laravel.',
                'duration' => '20 hours',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Data Science with R',
                'teacher_name' => 'Alice Johnson',
                'description' => 'Explore data science techniques using the R programming language.',
                'duration' => '15 hours',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
