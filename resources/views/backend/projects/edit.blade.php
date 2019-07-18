@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit {{ $data->title }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                   <form action="{{ route('projects.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}">
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control my-editor" name="description" id="my-editor" placeholder="Page Content">{!! html_entity_decode($data->description) !!}</textarea>
                   
                  </div>
                  <button class="btn btn-primary">Update</button>
                  
                </form>
                    
                </div>

            </div>
        </div>
    </div>
</div>


@endsection