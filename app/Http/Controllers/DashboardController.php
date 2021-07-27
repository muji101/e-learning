<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class DashboardController extends Controller
{
    public function index()
    {
        $classes = Course::get();
        $categories = Category::get();
        $users = User::get();
        
        return view('pages.dashboard.dashboard', ['classes' => $classes, 'categories' => $categories, 'users' => $users]);
    }
}
