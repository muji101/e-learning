<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardClassController extends Controller
{
    public function index()
    {
        return view('pages.dashboard-class');
    }
    public function create()
    {
        return view('pages.dashboard-class-create');
    }
    public function detail(Request $request, $id)
    {
        return view('pages.dashboard-class-detail');
    }
}
