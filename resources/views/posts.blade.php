@extends('layouts.main')

@section('container')

    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row mb-3 justify-content-center">
      <div class="col-md-6">
        <form action="/blog">
          @if(request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if(request('author'))
              <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Type Here..." name="search" value="{{ request('search') }}">
            <button class="btn btn-danger" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
          @if($posts[0]->image)
            <div style="max-height: 400px; overflow: hidden;">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
            </div>
          @else
          <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
          @endif
        
        <div class="card-body text-center">
          <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark fs-2">{{ $posts[0]->title }}</a></h5>
        <small class="text-body-secondary">
          <p>
            By: <a href="/blog?author={{ $posts[0]->author->username}}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> In <a href="/blog?category={{ $posts[0]->Category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }} </a> {{ $posts[0]->created_at->diffForHumans() }}
          </p>
        </small>

          <p class="card-text">{{ $posts[0]->excerpt }}</p>

          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>

        </div>
      </div>
   

    <div class="container">
        <div class="row">

            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 " style="background-color: rgba(255, 9, 9, 0.5)"><a href="/blog?category={{ $post->Category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                    
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                    @else
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @endif

                    
                    <div class="card-body">

                      <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>

                      <small class="text-body-secondary">
                        <p>
                          By: <a href="/blog?author={{ $post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                        </p>
                      </small>

                      <p class="card-text">{{ $post->excerpt }}</p>

                      <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>

            @endforeach
        </div>
    </div>

    @else
    <p class="text-center fs-3" style="color: gray">No post found</p>
  @endif

  <div class="d-flex justify-content-end">
    {{ $posts->links() }}
  </div>
    
@endsection