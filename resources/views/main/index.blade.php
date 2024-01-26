@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <h1 class="display-5 fw-bold text-body-emphasis">Posts</h1>
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
                                <img src="{{ asset('storage/' . $post->image) }}" alt="image" class="w-50">
                            @endif
                        </div>
                    </div>
                @endforeach
                <p>Show:</p>
                <div class="input-group flex-row">
                    <form method="GET" id="formCount">
                        <button class="btn btn-primary" type="submit" value="1"
                                name="count">
                            <span>1</span>
                        </button>
                    </form>
                    <form method="GET" id="formCount">
                        <button class="btn btn-primary" type="submit" value="2"
                                name="count">
                            <span>2</span>
                        </button>
                    </form>
                </div>
                <div class="mt-2">
                    {{ $posts->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
