@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Slide</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                   <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                  <div class="form-group">
                    <label for="email">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                  </div>
                  <div class="form-group">
                    <label for="email">Description</label>
                    <input type="text" class="form-control" id="description" name="description" >
                  </div>

                  <div class="form-group">
                    <label for="email">Slider image</label>
                    <input type="file" class="form-control" id="slider" name="slider">
                  </div>
                  <button class="btn btn-primary">Save</button>
                  
                </form>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
