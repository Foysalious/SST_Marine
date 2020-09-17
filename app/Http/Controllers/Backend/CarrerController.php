<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Career;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;

class CarrerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers=Career::orderBy('id','desc')->get();
        return view('backend.pages.career.manage',compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $career= new Career;

        $career->title= $request->title;
        $career->description_1= $request->description_1;
        if ( $request->image )
        {
            $image = $request->file('image');
            $img = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/career/' . $img);
            Image::make($image)->save($location);
            $career->image = $img;
        }
        $career->save();
        Toastr::success('Career Created');
        return redirect()->route('managecareer');
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
    public function edit(Career $career)
    {
        return view('backend.pages.career.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Career $career,Request $request)
    {
        $career->title= $request->title;
        $career->description_1= $request->description_1;

        if ( $request->image )
        {
            // Delete Existing Image
            if ( File::exists('images/career/' . $career->image ) ){
                File::delete('images/career/' . $career->image);
            }
            // Upload New Image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/career/' . $img);
            Image::make($image)->save($location);
            $career->image = $img;
        }

        $career->save();
        Toastr::success('Career Updated');

        return redirect()->route('managecareer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        if( File::exists('images/career/'. $career->image) ){
            File::delete('images/career/'. $career->image);
        }
        $career->delete();
        Toastr::error('Client Deleted');
        return redirect()->route('managecareer');
    }
}
