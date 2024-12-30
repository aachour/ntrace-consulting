<?php

namespace App\Livewire\Subscribers;

use App\Models\Subscription;
use Livewire\Component;

class SubscriberForm extends Component
{

    public $subscriber; 
    public $email; 

    public function mount($id = 0)
    {
        if($id)
        {
            $this->subscriber = Subscription::findOrFail($id); 
            $this->email = $this->subscriber->email; 
        }

    }
    public function render()
    {
        return view('livewire.subscribers.subscriber-form');
    }
}
