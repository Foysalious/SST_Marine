<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProtfolioImages;
use App\Protfolio;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class ProtfolioImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $protfolios= ProtfolioImages::orderBy('id','desc')->get();
        return view('backend.pages.protfolioImages.manage',compact('protfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.protfolioImages.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $protfolio = new ProtfolioImages();
        $protfolio->protfolio_id             = $request->protfolio_id;
        $protfolio->description             = $request->description;
        
        
       

        if ( $request->image )
        {
            $image = $request->file('image');
            $img = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/protfolio/' . $img);
            Image::make($image)->save($location);
            $protfolio->image = $img;
        }
        $protfolio->save();
        Toastr::success('Protfolio Created');
        return redirect()->route('manageProtfolioImage');
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
    public function edit(ProtfolioImages $protfolio ,$id)
    {
        $protfolio= ProtfolioImages::find($id);
        return view('backend.pages.protfolioImages.edit',compact('protfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProtfolioImages $protfolio,Request $request, $id)
    {
        $protfolio= ProtfolioImages::find($id);
        $protfolio->protfolio_id             = $request->protfolio_id;
        $protfolio->description             = $request->description;
        if ( $request->image )
        {
            if ( File::exists('images/protfolio/' . $protfolio->image ) ){
                File::delete('images/protfolio/' . $protfolio->image);
            }
            $image = $request->file('image');
            $img = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/protfolio/' . $img);
            Image::make($image)->save($location);
            $protfolio->image = $img;
        }
        $protfolio->save();
        return redirect()->route('manageProtfolioImage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProtfolioImages $protfolio,$id)
    {
        $protfolio= ProtfolioImages::find($id);
        if( File::exists('images/protfolio/'. $protfolio->image) ){
            File::delete('images/protfolio/'. $protfolio->image);
        }
        $protfolio->delete();
        Toastr::error('Service Deleted');
        return redirect()->route('manageProtfolioImage');
    }
}




