@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="display-6 fw-bold text-body-emphasis">Adding post</h3>

        <a href="{{ route('admin.post.index') }}" class="icon-link mb-2">
            back to posts
        </a>
        <div class="row justify-content-center">
            <form class="needs-validation" action="{{ route('admin.post.store') }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <div class="col-sm-6">

                    <div class="col-sm-6 m-2">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title of post" value="{{ old('title') }}">
                        @error('title')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-sm-6 m-2">
                        <label for="content" class="form-label">Content</label>
                        <input type="text" class="form-control" name="content" id="content"
                               placeholder="Content of post" value="{{ old('content') }}">
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
                                    value="{{$category->id}}" {{$category->id == old('category_id') ? 'selected' : ''}}>
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
                                value="1" {{ old('published') ? 'selected' : ''}}>
                                true
                            </option>
                            <option
                                value="0" {{ old('published') ? 'selected' : ''}}>
                                false
                            </option>
                        </select>
                        @error('category_id')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6 m-2">
                        <label for="exampleInputFile">Add image</label>
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
