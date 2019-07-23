@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <h1>Welcome {{ Auth::user()->name }}</h1>
                

                   <table class="table">
                       
                       <tbody>
                        @foreach ($member as $member)
                        <form action="{{ route('members.memberupdate.submit', $member->id) }}" method="POST">
                        @csrf
                          <input type="hidden" name="id" value="{{ $member->id }}">
                           <tr>
                            @if( !empty($member->name))
                               <td>Name: </td>
                               <td> {{ $member->name }}</td>
                               @else
                               <td>Name: <input type="text" name="name" class="form-control"></td>
                               <td> </td>
                               @endif
                           </tr>
                            <tr>
                              @if(!empty($member->email))
                               <td>Email: </td>
                               <td> {{ $member->email }}</td>
                                 @else
                               <td>Email: <input type="text" name="email" class="form-control"></td>
                               <td> </td>
                               @endif
                           </tr>

                           <tr> @if(!empty($member->mobile))
                               <td>Mobile: </td>
                               <td> {{ $member->mobile }}</td>
                               @else
                               <td>Mobile: </td>
                               <td> <input type="text" name="mobile" class="form-control"></td>
                               @endif
                           </tr>
                           <tr>
                               <td>CNIC: </td>
                            @if(!empty($member->cnicf))
                               <td> Front Side: <img src="{{URL('/cnics/',$member->cnicf)}}" width="100px">
                                </td>
                               @else
                               <td>Front: <input type="file" name="cnicf" class="form-control"></td>
                               @endif
                               @if(!empty($member->cnicb))
                               <td> 
                                Back Side: <img src="{{URL('/cnics/',$member->cnicb)}}" width="100px"></td>
                               @else
                               <td> Back: <input type="file" name="cnicb" class="form-control"></td>
                               @endif
                           </tr>
                           <tr>
                               @if(!empty($member->address))
                               <td>Address: </td>
                               <td> {{ $member->address }}</td>
                                 @else
                               <td>Address: </td>
                               <td><input type="text" name="address" class="form-control"></td>
                               @endif
                           </tr>
                           <tr>
                              @if(!empty($member->package))
                               <td>Product: </td>
                               <td> {{ $member->package }}</td>
                                 @else
                               <td>Select Package:</td>
                               <td> <select name="package" class="form-control">
                                  <option selected disabled>Select one</option>
                                 @foreach ($packages as $package)
                                 <option value="{{ $package->id }}">{{ $package->title }}</option>
                                 @endforeach
                               </select>
                               </td>
                               @endif
                           </tr>
                       </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          {{-- <input type="submit" name="ss" value="sdfs"> --}}
                          <button class="btn btn-primary pull-right">Save Information</button>
                        </td>
                      </tr>         
                           
                           @endforeach
                             </form>
                       </tbody>
                   </table>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
