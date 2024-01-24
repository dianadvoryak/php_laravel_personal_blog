<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CreateController extends Controller
{
    public function __invoke()
    {
        if(auth()->user()->role !== 0){
            return redirect()->route('admin.post.index');
        }
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }
}
