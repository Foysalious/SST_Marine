<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


use App\ClientDescrip;

class ClientDescription extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descriptions=ClientDescrip::orderBy('id','desc')->get();
        return view('Backend.pages.clientDescription.manage',compact('descriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.clientDescription.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $description = new ClientDescrip();
        $description->description_1             = $request->description_1;
        
        
        $description->save();
        Toastr::success('Description Created');
        return redirect()->route('manageClientsDescription');
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
    public function edit(ClientDescrip $description,$id)
    {
        $description = ClientDescrip::find($id);

        return view('backend.pages.aboutPageDescription.edit', compact('description'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientDescrip $description, Request $request, $id)
    {
        $description = ClientDescrip::find($id);
        $description->description_1             = $request->description_1;
       
       
        
        $description->save();
        Toastr::success('Description Updated');
        return redirect()->route('manageClientsDescription');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientDescrip $description,$id)
    {
        $description= ClientDescrip::find($id);
       
        $description->delete();
        Toastr::error('Description Deleted');
        return redirect()->route('manageClientsDescription');
    }
}
