<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ships;
use App\ContactForm;

class frontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('Frontend.pages.index');  
    }

    public function about()
    {
      return view('Frontend.pages.about');  
    }

    public function team()
    {
      return view('Frontend.pages.team');  
    }


    public function services()
    {
      return view('Frontend.pages.Services');  
    }

    public function technology()
    {
      return view('Frontend.pages.technology');  
    }

    public function projects()
    {
      $ships = Ships::orderBy('id','asc')->paginate(9);
      return view('Frontend.pages.projects', compact('ships'));  
    }

    public function project_details(ships $ship)
    {
    
      
      return view('Frontend.pages.project-detail',compact('ship'));  
    }

    public function contact()
    {
      return view('Frontend.pages.contact');  
    }

    public function store(Request $request)
    {
    
        $Newsletter = new ContactForm();
        $Newsletter->first_name          = $request->first_name;
        $Newsletter->last_name          = $request->last_name;
        $Newsletter->email          = $request->email;
        $Newsletter->phone          = $request->phone;
        $Newsletter->message          = $request->message;
       
       
        $Newsletter->save();

        return response()->json($Newsletter, 200);
    }
    
    public function manage()
    {
      $contacts=ContactForm::orderBy('id','desc')->get();
        return view('backend.pages.contactForm.manage',compact('contacts'));
    }
    
   
}
