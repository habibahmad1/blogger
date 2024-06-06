@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post Categories</h1>
</div>


@if(session()->has('success'))
<div class="alert alert-success col-lg-5" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive small col-lg-5">
    <a href="#" onclick="alert('Sedang Dalam Pengembangan')" class="btn btn-primary mb-3">Create New Category</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>
            <a href="#" class="badge bg-info"class="btn btn-info text-white" onclick="alert('Sedang Dalam Pengembangan')"><i class="bi bi-eye-fill"></i></a>
            <a href="#" onclick="alert('Sedang Dalam Pengembangan')" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
            <form action="#" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="alert('Sedang Dalam Pengembangan')"><i class="bi bi-trash-fill "></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection