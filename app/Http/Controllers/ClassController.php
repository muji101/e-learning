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
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\Count;

class ClassController extends Controller
{
    public function success($id)
    {
        $classes = Course::FindOrFail($id);
        $joinsButton = Join::where([['class_id', $id], ['user_id', Auth::user()->id]])->get();

        // $categories = Category::get();
        // $users = User::get();

        return view('pages.class_join',[
            'classes'=> $classes,
            'joinsButton' => $joinsButton

            // 'categories' => $categories, 
            // 'users' => $users
        ]);
    }

    public function detailClass($slug, $id)
    {
        $classes = Course::where('slug', $slug)->firstOrFail();
        $joins = Join::where('class_id', $id)->get();

        $joinsButton = Join::where([['class_id', $id], ['user_id', isset(Auth::user()->id) ? Auth::user()->id : '']])->get();
        // $joinsButton = Join::where('class_id', $id)->get();



        return view('pages.class_detail',[
            'classes'=> $classes, 
            'joins' => $joins,
            'joinsButton' => $joinsButton
        ]);

        
    }
    

    public function detail($id)
    {
        $classes = Course::findOrFail($id);
        $categories = Category::get();
        $joins = Join::where('class_id', $id)->get();
        
        // $chapters = Chapter::where('class_id', $id)->get();
        // $users = User::get();
        // $reviews = Review::where('class_id', $id)->get();


        $joinsButton = Join::where([['class_id', $id], ['user_id', Auth::user()->id]])->get();

        return view('pages.class_detail',[
            'classes'=> $classes, 
            'categories' => $categories, 
            'joins' => $joins,
            'joinsButton' => $joinsButton
            // 'users' => $users, 
            // 'chapters' => $chapters,
            // 'reviews' => $reviews,
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
        $videosPrev = Video::where('class_id', $classId)->get();
        $videosNext = Video::where('class_id', $classId)->orderBy('id', 'desc')->get();
        // dd($videosNext);
        
        $classes = Course::find($classId);


        
        return view('pages.class_videos_play',[
            'videos'=> $videos, 
            'classes'=> $classes,
            'videosPrev' => $videosPrev,
            'videosNext' => $videosNext
        ]);
    }
    
    // join
    public function join(Request $request, $classId, $videoId)
    {
        $data = $request->all();
        

        $videos = Video::where('class_id', $classId)->find($videoId);
        $videosPrev = Video::where('class_id', $classId)->get();
        $videosNext = Video::where('class_id', $classId)->orderBy('id', 'desc')->get();
        
        $classes = Course::find($classId);
        // $joins = Join::where('user_id', Auth::user()->id)->with('class_id', $classId)->get();

        
        Join::create($data);

        return view('pages.class_videos_play',[
            'videos'=> $videos, 
            'classes'=> $classes,
            'videosNext' => $videosNext,
            'videosPrev' => $videosPrev

            // 'joins' => $joins
        ]);


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
    
    public function review($slug, $id)
    {
        $classes = Course::where('slug', $slug)->firstOrFail();

        $chapters = Chapter::where('class_id', $id)->get();
        $categories = Category::get();
        $users = User::get();

        $reviews = Review::where('class_id', $id)->get();

        $joins = Join::where('class_id', $id)->get();

        $joinsButton = Join::where([['class_id', $id], ['user_id', Auth::user()->id]])->get();


        

        return view('pages.class_detail_review',[
            'classes'=> $classes, 
            'categories' => $categories, 
            'users' => $users, 
            'chapters' => $chapters,
            'reviews' => $reviews,
            'joins' => $joins,
            'joinsButton' => $joinsButton

        ]);
    }
}
