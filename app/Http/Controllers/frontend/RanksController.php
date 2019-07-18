<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rank;
class RanksController extends Controller
{
    
     public function Show($id){
		
    $data = Rank::find($id);

    return view('ranks', compact('data'));
	}
}
