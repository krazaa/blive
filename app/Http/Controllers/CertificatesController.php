<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificate;
use Image;

class CertificatesController extends Controller
{

    public function __construct()
    {
            $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Certificate::all();
        return view('backend.certificates.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.certificates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Certificate;
        $data->title = $request->title;
         if($request->hasFile('img'))
         {
            $certificate = $request->file('img');
            $filename = time() . '.' . $certificate->getClientOriginalExtension();
            Image::make($certificate)->save(public_path('/certificates/' . $filename));
            $data->img = $filename;
        }

        $data->save();

        return redirect()->route('certificates.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Certificate::find($id);

        return view('backend.certificates.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Certificate::findOrFail($id);

        if($request->hasFile('slide'))
        {
            $image = $request->file('slide');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('/slider/' . $filename));
            $Edit->slider = $filename;
        }

        $data->update($request->all());
        $data->save();

    return redirect()->route('certificates.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data= Certificate::findOrFail($id);
         $data->delete();

        return redirect()->route('certificates.index');
    }
}