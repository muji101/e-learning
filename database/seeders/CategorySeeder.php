<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        Category::create([
            'name' => 'Code',
            'photo' => '/images/undraw_people_tax5.svg',
            'description' => 'Full-Stack Developer',
            'slug' => 'code'
        ]);
    }
}
