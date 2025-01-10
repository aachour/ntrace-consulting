<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Subscription;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {   
        $pageTitle="Accueil | Ntrace Consulting";
        $pageUrl="https://ntrace-consulting.com/";
        $metaTitle="Prospérer dans le marché dynamique des services informatiques";
        $metaDescription="Nous mettons à votre disposition notre expertise internationale pour renforcer vos projets numériques.";
        return view('frontend.home' , compact('pageTitle' , 'pageUrl' , 'metaTitle' , 'metaDescription'));
    }

    public function homeEn()
    {
        $pageTitle="Home | Ntrace Consulting";
        $pageUrl="https://ntrace-consulting.com/en";
        $metaTitle="Thriving in the Dynamic IT Services Market";
        $metaDescription="We provide you with our international expertise to strengthen your digital projects.";
        return view('frontend.home-en', compact('pageTitle' , 'pageUrl' , 'metaTitle' , 'metaDescription'));
    }

    public function contact()
    {
        $pageTitle="Contactez-Nous | Ntrace Consulting";
        $pageUrl="https://ntrace-consulting.com/contact";
        $metaTitle="Contactez-Nous";
        $metaDescription="Nous mettons à votre disposition notre expertise internationale pour renforcer vos projets numériques.";
        return view('frontend.contact', compact('pageTitle' , 'pageUrl' , 'metaTitle' , 'metaDescription'));
    }

    public function contactEn()
    {
        $pageTitle="Contact Us | Ntrace Consulting";
        $pageUrl="https://ntrace-consulting.com/en/contact";
        $metaTitle="Contact Us";
        $metaDescription="We provide you with our international expertise to strengthen your digital projects.";
        return view('frontend.contact-en', compact('pageTitle' , 'pageUrl' , 'metaTitle' , 'metaDescription'));
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
