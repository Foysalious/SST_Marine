<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\about_image;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class AboutImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images=about_image::orderBy('id','desc')->get();
        return view('Backend.pages.aboutPageImage.manage',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.aboutPageImage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $images = new about_image();
   
       

        if ( $request->image )
        {
            $image = $request->file('image');
            $img = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/aboutImages/' . $img);
            Image::make($image)->save($location);
            $images->image = $img;
        }
        $images->save();
        Toastr::success('Image Created');
        return redirect()->route('manageAboutImage');
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
    public function edit(about_image $image,$id)
    {   
        $image= about_image::find($id);
        return view('backend.pages.aboutPageImage.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,about_image $images,$id)
    {
        $images= about_image::find($id);
        if ( $request->image )
        {
            if ( File::exists('images/aboutImages/' . $images->image ) ){
                File::delete('images/aboutImages/' . $images->image);
            }
            $image = $request->file('image');
            $img = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/aboutImages/' . $img);
            Image::make($image)->save($location);
            $images->image = $img;
        }
        $images->save();
        Toastr::success('Image Updated');
        return redirect()->route('manageAboutImage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(about_image $images,$id)
    {
        $images= about_image::find($id);
        if( File::exists('images/aboutImages/'. $images->image) ){
            File::delete('images/aboutImages/'. $images->image);
        }
        $images->delete();
        Toastr::error('Image Deleted');
        return redirect()->route('manageAboutImage');
    
    }
}
