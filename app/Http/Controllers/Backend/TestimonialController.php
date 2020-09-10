<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Testimonials=Testimonial::orderBy('id','desc')->get();
        return view('backend.pages.aboutPageTestimonials.manage',compact('Testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('backend.pages.aboutPageTestimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Testimonial = new Testimonial();
        $Testimonial->name             = $request->name;
        $Testimonial->comment       = $request->comment;
        if ( $request->image )
        {
            $image = $request->file('image');
            $img = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/testimonial/' . $img);
            Image::make($image)->save($location);
            $Testimonial->image = $img;
        }
        $Testimonial->save();
        
        Toastr::success('Testimonial Created');
        return redirect()->route('manageTestimonial');
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
    public function edit(Request $request, Testimonial $testimonial)
    {
        return view('backend.pages.aboutPageTestimonials.edit', compact('testimonial'));

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $testimonial->name             = $request->name;
        $testimonial->comment       = $request->comment;
       
        if ( $request->image )
        {
            // Delete Existing Image
            if ( File::exists('images/testimonial/' . $testimonial->image ) ){
                File::delete('images/testimonial/' . $testimonial->image);
            }
            // Upload New Image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/testimonial/' . $img);
            Image::make($image)->save($location);
            $testimonial->image = $img;
        }
        $testimonial->save();
        Toastr::success('Testimonial Updated');
        return redirect()->route('manageTestimonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        if( File::exists('images/testimonial/'. $testimonial->image) ){
            File::delete('images/testimonial/'. $testimonial->image);
        }
        $testimonial->delete();
        Toastr::error('Testimonial Deleted');
        return redirect()->route('manageTestimonial');
    }
}
