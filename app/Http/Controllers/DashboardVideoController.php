<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardVideoController extends Controller
{
    public function create($idCahpter, $idClass)
    {   
        $chapters = Chapter::findOrfail($idCahpter);
        $classes = Course::find($idClass);

        return view('pages.dashboard.class.create-video', ['chapters'=> $chapters, 'classes'=> $classes]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Video::create($data);
        return redirect()->route('class-detail', $request->class_id);

    }

    public function edit($id)
    {
        $videos = Video::findOrFail($id);
        // $chapters = Chapter::get();
        
        return view('pages.dashboard.class.create-video', ['videos'=> $videos]);


    }   

    public function update(Request $request, $id)
    {
        $data = $request->all();

        Video::find($id)->update($data);
        return redirect()->route('class-detail', $request->class_id);

    }

    public function destroy($id)
    {
        $data = Video::find($id);
        $data->delete();
        return back();
    }
}
