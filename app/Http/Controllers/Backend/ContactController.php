<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use Brian2694\Toastr\Facades\Toastr;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Contacts=Contact::orderBy('id','desc')->get();
        return view('backend.pages.contactPage.manage',compact('Contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.contactPage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Contact $contact, Request $request)
    {
        $contact = new Contact();
        $contact->number             = $request->number;
        $contact->email             = $request->email;
        $contact->address             = $request->address;
        $contact->facebook             = $request->facebook;
        $contact->twitter             = $request->twitter;
        $contact->instagram             = $request->instagram;
        $contact->linkedin             = $request->linkedin;
        $contact->youtube             = $request->youtube;
        $contact->save();
        Toastr::success('Contact Created');
        return redirect()->route('manageContacts');
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
    public function edit(Request $request, Contact $contact)
    {
       return view('backend.pages.contactPage.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Contact $contact,Request $request)
    {
        $contact->number             = $request->number;
        $contact->email             = $request->email;
        $contact->address             = $request->address;
        $contact->facebook             = $request->facebook;
        $contact->twitter             = $request->twitter;
        $contact->instagram             = $request->instagram;
        $contact->linkedin             = $request->linkedin;
        $contact->youtube             = $request->youtube;
        $contact->save();
        Toastr::success('Contact Updated');
        return redirect()->route('manageContacts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        Toastr::error('Team Member Deleted');
        return redirect()->route('manageCountdown');
    }
}
