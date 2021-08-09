<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
    

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name' => 'Teacher',
            'email' => 'teacher@gmail.com',
            'image' => '/images/avatar.svg',
            'password' => Hash::make('12345678'),
            'role' => 'TEACHER'
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'image' => '/images/avatar.svg',
            'password' => Hash::make('12345678'),
            'role' => 'USER'
        ]);
    }
}
