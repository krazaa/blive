@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        
        
        <div class="col-md-12">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ route('pages.index') }}">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Pages</h4>
                    </div>
                    
                    <div class="card-body">
                       <i class="fa fa-file fa-5x"></i>
                    </div>
                    </a>
                </div>
                <div class="card mb-4 shadow-sm">
                    <a href="{{ route('packages.index') }}">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Packages</h4>
                    </div>
                    <div class="card-body">
                        <i class="fa fa-th fa-5x"></i>
                    </div>
                </a>
                </div>
                <div class="card mb-4 shadow-sm">
                    <a href="{{ route('fpv.index') }}">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Homepage Videos</h4>
                    </div>
                    <div class="card-body">
                        <i class="fa fa-home fa-5x"></i>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ route('projects.index') }}">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Projects</h4>
                    </div>
                    <div class="card-body">
                    <i class="fa fa-tasks fa-5x"></i>
                        
                    </div>
                </a>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <a href="{{ route('products.index') }}">
                        <h4 class="my-0 font-weight-normal">Products</h4>
                    </div>
                    <div class="card-body">
                        <i class="fa fa-product-hunt fa-5x"></i>
                    </div>
                </a>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <a href="{{ route('ranks.index') }}">
                        <h4 class="my-0 font-weight-normal">Ranks</h4>
                    </div>
                    <div class="card-body">
                        <i class="fa fa-map-signs fa-5x"></i>
                    </div>
                </div>
            </a>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card-deck mb-3 text-center">
                <a href="{{ route('settings.index') }}">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Settings</h4>
                    </div>
                    <div class="card-body">
                        
                        <i class="fa fa-cogs fa-5x"></i>
                    </div>
                </a>
                </div>
                <div class="card mb-4 shadow-sm">
                    <a href="{{ route('news.index') }}">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">News</h4>
                    </div>
                    <div class="card-body">
                        <i class="fa fa-newspaper-o fa-5x"></i>
                    </div>
                </a>
                </div>
                <div class="card mb-4 shadow-sm">
                    <a href="{{ route('certificates.index') }}">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Certificates</h4>
                    </div>
                    <div class="card-body">
                       <i class="fa fa-certificate fa-5x"></i>
                    </div>
                </div>
            </a>
            </div>
        </div>
         <div class="col-md-12">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ route('members.index') }}">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Members</h4>
                    </div>
                    <div class="card-body">
                        
                       <i class="fa fa-users fa-5x"></i>
                    </div>
                </a>
                </div>
                <div class="card mb-4 shadow-sm">
                    {{-- <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Settings</h4>
                    </div>
                    <div class="card-body">
                        
                        <i class="fa fa-cogs fa-5x"></i><br><br>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                    </div> --}}
                </div>
                
                <div class="card mb-4 shadow-sm">
                    {{-- <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Certificates</h4>
                    </div> --}}
                    {{-- <div class="card-body">
                        <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
                       <i class="">icon here</i>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                    </div> --}}
                </div>
            </div>
        </div>

    </div>
</div>
</div>
@endsection