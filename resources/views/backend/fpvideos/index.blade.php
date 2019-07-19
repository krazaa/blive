@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Homepage Videos</div>
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
                            @foreach ($fpvbe as $key => $v)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $v->title }}</td>
                                <td>{{ $v->description }}</td>
                                <td>
                                     {!! html_entity_decode($v->ytlink) !!}
                                </td>
                                <td>
                                    <a href="fpv/{{ $v->id }}/edit" type="button" class="btn btn-sm btn-primary">Modify</a>
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
