<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\modules\Product;

class ProductsController extends Controller
{
	public function ShowProduct($id){
		
    $data = Product::find($id);

    return view('products', compact('data'));
	}
}
