@extends('master')
@section('content')
<div class="jumbotron text-center">
  <h1>Nama : {{ $admin->getUser->name }}</h1>
</div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title"><h2>Unit Kerja : {{ $admin->getOpd->name }}</h2></h5>
    <h6 class="card-subtitle mb-2 text-muted">Created : {{ $admin->created_at }}</h6>
    <hr />

    <a href="{{ route('admin.create') }}">
      <button type="button" class="btn btn-success">Add New</button>
    </a>
    <a href="{{ route('admin.edit',$admin->id) }}">
      <button type="button" class="btn btn-warning">Edit</button>
    </a>
  </div>
</div>

@endsection
