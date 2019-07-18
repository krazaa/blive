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
                    
                   <form action="{{ route('settings.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                  <div class="form-group">
                    <label for="company">Company</label>
                    <input type="company" class="form-control" name="company" value="{{  $setting->company }}">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" value="{{  $setting->address }}">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="{{  $setting->email }}">
                  </div>
                  <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control" name="contact" value="{{  $setting->contact }}">
                  </div>
                  <div class="form-group">
                    <label for="fax">Fax</label>
                    <input type="text" class="form-control" name="fax" value="{{  $setting->fax }}">
                  </div>
                  <div class="form-group">
                    <label for="fb">Facebook</label>
                    <input type="text" class="form-control" name="fb" value="{{  $setting->fb }}">
                  </div>
                  <div class="form-group">
                    <label for="tw">Twitter</label>
                    <input type="text" class="form-control" name="tw" value="{{  $setting->tw }}">
                  </div>
                  <div class="form-group">
                    <label for="ig">Instagram</label>
                    <input type="text" class="form-control" name="ig" value="{{  $setting->ig }}">
                  </div>
                  <div class="form-group">
                    <label for="yt">Youtube</label>
                    <input type="text" class="form-control" name="yt" value="{{  $setting->yt }}">
                  </div>
                  <div class="form-group">
                    <img src="{{ asset('logo/'. $setting->logo) }}">  
                  </div>
                  <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" class="form-control" name="logo" id="logo">
                  </div>
                    <button class="btn btn-primary">Update Setting</button>
                </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
