<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create()
    {
        return view('client.blog-add', [
            'title' => 'My Blog',
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $validate = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'body' => 'required',
        ]);
        
        $validate['user_id'] = 1;

        Blog::create($validate);

        return redirect('/');
    }
}
