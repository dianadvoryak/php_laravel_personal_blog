@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <span class="fs-4">Menu</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('admin.category.index') }}" class="nav-link link-body-emphasis" aria-current="page">
                        Categories
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.post.index') }}" class="nav-link link-body-emphasis">
                        Posts
                    </a>
                </li>
            </ul>
            <hr>
        </div>
    </div>
</div>
@endsection
