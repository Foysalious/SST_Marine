<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\descriptionAnchor;
use Brian2694\Toastr\Facades\Toastr;

class AnchorDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anchors=descriptionAnchor::orderBy('id','desc')->get();
        return view('backend.pages.aboutPageDescriptionAnchor.manage',compact('anchors'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.aboutPageDescriptionAnchor.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $anchor = new descriptionAnchor;
        $anchor->anchor  = $request->anchor;
         $anchor->save();   
         Toastr::success('Description Created');
        return redirect()->route('manageDesAnchor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(descriptionAnchor $anchor,$id)
    {
        $anchor= descriptionAnchor::find($id);
        return view('backend.pages.aboutPageDescriptionAnchor.edit',compact('anchor'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(descriptionAnchor $anchor, Request $request, $id)
    {
        $anchor = descriptionAnchor::find($id);
        $anchor->	anchor             = $request->	anchor;
      
       
        
        $anchor->save();
        Toastr::success('Description Updated');
        return redirect()->route('manageDesAnchor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(descriptionAnchor $anchor, $id)
    {
               
        $anchor= descriptionAnchor::find($id);
       
        $anchor->delete();
        Toastr::error('Description Deleted');
        return redirect()->route('manageDesAnchor');
    }
}
