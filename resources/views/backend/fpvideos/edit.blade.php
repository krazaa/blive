@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Video</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                   <form action="{{ route('fpv.update', $fpv->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                  <div class="form-group">
                    <label for="email">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $fpv->title }}">
                  </div>
                  <div class="form-group">
                    <label for="email">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $fpv->description }}">
                  </div>

                  <div class="form-group">
                    <label for="email">Video Link</label>
                    <input type="text" class="form-control" id="ytlink" name="ytlink" value="{{ $fpv->ytlink }}">
                  </div>
                  <button class="btn btn-primary">Update</button>
                  
                </form>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
