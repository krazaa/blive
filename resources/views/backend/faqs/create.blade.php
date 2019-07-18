@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Question</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                   <form action="{{ route('faqs.store') }}" method="POST">
                    @csrf
                    @method('POST')
                  <div class="form-group">
                    <label for="Title">Question</label>
                    <input type="text" class="form-control" id="title" name="title">
                  </div>
                  <div class="form-group">
                    <label for="Description">Answer</label>
                   <textarea class="form-control my-editor" name="description" id="my-editor" placeholder="Page Content"></textarea>
                    
                  </div>

                  
                  <button class="btn btn-primary">Save</button>
                  
                </form>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
