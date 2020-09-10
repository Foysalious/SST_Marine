<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Teams=Team::orderBy('id','desc')->get();
        return view('backend.pages.teamPage.manage',compact('Teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.teamPage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new Team();
        $team->name             = $request->name;
        $team->designation       = $request->designation;
        $team->facebook       = $request->facebook;
        $team->linkedin       = $request->linkedin;
        $team->twitter       = $request->twitter;
        $team->team       = $request->team;
        if ( $request->image )
        {
            $image = $request->file('image');
            $img = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/team/' . $img);
            Image::make($image)->save($location);
            $team->image = $img;
        }
        $team->save();
        Toastr::success('Team Member Created');
        return redirect()->route('manageTeam');
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
    public function edit(Team $team)
    {
       
        return view('backend.pages.teamPage.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Team $team, Request $request)
    {
       
        $team->name             = $request->name;
        $team->designation       = $request->designation;
        $team->facebook       = $request->facebook;
        $team->linkedin       = $request->linkedin;
        $team->twitter       = $request->twitter;
        $team->team       = $request->team;
        if ( $request->image )
        {
            // Delete Existing Image
            if ( File::exists('images/team/' . $team->image ) ){
                File::delete('images/team/' . $team->image);
            }
            // Upload New Image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/team/' . $img);
            Image::make($image)->save($location);
            $team->image = $img;
        }
        $team->save();
        Toastr::success('Team Member Updated');
        return redirect()->route('manageTeam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        if( File::exists('images/team/'. $team->image) ){
            File::delete('images/team/'. $team->image);
        }
        $team->delete();
        Toastr::error('Team Member Deleted');
        return redirect()->route('manageTeam');
    }
}
