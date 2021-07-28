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
        $classes = Course::get();
        $categories = Category::get();
        $users = User::get();

        return view('pages.class',['classes'=> $classes, 'categories' => $categories, 'users' => $users]);
    }
    public function detail($id)
    {
        // return view('pages.class_detail');
        $chaptervideo = Chapter::get();

        $chapters = Chapter::where('class_id', $id)->get();
        $classes = Course::findOrFail($id);
        $categories = Category::get();
        $users = User::get();

        return view('pages.class_detail',['classes'=> $classes, 'categories' => $categories, 'users' => $users, 'chapters' => $chapters, 'chaptervideo' => $chaptervideo]);
    }
    public function mentor()
    {
        return view('pages.class_mentor');
    }
    public function video($id)
    {
        $classes = Course::find($id);
        $videos = Video::get();
        $chapters = Chapter::where('id','chapter_id')->get();
        
        return view('pages.class_videos',['classes'=> $classes, 'videos' => $videos, 'chapters'=> $chapters ]);
    }
    
}
