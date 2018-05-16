
@extends('master')
@section('content')

<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <h1>Add New Admin</h1>
        <hr>
        <div class="card">
          <div class="card-header">
            <strong>Admin</strong>
          </div>
          <div class="card-body">
            <form action="{{route('admin.store')}}" method="post">
              {{ csrf_field() }}

              <div class="form-group">
                <label for="user_id">User</label>
                <select id="user_id" name="user_id" class="form-control form-control">
                  <option value="">Please Select</option>
                  @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="opd_id">Unit Kerja</label>
                <select id="opd_id" name="opd_id" class="form-control form-control">
                  <option value="">Please select</option>
                  @foreach ($opds as $opd)
                    <option value="{{$opd->id}}">{{$opd->name}}</option>
                  @endforeach
                </select>
              </div>

              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
