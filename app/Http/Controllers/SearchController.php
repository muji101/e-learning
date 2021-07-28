<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Video;
use App\Models\Course;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // dd($request->get('search'));
        $categories = Category::get();
        $videos = Video::get();
        $search = $request->get('search');
        
        $classes = Course::where('name', 'like', '%'.$search.'%')->get();

        return view('pages.search', ['classes' => $classes, 'categories' => $categories, 'videos' => $videos]);
    }
    public function searchCategory(Request $request, $id)
    {
        $categories = Category::all();
        $category = Category::where('id', $id)->firstOrFail();
        $classes = Course::where('category_id', $category->id)->paginate(32);
        
        return view('pages.search', [
            'categories' => $categories,
            'classes' => $classes,
            ]);
    }
}
