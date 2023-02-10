<?php

namespace App\Http\Controllers;
use App\Models\Hotel;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('index');
    }
    
    public function places()
    {
        return view('places');
    }

    public function gallery()
    {
        return view('about.gallery');
    }

    public function hotel()
    {
        return view('hotel_registration');
    
    }

    public function contact()
    {
        return view('contact');
    }

    public function travel()
    {
         $Hotel = hotel::all();
         return view('travel_places',['Hotel'=>$Hotel]);
    }

    // public function payment()
    // {
    //     return view('payment');
    // }

    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect('/');
    // }
}
