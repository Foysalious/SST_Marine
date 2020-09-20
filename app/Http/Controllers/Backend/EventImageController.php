<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProtfolioImages; 
use App\Protfolio;
use App\Events;
use App\eventImages;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class EventImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events= eventImages::orderBy('id','desc')->get();
        return view('backend.pages.eventImages.manage',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.eventImages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new eventImages();
        $event->event_id             = $request->event_id;
      
        
        
       

        if ( $request->image )
        {
            $image = $request->file('image');
            $img = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/event/' . $img);
            Image::make($image)->save($location);
            $event->image = $img;
        }
        $event->save();
        Toastr::success('Image Created');
        return redirect()->route('manageeventImage');

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
    public function edit(eventImages $event ,$id)
    {
        $event= eventImages::find($id);
        return view('backend.pages.eventImages.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(eventImages $event,Request $request, $id)
    {
        $event= eventImages::find($id);
        $event->event_id             = $request->event_id;
        
        if ( $request->image )
        {
            if ( File::exists('images/event/' . $event->image ) ){
                File::delete('images/event/' . $event->image);
            }
            $image = $request->file('image');
            $img = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/event/' . $img);
            Image::make($image)->save($location);
            $event->image = $img;
        }
        $event->save();
        return redirect()->route('manageeventImage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(eventImages $event,$id)
    {
        $event= eventImages::find($id);
        if( File::exists('images/event/'. $event->image) ){
            File::delete('images/event/'. $event->image);
        }
        $event->delete();
        Toastr::error('Image Deleted');
        return redirect()->route('manageeventImage');
    }
}
