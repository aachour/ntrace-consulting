<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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

    public function submitForm(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'subject' => 'nullable|string',
            'message' => 'required|string',
        ]);

        Contact::create([
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message'],
            'status' => 0,
        ]);

        // // Redirect to home with a success message
        // if (request()->is('contact')) {
        //     return redirect()->route('home')->with('success', 'Your message has been sent successfully.');
        // }
    
        // // Check if the current path is '/en/contact'
        // if (request()->is('en/contact')) {
        //     return redirect('/en');
        // }    

        return redirect()->route('home')->with('success', 'Your message has been sent successfully.');

    }

    
}
