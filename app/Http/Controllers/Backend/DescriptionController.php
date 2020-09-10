<?php

namespace App\Http\Controllers\Backend;

use App\des1;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class DescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descriptions=des1::orderBy('id','desc')->get();
        return view('backend.pages.aboutPageDescription.manage',compact('descriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.aboutPageDescription.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $description = new des1();
        $description->description_1             = $request->description_1;
        $description->description_2       = $request->description_2;
        
        $description->save();
        Toastr::success('Description Created');
        return redirect()->route('manageDescription');
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
    public function edit(des1 $description,$id)
    {
        $description = des1::find($id);

        return view('backend.pages.aboutPageDescription.edit', compact('description'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, des1 $description,$id)
    {
        $description = des1::find($id);
        $description->description_1             = $request->description_1;
        $description->description_2       = $request->description_2;
       
        
        $description->save();
        Toastr::success('Description Updated');
        return redirect()->route('manageDescription');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(des1 $description, $id )
    {
        
        $description= des1::find($id);
       
        $description->delete();
        Toastr::error('Description Deleted');
        return redirect()->route('manageDescription');
    }
}
