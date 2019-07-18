@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage Slider <a href="{{ route('products.create') }}" class="btn btn-primary pull-right">Add New</a></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Youtube Video</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($slider as $key => $v)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $v->title }}</td>
                                <td>{{ $v->description }}</td>
                                <td><img src="{{URL('/slider/',$v->slider)}}" with="200px" height="150px"></td>
                                <td>
                                    <a href="slider/{{ $v->id }}/edit" type="button" class="btn btn-sm btn-primary">Edit</a>
                                </td>
                                <td>
                                     <form action="{{ route('slider.destroy', $v->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>  
                                </td>
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
