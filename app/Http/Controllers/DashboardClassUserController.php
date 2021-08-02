<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Join;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardClassUserController extends Controller
{
    public function index()
    {
        $classes = Course::get();
        $categories = Category::get();
        $joins = Join::where('user_id', Auth::user()->id)->get();

        return view('pages.dashboard.class-user.dashboard-class', [
            'classes' => $classes,
            'categories'=> $categories,
            'joins' => $joins
        ]);
    }

    public function category(Request $request, $id, $name)
    {
        // $categories = Category::get();
        // $category = Category::where('name', $name)->firstOrFail();
        // $classes = Course::where('category_id', $category->id)->paginate(32);
        $joins = Join::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();

        
        return view('pages.dashboard.class-user.dashboard-class', [
            // 'categories' => $categories,
            // 'classes' => $classes,
            'joins' => $joins

            ]);
    }
}
