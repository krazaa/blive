@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create News</div>

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
                    
                   <form action="{{ route('members.store') }}" method="POST">
                    @csrf
                    @method('POST')
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="email">email</label>
                       <input type="text" class="form-control" id="email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="mobile">Mobile</label>
                       <input type="text" class="form-control" id="mobile" name="mobile">
                       <input type="hidden" class="form-control" id="password" name="password" value="Password@321">
                  </div>

                  
                  <button class="btn btn-primary">Save</button>
                  
                </form>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
