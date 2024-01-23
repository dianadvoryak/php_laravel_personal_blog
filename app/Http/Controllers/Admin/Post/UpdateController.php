<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
//        dd($request);
        $data = $request->validated();
//        dd($data);
//        if(isset($request['image'])){
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
//        } else {
//            $data['image'] = $post['image'];
//        }
        $post->update($data);
        return redirect()->route('admin.post.index');
    }
}
