<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Clients=Client::orderBy('id','desc')->get();
        return view('backend.pages.homePageClient.manage',compact('Clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.homePageClient.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();
        if ( $request->image )
        {
            $image = $request->file('image');
            $img = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/client/' . $img);
            Image::make($image)->save($location);
            $client->image = $img;
        }
        $client->save();
        Toastr::success('Client Created');
        return redirect()->route('manageClients');
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
    public function edit(Client $client)
    {
        return view('backend.pages.homePageClient.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Client $client)
    {
        if ( $request->image )
        {
            // Delete Existing Image
            if ( File::exists('images/client/' . $client->image ) ){
                File::delete('images/client/' . $client->image);
            }
            // Upload New Image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/client/' . $img);
            Image::make($image)->save($location);
            $client->image = $img;
        }

        $client->save();
        Toastr::success('Client Updated');

        return redirect()->route('manageClients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        if( File::exists('images/slider/'. $client->image) ){
            File::delete('images/slider/'. $client->image);
        }
        $client->delete();
        Toastr::error('Client Deleted');
        return redirect()->route('manageClients');
    }
}
