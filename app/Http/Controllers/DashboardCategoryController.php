<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardCategoryController extends Controller
{
    public function index()
    {
        return view('pages.dashboard-category');
    }
    public function create()
    {
        return view('pages.dashboard-category-create');
    }
}
