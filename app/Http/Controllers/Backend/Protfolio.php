<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ships;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class Protfolio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ships=ships::orderBy('id','desc')->get();
        return view('backend.pages.projectPage.manage',compact('Ships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.pages.projectPage.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ship = new ships();
        $ship->name             = $request->name;
        $ship->category             = $request->category;
        $ship->vessel_name             = $request->vessel_name;
        $ship->owner             = $request->owner;
        $ship->builder             = $request->builder;
        $ship->class             = $request->class;
        $ship->build_date             = $request->build_date;
        $ship->description             = $request->description;
        $ship->features             = $request->features;
        if ( $request->image )
        {
            $image = $request->file('image');
            $img = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/protfolio/' . $img);
            Image::make($image)->save($location);
            $ship->image = $img;
        }
        $ship->save();
        Toastr::success('Protfolio Created');
        return redirect()->route('manageProtfolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ships $ship, $id)
    {
        $ship= ships::find($id);
        return view('backend.pages.projectPage.edit', compact('ship'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ships $ship,Request $request, $id)
    {
        $ship= ships::find($id);
       
        $ship->name             = $request->name;
        $ship->category             = $request->category;
        $ship->vessel_name             = $request->vessel_name;
        $ship->owner             = $request->owner;
        $ship->builder             = $request->builder;
        $ship->class             = $request->class;
        $ship->build_date             = $request->build_date;
        $ship->description             = $request->description;
        $ship->features             = $request->features;
      
        if ( $request->image )
        {
            // Delete Existing Image
            if ( File::exists('images/protfolio/' . $ship->image ) ){
                File::delete('images/protfolio/' . $ship->image);
            }
            // Upload New Image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/protfolio/' . $img);
            Image::make($image)->save($location);
            $ship->image = $img;
        }
        $ship->save();
        Toastr::success('Protfolio Updated');
        return redirect()->route('manageProtfolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ships $ship,$id)
    {   
        $ship= ships::find($id);
        if( File::exists('images/protfolio/'. $ship->image) ){
            File::delete('images/protfolio/'. $ship->image);
        }
        $ship->delete();
        Toastr::error('Protfolio Deleted');
        return redirect()->route('manageProtfolio');
    }
}
