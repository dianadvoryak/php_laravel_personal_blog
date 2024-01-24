<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use App\Models\Post;

class DeleteController extends Controller
{
    public function __invoke(Post $post)
    {
        if(auth()->user()->role !== 0){
            return redirect()->route('admin.post.index');
        }
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
