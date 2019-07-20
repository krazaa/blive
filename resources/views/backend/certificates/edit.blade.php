@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Slide</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                   <form action="{{ route('certificates.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                  <div class="form-group">
                    <label for="email">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}">
                  </div>

                  <div class="form-group">
                    <img src="{{URL('/certificates/',$data->img)}}">
                  </div>

                  <div class="form-group">
                    <label for="img">Certificate</label>
                    <input type="file" class="form-control" id="img" name="img">
                  </div>
                  <button class="btn btn-primary">Update</button>
                  
                </form>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
