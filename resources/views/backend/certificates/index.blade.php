@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage Certificates <a href="{{ route('certificates.create') }}" class="btn btn-primary pull-right">Add New</a></div>
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
                            <th>Certificates</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $v)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $v->title }}</td>
                                <td><img src="{{URL('/certificates/',$v->img)}}" with="200px" height="150px"></td>
                                <td>
                                    <a href="certificates/{{ $v->id }}/edit" type="button" class="btn btn-sm btn-primary">Edit</a>
                                </td>
                                <td>
                                     <form action="{{ route('certificates.destroy', $v->id)}}" method="post">
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
