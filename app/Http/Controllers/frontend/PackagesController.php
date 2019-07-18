<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\modules\Package;

class PackagesController extends Controller
{
    public function ShowPackage($id){
		
    $data = Package::find($id);

    return view('packages', compact('data'));
	}
}
