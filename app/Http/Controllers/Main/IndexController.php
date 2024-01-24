<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\FilterRequest;
use App\Models\Category;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
//        dd($data['count']);

        $categories = Category::all();

        if (!empty($data)) {
            $posts = Post::where('published', true)->paginate($data['count']);
        } else {
            $posts = Post::where('published', true)->paginate(1);
        }

        return view('main.index', compact('categories', 'posts'));
    }
}
