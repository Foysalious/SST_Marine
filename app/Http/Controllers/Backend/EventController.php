<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events;
use Brian2694\Toastr\Facades\Toastr;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Services=Events::orderBy('id','desc')->get();
        

        return view('backend.pages.newsPage.manage',compact('Services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.newsPage.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Events $service,Request $request)
    {
        $service->	title             = $request->	title;
        $service->	services             = $request->	services;
        $service->save();
        Toastr::success('Events Created');
        return redirect()->route('manageNews');
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
    public function edit($id)
    {
        $service= Events::find($id);
        return view('backend.pages.newsPage.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Events $service, Request $request, $id)
    {
        $service= Events::find($id);
        $service->	title             = $request->	title;
        $service->	services             = $request->	services;
        $service->save();
        Toastr::success('Events Updated');
        return redirect()->route('manageNews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $service,$id)
    {
        $service= Events::find($id);
        $service->delete();
        Toastr::error('Events Deleted');
        return redirect()->route('manageNews');
    }
}
