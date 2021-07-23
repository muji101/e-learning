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
    public function store(Request $request)
    {   
        Category::create($request->all());
        return redirect('/dashboard/category');
    }
    public function edit($id)
    {   
        $category = Category::findOrFail($id);
        return view('pages.dashboard.category.dashboard-category-create', ['category' => $category]);
    }
    public function update(Request $request, $id)
    {   
        Category::find($id)->update($request->all());
        return redirect('/dashboard/category');
    }
}
