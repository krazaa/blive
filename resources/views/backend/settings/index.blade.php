@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Settings</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @foreach ($setting as $setting)
                        <p>Company: {{ $setting->company }}</p>
                        <p>Address: {{ $setting->address }}</p>
                        <p>Email: {{ $setting->email }}</p>
                        <p>Contact No: {{ $setting->contact }}</p>
                        <p>Fax: {{ $setting->fax }}</p>
                        <p>Facebook: {{ $setting->fb }}</p>
                        <p>Twitter: {{ $setting->tw }}</p>
                        <p>Instagram: {{ $setting->ig }}</p>
                        <p>Youtube: {{ $setting->yt }}</p>
                        <p>
                            <img src="{{ asset('logo/'. $setting->logo) }}">
                        </p>
                    @endforeach
                    <a href="settings/{{ $setting->id }}/edit" type="button" class="btn btn-primary">Edit Setting</a>    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
