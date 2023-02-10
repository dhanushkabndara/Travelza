<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            
        ]);

        $contact = new Contact();
        $contact->username = $request->input('username');  
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->message = $request->input('message');
        $contact->save();
}



}
