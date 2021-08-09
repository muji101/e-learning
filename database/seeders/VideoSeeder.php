<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::truncate();

        Video::create([
            'title' => 'Tools Vue',
            'url' => 'https://www.youtube.com/embed/RkRdR-LYC_E',
            'chapter_id' => 1,
            'class_id' => 1
        ]);


    }
}
