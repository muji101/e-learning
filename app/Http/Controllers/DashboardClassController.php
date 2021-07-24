<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClassRequest;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class DashboardClassController extends Controller
{
    public function index()
    {
        $classes = Course::get();
        
        return view('pages.dashboard.class.dashboard-class', ['classes'=> $classes]);
    }
    public function detail($id)
    {
        $classes = Course::findOrFail($id);
        return view('pages.dashboard.class.dashboard-class-detail', ['classes'=> $classes]);
    }
    public function create()
    {
        // $classes = Course::get();
        $categories = Category::get();
        return view('pages.dashboard.class.dashboard-class-create', ['categories' => $categories]);
    }

    public function store(ClassRequest $request)
    {
        $data = $request->all();

        $data['photo'] = $request->file('photo')->store('assets/class','public');
        
        Course::create($data);
        return redirect()->route('class');
    }

    public function edit($id)
    {
        $classes = Course::findOrFail($id);
        $categories = Category::get();

        return view('pages.dashboard.class.dashboard-class-create', ['classes' => $classes, 'categories'=> $categories]);
    }

    public function update(ClassRequest $request, $id)
    {
        $data = $request->all();

        $data['photo'] = $request->file('photo')->store('assets/class','public');
        
        Course::find($id)->update($data);
        return redirect()->route('class');
    }

    public function destroy($id)
    {
        $data = Course::find($id);
        $data->delete();
        return back();
    }
}
