<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Service;
use App\Anchor;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paragraphs=Service::orderBy('id','desc')->get();
        return view('backend.pages.homePageService.manageParagraph',compact('paragraphs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.homePageService.createParagraph');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paragraph = new Service();
        $paragraph->paragraph             = $request->paragraph;
        $paragraph->save();
        Toastr::success('Anchor Created');
        return redirect()->route('manageParagraph');
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
    public function edit(Service $paragraph,$id)
    {
        $paragraph = Service::find($id);
        return view('backend.pages.homePageService.editParagraph',compact('paragraph'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Service $paragraph, $id)
    {
        $paragraph = Service::find($id);
        $paragraph->paragraph             = $request->paragraph;
        $paragraph->save();
        Toastr::success('Service Updated');
        return redirect()->route('manageParagraph');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $paragraph,$id)
    {
        $paragraph= Service::find($id);
       
        $paragraph->delete();
        Toastr::error('Service Delted');
        return redirect()->route('manageParagraph');
    }

 


    public function index1()
    {
        $anchors=Anchor::orderBy('id','desc')->get();
        return view('backend.pages.homePageAnchor.manage',compact('anchors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create1()
    {
        return view('backend.pages.homePageAnchor.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        $paragraph = new Anchor();
        $paragraph->anchor             = $request->anchor;
        $paragraph->save();
        Toastr::success('Service Created Anchor');
        return redirect()->route('manageAnchor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show1($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit1(Anchor $anchor,$id)
    {
        $anchor = Anchor::find($id);
        
        return view('backend.pages.homePageAnchor.edit',compact('anchor'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update1(Request $request,Anchor $anchor, $id)
    {
        $anchor = Anchor::find($id);
        $anchor->anchor             = $request->anchor;
        $anchor->save();
        Toastr::success('Service Anchor Updated');
        return redirect()->route('manageAnchor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy1(Anchor $Anchor,$id)
    {
        $Anchor= Anchor::find($id);
       
        $Anchor->delete();
        Toastr::error('Service Anchor Deleted');
        return redirect()->route('manageAnchor');
    }
}
