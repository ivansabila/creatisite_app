<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Can;

class DashboardController extends Controller
{
    public function index()
    {
        // dd('Home Route'); 
        return view('client.dashboard', [
            'title' => 'Dashboard',
            'blogs' => Blog::all(),
            'recommendBlogs' => Blog::all()->sortByDesc('likes')->take(3),
            'categories' => Category::all()
        ]);
    }
}
