<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Subscription;
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


        return response()->json(['message' => 'Your message has been sent successfully.'], 200);

    }

    public function subscribe(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|email|max:255',
        ]);
    
        Subscription::create([
            'email' => $validateData['email'],
        ]);
    
        return response()->json(['message' => 'Thank you for your subscription'], 200);
    }

}
