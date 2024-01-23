@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="display-6 fw-bold text-body-emphasis">Adding post</h3>

        <a href="{{ route('admin.post.index') }}" class="icon-link mb-2">
            back to posts
        </a>
        <div class="row justify-content-center">
            <form class="needs-validation" action="{{ route('admin.post.update', $post->id) }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="col-sm-6">

                    <div class="col-sm-6 m-2">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title of post"
                               value="{{ $post->title }}">
                        @error('title')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-sm-6 m-2">
                        <label for="content" class="form-label">Content</label>
                        <input type="text" class="form-control" name="content" id="content"
                               placeholder="Content of post" value="{{ $post->content }}">
                        @error('content')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-sm-6 m-2">
                        <label>Select category</label>
                        <select name="category_id" class="form-control">
                            <option
                                value="">
                            </option>
                            @foreach($categories as $category)
                                <option
                                    value="{{$category->id}}" {{ $category->id == $post->category_id ? 'selected' : '' }}>
                                    {{$category->title}}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6 m-2">
                        <label>Select published</label>
                        <select name="published" class="form-control">
                            <option
                                value="1" {{ $post->published == 1 ? 'selected' : ''}}>
                                true
                            </option>
                            <option
                                value="0" {{ $post->published == 0 ? 'selected' : ''}}>
                                false
                            </option>
                        </select>
                        @error('category_id')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6 m-2">
                        <label for="exampleInputFile">Add image</label>
                        <div class="w-50 mb-2">
                            @if(isset($post->image))
                                <img src="{{ url('storage/' . $post->image) }}" alt="image" class="w-50">
                            @endif
                        </div>
                        <div class="input-group">
                            <div class="mb-3">
                                <label for="image" class="form-label">Choose image</label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                        </div>
                        @error('main_image')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <input class="w-100 btn btn-primary btn-sm m-2" type="submit" value="Save">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
