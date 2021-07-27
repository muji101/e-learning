<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $classes = Course::get();
        $caltegories = Category::paginate(2);
        $users = User::get();

        return view('pages.home',['classes'=> $classes, 'categories' => $caltegories, 'users' => $users]);
    }
}
