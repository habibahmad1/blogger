@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left-circle"></i> Back to my all posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill "></i> Delete</button>
              </form>
            @if($post->image)
            <div style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid my-3">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid my-3">
            @endif

            <article class="my-3 fs-5">
                {!! $post->body !!}   
            </article>
            <br>

        </div>
    </div>
</div>

@endsection