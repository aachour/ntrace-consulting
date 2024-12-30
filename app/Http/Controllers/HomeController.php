<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function homeEn()
    {
        return view('frontend.home-en');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function contactEn()
    {
        return view('frontend.contact-en');
    }

    
}
