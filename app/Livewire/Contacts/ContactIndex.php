<?php

namespace App\Livewire\Contacts;

use App\Models\Contact;
use Livewire\Attributes\On;
use Livewire\Component;

class ContactIndex extends Component
{

    public $contacts; 


    public function mount()
    {
        $this->contacts = Contact::all();       
    }

    #[On('delete')]
    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return to_route('contacts')->with('success', 'contact has been deleted successfully!');
    }

    #[On('toggleStatus')]
    public function toggleStatus($id, $status) 
    {
        $contact = Contact::find($id); 
        $contact->status = $status ;
        $contact->save(); 

        return to_route('contacts');   
    }
    public function render()
    {
        return view('livewire.contacts.contact-index');
    }
}
