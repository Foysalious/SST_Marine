<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Solution;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Solutions=Solution::orderBy('id','desc')->get();
        return view('backend.pages.homePageSolution.manage',compact('Solutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('backend.pages.homePageSolution.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Solution = new Solution();
        $Solution->title             = $request->title;
        $Solution->paragraph       = $request->paragraph;
        if ( $request->icon_image )
        {
            $image = $request->file('icon_image');
            $img = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/solution/' . $img);
            Image::make($image)->save($location);
            $Solution->icon_image = $img;
        }
        $Solution->save();
        Toastr::success('Solution Created');
        return redirect()->route('manageSolution');
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
    public function edit(Solution $solution)
    {
        return view('backend.pages.homePageSolution.edit', compact('solution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solution $solution)
    {
        $solution->title             = $request->title;
        $solution->paragraph       = $request->paragraph;
       
        if ( $request->icon_image )
        {
            // Delete Existing Image
            if ( File::exists('images/solution/' . $solution->icon_image ) ){
                File::delete('images/solution/' . $solution->icon_image);
            }
            // Upload New Image
            $image = $request->file('icon_image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/solution/' . $img);
            Image::make($image)->save($location);
            $solution->icon_image = $img;
        }
        $solution->save();
        Toastr::success('Solution Updated');
        return redirect()->route('manageSolution');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solution $solution)
    {
        if( File::exists('images/solution/'. $solution->icon_image) ){
            File::delete('images/solution/'. $solution->icon_image);
        }
        $solution->delete();
        Toastr::success('Solution Deleted');
        return redirect()->route('manageSolution');
    }
}
