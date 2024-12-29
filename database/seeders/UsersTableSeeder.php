<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'fullname' => 'Admin User',
                'username' => 'admin_user',
                'password' => Hash::make('password'),
                'dob' => '1980-01-01',
                'address' => 'Admin Address',
                'phonenumber' => '1234567890',
                'email' => 'admin@example.com',
                'role' => 'admin',
                'image' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Teacher User',
                'username' => 'teacher_user',
                'password' => Hash::make('password'),
                'dob' => '1985-05-15',
                'address' => 'Teacher Address',
                'phonenumber' => '0987654321',
                'email' => 'teacher@example.com',
                'role' => 'teacher',
                'image' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Regular User',
                'username' => 'regular_user',
                'password' => Hash::make('password'),
                'dob' => '1990-10-10',
                'address' => 'User Address',
                'phonenumber' => '1122334455',
                'email' => 'user@example.com',
                'role' => 'user',
                'image' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
