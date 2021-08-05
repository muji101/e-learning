<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\User;
use App\Models\Category;
use App\Models\Chapter;
use App\Models\Review;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;
use App\Models\Join;
use PHPUnit\Framework\Constraint\Count;

class ClassController extends Controller
{
    public function index()
    {
        $classes = Course::get();
        $categories = Category::get();
        $users = User::get();

        return view('pages.class',[
            'classes'=> $classes, 
            'categories' => $categories, 
            'users' => $users
        ]);
    }
    public function detail($id)
    {
        $classes = Course::findOrFail($id);

        $chapters = Chapter::where('class_id', $id)->get();
        $categories = Category::get();
        $users = User::get();
        $reviews = Review::where('class_id', $id)->get();

        $joins = Join::where('class_id', $id)->get();

        return view('pages.class_detail',[
            'classes'=> $classes, 
            'categories' => $categories, 
            'users' => $users, 
            'chapters' => $chapters,
            'reviews' => $reviews,
            'joins' => $joins
        ]);
    }
    public function mentor($id)
    {
        $users = User::findOrFail($id);
        $classes = Course::where('user_id', $id)->get();

        return view('pages.class_mentor', ['users' => $users, 'classes'=> $classes]);
    }

    public function video($classId, $videoId)
    {
        $videos = Video::where('class_id', $classId)->find($videoId);
        $videosNext = Video::where('class_id', $classId)->orderBy('id', 'desc')->get();
        $classes = Course::find($classId);


        
        return view('pages.class_videos_play',[
            'videos'=> $videos, 
            'classes'=> $classes,
            'videosNext' => $videosNext
        ]);
    }
    
    // join
    public function join(Request $request, $classId, $videoId)
    {
        $data = $request->all();

        $videos = Video::where('class_id', $classId)->find($videoId);
        $classes = Course::find($classId);
        

        if (!$request->validate([
            'user_id'=> 'unique:joins,user_id',
            'class_id'=> 'unique:joins,class_id,'.$classId,
            ])
        ){
            Join::create($data);

            return view('pages.class_videos_play',[
                'videos'=> $videos, 
                'classes'=> $classes,
            ]);
        }else{
        return view('pages.class_videos_play',[
            'videos'=> $videos, 
            'classes'=> $classes,
        ]);
        }

        // return view('pages.class_videos_play');
    }

    // review

    public function store(ReviewRequest $request)
    {
        // $review = Review::get();

        $data = $request->all();

        Review::create($data);
        return back();
    }
    
    public function review($id)
    {
        $classes = Course::findOrFail($id);

        $chapters = Chapter::where('class_id', $id)->get();
        $categories = Category::get();
        $users = User::get();

        $reviews = Review::where('class_id', $id)->get();

        $joins = Join::where('class_id', $id)->get();

        

        return view('pages.class_detail_review',[
            'classes'=> $classes, 
            'categories' => $categories, 
            'users' => $users, 
            'chapters' => $chapters,
            'reviews' => $reviews,
            'joins' => $joins

        ]);
    }
}
