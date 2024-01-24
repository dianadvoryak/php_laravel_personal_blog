@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <h1 class="display-5 fw-bold text-body-emphasis">Posts</h1>
                <a href="{{ route('admin.main.index') }}" class="icon-link mb-2">
                    back to menu
                </a>
                @if(auth()->user()->role === 0)
                    <a href="{{ route('admin.post.create') }}"
                       class="nav-link active btn btn-primary rounded-pill w-25 p-2 mb-2" aria-current="page">Add</a>
                @endif

                @foreach($posts as $post)
                    <div class="feature col bg-body-tertiary rounded-3 border p-5 mb-2">
                        <h3 class="fs-2 text-body-emphasis">{{ $post->id }}. {{ $post->title }}</h3>
                        <p>Content: {{ $post->content }}</p>
                        <p>Published: {{ $post->published === true ? 'true' : 'false' }}</p>
                        <p>Category:
                            @foreach($categories as $category)
                                @if($category->id === $post->category_id)
                                    {{ $category->title }}
                                @endif
                            @endforeach
                        </p>
                        <div class="w-50 mb-2">
                            @if(isset($post->image))
                                <img src="{{ url('storage/' . $post->image) }}" alt="image" class="w-50">
                            @endif
                        </div>
                        <a href="{{ route('admin.post.show', $post->id) }}" class="icon-link">
                            Show
                        </a>
                        <a href="{{ route('admin.post.edit', $post->id) }}" class="icon-link">
                            Edit
                        </a>
                        @if(auth()->user()->role === 0)
                            <form action="{{ route('admin.post.delete', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="border-0 bg-transparent p-0" type="submit">
                                    <a class="icon-link">Remove</a>
                                </button>
                            </form>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
