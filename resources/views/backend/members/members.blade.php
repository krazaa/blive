@extends('layouts.app')
@section('content')
<div class="container">
  @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Manage Members</div>
        
          
          <table class="table">
            <thead>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Product</th>
            </thead>
            <tbody>
              @foreach ($data as $members)
              <tr>
                <td>{{ $members->id }}</td>
                <td>{{ $members->name }}</td>
                <td>{{ $members->email }}</td>
                <td>{{ $members->mobile }}</td>
                <td>{{ $members->product }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection