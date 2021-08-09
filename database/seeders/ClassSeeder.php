<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::truncate();

        Course::create([
            'name' => 'Vue JavaScript Framework',
            'title' => 'Learn how to build a real project from scratch',
            'description' => 'Menggunakan framework JavaScript Vue',
            'photo' => '/images/undraw_people_tax5.svg',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'vue-javaScript-framework'
        ]); 
    }
}
