<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modules\Fpvideos;

class FpvideosController extends Controller
{
    public function index()
    {
    	$fpv = Fpvideos::all();

    	return view('backend.fpvideos.index', compact('fpv'));
    }

    public function edit($id)
    {
    	$fpv = Fpvideos::find($id);

    	return view('backend.fpvideos.edit', compact('fpv'));
    }

     public function update(Request $request, $id)
    {
    	$fpv = Fpvideos::find($id);

    	$fpv->update($request->all());

    	return redirect()->route('fpv.index');
    }

     public function destroy($id)
    {        
           $fpv= Fpvideos::findOrFail($id);
           $fpv->delete();

        return redirect()->route('fpv.index');
    }
}
