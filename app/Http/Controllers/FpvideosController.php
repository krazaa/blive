<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modules\Fpvideos;

class FpvideosController extends Controller
{
    public function index()
    {
    	$fpvbe = Fpvideos::all();

    	return view('backend.fpvideos.index', compact('fpvbe'));
    }

    public function edit($id)
    {
    	$fpvbe = Fpvideos::find($id);

    	return view('backend.fpvideos.edit', compact('fpvbe'));
    }

     public function update(Request $request, $id)
    {
    	$fpvbe = Fpvideos::find($id);

    	$fpvbe->update($request->all());

    	return redirect()->route('fpv.index');
    }

     public function destroy($id)
    {        
           $fpvbe= Fpvideos::findOrFail($id);
           $fpvbe->delete();

        return redirect()->route('fpv.index');
    }
}
