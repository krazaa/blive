<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\modules\Faq;

class FaqsController extends Controller
{
    public function index(){
		
    $data = Faq::all();

    return view('faqs', compact('data'));
	}
}
