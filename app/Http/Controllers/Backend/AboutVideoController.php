<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\about_video;

use Brian2694\Toastr\Facades\Toastr;

class AboutVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos=about_video::orderBy('id','desc')->get();
        return view('Backend.pages.aboutPageVideo.manage',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.aboutPageVideo.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = new about_video();

        $video->link = $request->link;
        $video->save();
        Toastr::success('Video Created');
        return redirect()->route('manageAboutVideo');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(about_video $video, $id)
    {
        $video = about_video::find($id);
        return view('backend.pages.aboutPageVideo.edit',compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,about_video $video, $id)
    {
        $video = about_video::find($id);

        $video->link = $request->link;
        $video->save();
        Toastr::success('Video Updated');
        return redirect()->route('manageAboutVideo');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(about_video $video,$id)
    {
        $video = about_video::find($id);
        $video->delete();
        Toastr::error('Video Deleted');
        return redirect()->route('manageAboutVideo');
    }
}
