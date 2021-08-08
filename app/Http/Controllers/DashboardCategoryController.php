<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

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
    public function store(CategoryRequest $request)
    {   
        $data = $request->all();

        $data['photo'] = $request->file('photo')->store('assets/category','public');
        $data['slug'] = Str::slug($request->name);
        
        Category::create($data);
        return redirect('/dashboard/category');
    }
    public function edit($id)
    {   
        $category = Category::findOrFail($id);
        return view('pages.dashboard.category.dashboard-category-create', ['category' => $category]);
    }
    public function update(CategoryRequest $request, $id)
    {   
        $data = $request->all();

        $data['photo'] = $request->file('photo')->store('assets/category','public');
        $data['slug'] = Str::slug($request->name);

        Category::find($id)->update($data);
        return redirect('/dashboard/category');
    }

    public function destroy($id)
    {
        $data = Category::find($id);
        $data->delete();
        return back();
    }
}
