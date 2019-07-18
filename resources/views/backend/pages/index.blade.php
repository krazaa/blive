@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage Pages <a href="{{ route('pages.create') }}" class="btn btn-primary pull-right">Add New</a></div>

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
                                    <a href="{{ route('pages.show', $v->id) }}" type="button" class="btn btn-sm btn-primary">Show</a>
                                    <a href="pages/{{ $v->id }}/edit" type="button" class="btn btn-sm btn-warning">Edit</a>
                                </td>
                                <td>
                                     <form action="{{ route('pages.destroy', $v->id)}}" method="post">
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
