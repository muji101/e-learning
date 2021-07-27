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
    public function detail()
    {
        return view('pages.class_detail');

        $classes = Course::get();
        $caltegories = Category::get();
        $users = User::get();

        return view('pages.class',['classes'=> $classes, 'categories' => $caltegories, 'users' => $users]);
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
    public function search(Request $request)
    {
        // dd($request->get('search'));
        $categories = Category::get();

        $videos = Video::get();
        
        $search = $request->get('search');
        $classes = Course::where('name', 'like', '%'.$search.'%')->get();

        return view('pages.search', ['classes' => $classes, 'categories' => $categories, 'videos' => $videos]);
    }
}
