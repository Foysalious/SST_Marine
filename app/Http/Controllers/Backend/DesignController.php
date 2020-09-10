<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Design;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Designs=Design::orderBy('id','desc')->get();
        return view('backend.pages.aboutPageDesign.manage',compact('Designs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.aboutPageDesign.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Solution = new Design();
        $Solution->title             = $request->title;
        $Solution->paragraph       = $request->paragraph;
        if ( $request->icon_image )
        {
            $image = $request->file('icon_image');
            $img = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/solution/' . $img);
            Image::make($image)->save($location);
            $Solution->icon_image = $img;
        }
        $Solution->save();
        Toastr::success('Design Created');
        return redirect()->route('manageDesign');
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
    public function edit(Design $design)
    {
        return view('backend.pages.aboutPageDesign.edit', compact('design'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Design $design)
    {
        $design->title             = $request->title;
        $design->paragraph       = $request->paragraph;
       
        if ( $request->icon_image )
        {
            // Delete Existing Image
            if ( File::exists('images/solution/' . $design->icon_image ) ){
                File::delete('images/solution/' . $design->icon_image);
            }
            // Upload New Image
            $image = $request->file('icon_image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/solution/' . $img);
            Image::make($image)->save($location);
            $design->icon_image = $img;
        }
        $design->save();
        Toastr::success('Design Updated');
        return redirect()->route('manageDesign');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Design $design)
    {
        if( File::exists('images/solution/'. $design->icon_image) ){
            File::delete('images/solution/'. $design->icon_image);
        }
        $design->delete();
        Toastr::error('Design Deleted');
        return redirect()->route('manageDesign');
    }
}
