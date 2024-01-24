@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Setting</h1>
</div>

<div class="col-lg-8">

    <h3 class="my-3 text-center">My Profile</h3 class="my-3">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" readonly>
    </div>
    
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" name="username" value="{{ auth()->user()->username }}" readonly>
    </div>
    
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="text" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
    </div>
    <a href="" class="btn btn-info text-white" onclick="alert('Sedang Dalam Pengembangan')"><i class="bi bi-pencil"></i> Edit</a>

@endsection