<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ServicePage;
use Brian2694\Toastr\Facades\Toastr;

class ServicePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Services=ServicePage::orderBy('id','desc')->get();
        

        return view('backend.pages.servicePage.manage',compact('Services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.servicePage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServicePage $service, Request $request)
    {
        $service->	title             = $request->	title;
        $service->	services             = $request->	services;
        $service->save();
        Toastr::success('Service Created');
        return redirect()->route('manageServices');
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
    public function edit(ServicePage $service,$id)
    {    $service= ServicePage::find($id);
        return view('backend.pages.servicePage.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServicePage $service, Request $request,$id)
    {
    
        $service= ServicePage::find($id);
        $service->	title             = $request->	title;
        $service->	services             = $request->	services;
        $service->save();
        Toastr::success('Service Updated');
        return redirect()->route('manageServices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicePage $service,$id)
    {
        $service= ServicePage::find($id);
        $service->delete();
        Toastr::error('Service Deleted');
        return redirect()->route('manageServices');
    }
}
 