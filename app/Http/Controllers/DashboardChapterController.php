<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Course;
use App\Models\Video;
use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Http\Request;

class DashboardChapterController extends Controller
{
    // public function index()
    // {
    //     // // $classes = Course::get();
    //     // // $chapters = Chapter::get();
    //     // // $videos = Video::get();
    //     // return redirect()->route('class-detail', ['classes'=> $classes, 'chapters'=> $chapters, 'videos'=> $videos]);
    // }

    public function create($id)
    {   
        $classes = Course::findOrfail($id);
        return view('pages.dashboard.class.create-chapter', ['classes'=> $classes]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Chapter::create($data);

        return redirect()->route('class-detail', $request->class_id);


    }

    public function edit($id)
    {
        $chapters = Chapter::findOrFail($id);
        
        return view('pages.dashboard.class.create-chapter', ['chapters'=> $chapters]);


    }   

    public function update(Request $request, $id)
    {
        $data = $request->all();
        Chapter::find($id)->update($data);

        return redirect()->route('class-detail', $request->class_id);

    }

    public function destroy($id)
    {
        $data = Chapter::find($id);
        $data->delete();
        return back();
    }
}
