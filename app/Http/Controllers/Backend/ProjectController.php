<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Projects=Project::orderBy('id','desc')->get();
        return view('backend.pages.homePageProjects.manage',compact('Projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.homePageProjects.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();
        if ( $request->project_image )
        {
            $image = $request->file('project_image');
            $img = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/project/' . $img);
            Image::make($image)->save($location);
            $project->project_image = $img;
        }
        $project->save();
        Toastr::success('Design Projects Created');
        return redirect()->route('manageProject');
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
    public function edit(Project $project)
    {
        return view('backend.pages.homePageProjects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Project $project)
    {
        if ( $request->project_image )
        {
            // Delete Existing Image
            if ( File::exists('images/project/' . $project->project_image ) ){
                File::delete('images/project/' . $project->project_image);
            }
            // Upload New Image
            $image = $request->file('project_image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/project/' . $img);
            Image::make($image)->save($location);
            $project->project_image = $img;
        }

        $project->save();
        Toastr::success('Design Projects Updated');

        return redirect()->route('manageProject');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if( File::exists('images/project/'. $project->image) ){
            File::delete('images/project/'. $project->image);
        }
        $project->delete();
        Toastr::error('Design Projects Deleted');
        return redirect()->route('manageProject');
    }
}
