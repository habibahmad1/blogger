@extends('layouts.main')

@section('container')
    
<h1 class="mb-5"> Post Categories</h1>

<div class="container">
    <div class="row">
        @foreach ( $categories as $category)

        <div class="col-md-4">
            <div class="card text-bg-dark">
                <a href="/blog?category={{ $category->slug }}">
                    <img src="https://source.unsplash.com/1200x700?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">

                    <h5 class="card-title flex-fill text-center p-4 fs-3" style="background-color: rgba(52, 167, 255, 0.5); color: white">{{ $category->name }}</h5>
                
                    </div>
                    </a>
              </div>
        </div>

        @endforeach
    </div>
</div>
    
@endsection