@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage Packages <a href="{{ route('packages.create') }}" class="btn btn-primary pull-right">Add New</a></div>

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
                            <th></th>
                            <th >Action</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $v)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $v->title }}</td>
                                <td align="right">
                                    <a href="{{ route('packages.show', $v->id) }}" type="button" class="btn btn-sm btn-primary">Show</a>
                                    <a href="packages/{{ $v->id }}/edit" type="button" class="btn btn-sm btn-warning">Edit</a>
                                </td>
                                <td>
                                     <form action="{{ route('packages.destroy', $v->id)}}" method="post">
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
