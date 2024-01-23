@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <h1 class="display-5 fw-bold text-body-emphasis">Post</h1>
                <a href="{{ route('admin.post.index') }}" class="icon-link mb-2">
                    back to posts
                </a>

                    <div class="feature col bg-body-tertiary rounded-3 border p-5 mb-2">
                        <h3 class="fs-2 text-body-emphasis">{{ $post->id }}. {{ $post->title }}</h3>
                    </div>
            </div>
        </div>
    </div>
@endsection
