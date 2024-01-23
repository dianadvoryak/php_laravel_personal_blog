@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <h1 class="display-5 fw-bold text-body-emphasis">Categories</h1>
                <a href="{{ route('admin.main.index') }}" class="icon-link mb-2">
                    back to menu
                </a>
                <a href="{{ route('admin.category.create') }}"
                   class="nav-link active btn btn-primary rounded-pill w-25 p-2 mb-2" aria-current="page">Add</a>

                @foreach($categories as $category)
                    <div class="feature col bg-body-tertiary rounded-3 border p-5 mb-2">
                        <h3 class="fs-2 text-body-emphasis">{{ $category->id }}. {{ $category->title }}</h3>
                        <a href="{{ route('admin.category.edit', $category->id) }}" class="icon-link">
                            Edit
                        </a>
                        <form action="{{ route('admin.category.delete', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="border-0 bg-transparent p-0" type="submit">
                                    <a class="icon-link">Remove</a>
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
