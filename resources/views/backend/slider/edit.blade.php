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
                    
                   <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                  <div class="form-group">
                    <label for="email">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $slider->title }}">
                  </div>
                  <div class="form-group">
                    <label for="email">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $slider->description }}">
                  </div>

                  <div class="form-group">
                    <img src="{{URL('/slider/',$slider->slider)}}">
                  </div>

                  <div class="form-group">
                    <label for="slide">Slide</label>
                    <input type="file" class="form-control" id="slider" name="slide">
                  </div>
                  <button class="btn btn-primary">Update</button>
                  
                </form>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
