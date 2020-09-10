<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Countdown;
use Brian2694\Toastr\Facades\Toastr;

class CountdownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countdowns=Countdown::orderBy('id','desc')->get();
        return view('backend.pages.homePageCountdown.manage',compact('countdowns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.homePageCountdown.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Countdown = new Countdown();
        $Countdown->projects_done               = $request->projects_done;
        $Countdown->offshore_projects           = $request->offshore_projects;
        $Countdown->expert_engineers            = $request->expert_engineers;
        $Countdown->man_power                   = $request->man_power;
       

       
        $Countdown->save();
        Toastr::success('Countdown Created');
        return redirect()->route('manageCountdown');
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
    public function edit(Countdown $countdown)
    {
        
        return view('backend.pages.homePageCountdown.edit',compact('countdown'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Countdown $countdown)
    {
        $countdown->projects_done             = $request->projects_done;
        $countdown->offshore_projects       = $request->offshore_projects;
        $countdown->expert_engineers       = $request->expert_engineers;
        $countdown->man_power       = $request->man_power;
       

       
        $countdown->save();
        Toastr::success('Countdown Updated');
        return redirect()->route('manageCountdown');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Countdown $countdown)
    {
        $countdown->delete();
        Toastr::error('Countdown Deleted');
        return redirect()->route('manageCountdown');
    }
}
