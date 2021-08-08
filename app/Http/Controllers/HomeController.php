<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $classes = Course::get();
        $classesRecomend = Course::limit(3)->get();
        // $classesRecomend = Course::paginate(1);
        $categories = Category::limit(2)->get();

        // $categoriess = Category::with('course')->orderBy($categories->course->count()->max())->get();

        $users = User::get();
        $reviews = Review::get();

        return view('pages.home',[
            'classes'=> $classes, 
            'categories' => $categories, 
            'users' => $users, 
            'classesRecomend' => $classesRecomend,
            'reviews' => $reviews,
        ]);
    }
}
