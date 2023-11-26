<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Guestbook;
use Livewire\Attributes\On;

class GuestbookList extends Component
{
    public $guestbooks;

    public function mount(){
        $this->guestbooks = Guestbook::get();
    }

    #[On('guestbooks')]
    public function updateGuestbook(){
        $this->guestbooks = Guestbook::get();
    }

    public function render()
    {
        return view('livewire.guestbook-list');
    }
}
