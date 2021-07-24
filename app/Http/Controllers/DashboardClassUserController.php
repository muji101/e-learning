<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardClassUserController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('pages.dashboard.class-user.dashboard-class', ['categories'=> $categories]);
    }
}
