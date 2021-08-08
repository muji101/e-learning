<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;

class DashboardAdminController extends Controller
{
    public function adminCategory()
    {
        $categories = Category::orderBy('id','desc')->get();
        return view('pages.dashboard.admin.dashboard-category', ['categories' => $categories]);
    }
    public function adminClass()
    {
        $classes = Course::orderBy('id','desc')->get();
        
        return view('pages.dashboard.admin.dashboard-class', ['classes'=> $classes]);
    }
}
