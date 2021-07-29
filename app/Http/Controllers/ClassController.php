<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\User;
use App\Models\Category;
use App\Models\Chapter;
use App\Models\Video;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class ClassController extends Controller
{
    public function index()
    {
        $classes = Course::get
        ();
        $categories = Category::get();
        $users = User::get();

        return view('pages.class',['classes'=> $classes, 'categories' => $categories, 'users' => $users]);
    }
    public function detail($id)
    {
        $classes = Course::findOrFail($id);

        $chapters = Chapter::where('class_id', $id)->get();
        $categories = Category::get();
        $users = User::get();

        return view('pages.class_detail',['classes'=> $classes, 'categories' => $categories, 'users' => $users, 'chapters' => $chapters]);
    }
    public function mentor($id)
    {
        $users = User::findOrFail($id);
        $classes = Course::where('user_id', $id)->get();

        return view('pages.class_mentor', ['users' => $users, 'classes'=> $classes]);
    }
    public function video($id)
    {
        $classes = Course::findOrFail($id);
        
        return view('pages.class_videos',['classes'=> $classes]);
    }

    public function videoDetail($id)
    {
        // $classes = Course::find($id);
        // $chapters = Chapter::get();
        // $videos = Video::get();

        // return view('pages.class_videos', ['videos' => $videos, 'classes'=> $classes, 'chapters' => $chapters]);

        $classes = Course::findOrFail($id);
        
        return view('pages.class_videos',['classes'=> $classes]);
    }
    
}
