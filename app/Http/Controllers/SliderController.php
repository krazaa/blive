<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modules\Slider;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        return view('backend.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider;
        $slider->title = $request->title;
        $slider->description = $request->description;
         if($request->hasFile('slider'))
         {
            $slide = $request->file('slider');
            $filename = time() . '.' . $slide->getClientOriginalExtension();
            Image::make($slide)->save(public_path('/slider/' . $filename));
            $slider->slider = $filename;
        }

        $slider->save();

        return redirect()->route('slider.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);

        return view('backend.slider.edit', compact('slider'));
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
        $Edit = Slider::findOrFail($id);

        if($request->hasFile('slide'))
        {
            $image = $request->file('slide');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('/slider/' . $filename));
            $Edit->slider = $filename;
        }

        $Edit->update($request->all());
        $Edit->save();

    return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $slider= Slider::findOrFail($id);
           $slider->delete();

        return redirect()->route('slider.index');
    }
}
