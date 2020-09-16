<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $sliders=Slider::orderBy('id','desc')->get();
        return view('backend.pages.homePageSlider.manage',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.homePageSlider.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $slider = new Slider();
        $slider->title             = $request->title;
        $slider->description       = $request->Description;
       

        if ( $request->backGround_Image )
        {
            $image = $request->file('backGround_Image');
            $img = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/slider/' . $img);
            Image::make($image)->save($location);
            $slider->backGround_Image = $img;
        }
        $slider->save();
        Toastr::success('Slider Created');
        return redirect()->route('manageSlider');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
       
        return view('backend.pages.homePageSlider.edit', compact('slider'));
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Slider $slider)
    {
        $slider->title             = $request->title;
        $slider->description       = $request->description;
       

        if ( $request->backGround_Image )
        {
            if ( File::exists('images/slider/' . $slider->image ) ){
                File::delete('images/slider/' . $slider->image);
            }
            $image = $request->file('backGround_Image');
            $img = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/slider/' . $img);
            Image::make($image)->save($location);
            $slider->backGround_Image = $img;
        }
        $slider->save();
        Toastr::success('Service Updated');
        return redirect()->route('manageSlider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider,$id)
    {
        $slider= Slider::find($id);
        if( File::exists('images/slider/'. $slider->image) ){
            File::delete('images/slider/'. $slider->image);
        }
        $slider->delete();
        Toastr::error('Service Deleted');
        return redirect()->route('manageSlider');
    }
}
