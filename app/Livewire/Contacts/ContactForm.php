<?php

namespace App\Livewire\Contacts;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{

    public $contact; 
    public $name; 
    public $phone; 
    public $email;
    public $subject; 
    public $message; 
    public $status; 


    public function mount($id = 0)
    {
        if($id)
        {
            $this->contact = Contact::findOrFail($id); 

            $this->name = $this->contact->name;
            $this->email = $this->contact->email;
            $this->phone = $this->contact->phone;
            $this->subject = $this->contact->subject;
            $this->message = $this->contact->message;
        }
    }


    public function render()
    {
         if ($this->status == 1) { 
            return view('livewire.contacts.contact-view');
        }
        return view('livewire.contacts.contact-form');
    }
}
