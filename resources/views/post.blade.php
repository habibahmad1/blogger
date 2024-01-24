@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <p>By: <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> In <a href="/blog?category={{ $post->Category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            @if($post->image)
            <div style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluids">
            @endif

            <article class="my-3 fs-5">
                {!! $post->body !!}   
            </article>
            <br>

            <a href="/blog" class="btn btn-primary mt-4">Back to post</a>

        </div>
    </div>
</div>

    
@endsection