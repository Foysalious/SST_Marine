<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Protfolio;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class ProtfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $protfolios= Protfolio::orderBy('id','desc')->get();
        return view('backend.pages.protfolioPage.manage',compact('protfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.pages.protfolioPage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $protfolio = new Protfolio();
        $protfolio->title             = $request->title;
        $protfolio->slug             = Str::slug($request->title);
        
       

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
        return redirect()->route('manageProtfolio');
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
    public function edit(Protfolio $protfolio)

    {
        
        return view('backend.pages.protfolioPage.edit',compact('protfolio'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Protfolio $protfolio,Request $request)
    {
        $protfolio->title             = $request->title;
        $protfolio->slug             = Str::slug($request->title);
       

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
        Toastr::success('Protfolio Updated');
        return redirect()->route('manageProtfolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Protfolio $protfolio)
    {
       
        if( File::exists('images/protfolio/'. $protfolio->image) ){
            File::delete('images/protfolio/'. $protfolio->image);
        }
        $protfolio->delete();
        Toastr::error('Protfolio Deleted');
        return redirect()->route('manageProtfolio');
    }
}
