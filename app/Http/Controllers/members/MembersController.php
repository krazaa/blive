<?php

namespace App\Http\Controllers\members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\Member;
use App\modules\Package;

class MembersController extends Controller
{
	
    public function __construct()
    {
        $this->middleware('auth');
    }

      public function welcome()

    {
    	$member = Member::where('id', Auth::user()->id)->get();

      $packages = Package::all();

        return view('members.dashboard', compact('member','packages'));
    }

    public function memberupdate(Request $request)
    {
        
        $count = Member::where('rp','=', $request->package)->count();
        if($count) {

         $data = Member::findOrFail($request->id);  
         //$data->update($request->package);
         $data->package = $request->package;
         $data->save();

          
        } else{

            return Redirect::back()->withErrors(['Invalid Package please select valid package']);
        }      

         
    }
}
