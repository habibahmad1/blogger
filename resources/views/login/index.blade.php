@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-4">
    <main class="form-signin">
        <form action="/login" method="POST">
        @csrf
        <img class="mb-4 mx-auto d-block img-thumbnail rounded-circle" src="img/profil.png" alt="" width="150" height="150">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        
        <h1 class="h3 mb-3 fw-normal text-center" style="color:crimson"><b>Please Login Master!</b></h1>
        
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            <label for="email">Email address</label>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>

        <button class="btn btn-danger w-100 py-2 mb-3" type="submit">Login</button>

        </form>
        <small class="d-block text-center mt-3"><a href="/register" class="text-decoration-none">Register Now!</a></small>

        <p class="mt-5 mb-3 text-center"><small>Made from <i class="bi bi-heart-fill" style="color: red"></i> with My Master! | 2023</small></p>

    </main>
    </div>
</div>



@endsection