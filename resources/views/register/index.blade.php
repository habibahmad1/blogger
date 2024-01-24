@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-4">
    <main class="form-registration">
        <form action="/register" method="POST">
            @csrf
        <img class="mb-4 mx-auto d-block img-thumbnail rounded-circle" src="img/profil.png" alt="" width="150" height="150">
        
        <h1 class="h3 mb-3 fw-normal text-center" style="color:crimson"><b>Register Here Master!</b></h1>
        
        <div class="form-floating mb-2">
            <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
            <label for="name">Name</label>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-floating mb-2">
            <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
            <label for="username">Username</label>
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating mb-2">
            <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
            <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating mb-2">
            <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button class="btn btn-danger w-100 py-2 mb-3 mt-3" type="submit">Register</button>

        </form>
        <small class="d-block text-center mt-3">Already Have Account?<a href="/login" class="text-decoration-none"> Login Here</a></small>

        <p class="mt-2 mb-3 text-center"><small>Made from <i class="bi bi-heart-fill" style="color: red"></i> with My Master! | 2023</small></p>

    </main>
    </div>
</div>



@endsection