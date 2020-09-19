<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ships;
use App\Ship;
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

    public function portfolio()
    {
      return view('Frontend.pages.portfolio');  
    }
    public function portfolioDetail(){
      return view('Frontend.pages.portfolio-detail');
    }
    public function allPortfolio(){
      return view('Frontend.pages.all-portfolio');
    }

    public function projects()
    {
      $ships = Ships::orderBy('id','asc')->paginate(9);
      return view('Frontend.pages.projects', compact('ships'));  
    }

    public function client(){
      return view('Frontend.pages.client');
    }
    public function event(){
      return view('Frontend.pages.event');
    }

    public function project_details(ships $ship)
    {
    
      
      return view('Frontend.pages.project-detail',compact('ship'));  
    }

    public function career(){
      return view('Frontend.pages.career');
    }
    public function careerDetail(){
      return view('Frontend.pages.careerDetail');
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
    public function search(Request $request)
    {
      $search=Ships::Where('name', 'LIKE', "%$request->name%")->orWhere('category', 'LIKE', "%$request->name%")->orWhere('vessel_name', 'LIKE', "%$request->name%")->orWhere('owner', 'LIKE', "%$request->name%")->
      orWhere('builder', 'LIKE', "%$request->name%")->orWhere('class', 'LIKE', "%$request->name%")->orWhere('build_date', 'LIKE', "%$request->name%")->orWhere('description', 'LIKE', "%$request->name%")->
      orWhere('features', 'LIKE', "%$request->name%")->get();
    }
   
}
