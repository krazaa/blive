<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;

class AboutController extends Controller
{
     public function Show($id){
		
    $data = Page::where('isHome',false)->where('title',$id)->get();

    return view('about', compact('data'));
	}

	public function ShowPages($id){
		
    $data = Page::where('isHome',false)->where('title',$id)->get();

    return view('about', compact('data'));
	}
}
