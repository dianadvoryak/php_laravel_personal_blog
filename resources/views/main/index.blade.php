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
                                <img src="{{ url('storage/' . $post->image) }}" alt="image" class="w-50">
                            @endif
                        </div>
                    </div>
                @endforeach
                <form method="GET" id="formCount">
                    <p>Show:</p>
                    <select name="count" id="countPaginate">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                    </select>
                    <button type="submit" id="countGo">go</button>
                </form>
                <div class="mt-2">
                    {{ $posts->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
