<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        return view('pages.class');
    }
    public function detail()
    {
        return view('pages.class_detail');
    }
    public function mentor()
    {
        return view('pages.class_mentor');
    }
    public function video()
    {
        return view('pages.class_videos');
    }
    public function search()
    {
        return view('pages.search');
    }
}
