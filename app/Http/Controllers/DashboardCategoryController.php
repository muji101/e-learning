<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class DashboardCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('pages.dashboard.category.dashboard-category', ['categories' => $categories]);
    }
    public function create()
    {
        return view('pages.dashboard.category.dashboard-category-create');
    }
    public function store()
    {
        return view('pages.dashboard.category.dashboard-category-create');
    }
}
