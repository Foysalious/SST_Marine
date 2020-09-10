<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Techno;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Techno=Techno::orderBy('id','desc')->get();
        return view('backend.pages.technologyPage.manage',compact('Techno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.technologyPage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tech = new Techno();
        $tech->title             = $request->title;
        $tech->description       = $request->description;
       

        if ( $request->icon )
        {
            $image = $request->file('icon');
            $img = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/solution/' . $img);
            Image::make($image)->save($location);
            $tech->icon = $img;
        }
        $tech->save();
        Toastr::success('Technology Created');
        return redirect()->route('manageTechnology');
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
    public function edit(Techno $tech, $id)
    {
        $tech= Techno::find($id);
        return view('backend.pages.technologyPage.edit', compact('tech'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Techno $tech,Request $request, $id)
    {
        $tech= Techno::find($id);
       
        $tech->title       = $request->title;
        $tech->description       = $request->description;
      
        if ( $request->icon )
        {
            // Delete Existing Image
            if ( File::exists('images/solution/' . $tech->icon ) ){
                File::delete('images/solution/' . $tech->icon);
            }
            // Upload New Image
            $image = $request->file('icon');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/solution/' . $img);
            Image::make($image)->save($location);
            $tech->icon = $img;
        }
        $tech->save();
        Toastr::success('Technology Updated');
        return redirect()->route('manageTechnology');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Techno $tech,$id)
    {
        $tech= Techno::find($id);
        if( File::exists('images/solution/'. $tech->image) ){
            File::delete('images/solution/'. $tech->image);
        }
        $tech->delete();
        Toastr::error('Technology Deleted');
        return redirect()->route('manageTechnology');
    }
}
