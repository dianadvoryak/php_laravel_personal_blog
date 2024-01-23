@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="display-6 fw-bold text-body-emphasis">Editing category</h3>

        <a href="{{ route('admin.category.index') }}" class="icon-link mb-2">
            back to category
        </a>
        <div class="row justify-content-center">
            <form class="needs-validation" action="{{ route('admin.category.update', $category) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="col-sm-6">
                    <div class="col-sm-6 m-2">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Name of category" value="{{ $category->title }}">
                        @error('title')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <input class="w-100 btn btn-primary btn-sm m-2" type="submit" value="Update">
                    </div>
            </form>
        </div>
    </div>
@endsection
