<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
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
        return view('travel_places');
    }
}
