<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $classes = Course::get();
        $classCount =Course::get();
        $reviews = Review::get();

        
        return view('pages.class', [
            'categories' => $categories,
            'classes' => $classes,
            'reviews' => $reviews,
            'classCount' => $classCount

            ]);
    }

    public function detail(Request $request, $name)
    {
        $categories = Category::get();
        $category = Category::where('name', $name)->firstOrFail();
        $classes = Course::where('category_id', $category->id)->paginate(32);
        $reviews = Review::get();

        $classCount = Course::get();

        
        return view('pages.class', [
            'categories' => $categories,
            'classes' => $classes,
            'reviews' => $reviews,
            'classCount' => $classCount
            ]);
    }
}
