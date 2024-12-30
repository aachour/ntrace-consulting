<?php

namespace App\Livewire\Subscribers;

use App\Models\Subscription;
use Livewire\Attributes\On;
use Livewire\Component;

class SubscriberIndex extends Component
{
    public $subscribers; 

    public function mount()
    {
        $this->subscribers = Subscription::all();
    }

    #[On('delete')]
    public function delete($id)
    {
        $subscriber = Subscription::findOrFail($id);
        $subscriber->delete();

        return to_route('subscribers')->with('success', 'Subscriber has been deleted successfully!');
    }

    public function render()
    {
        return view('livewire.subscribers.subscriber-index');
    }
    
}
