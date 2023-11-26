<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Guestbook as GuestbookModel;
use Livewire\Attributes\Validate;
use Filament\Notifications\Notification;

class Guestbook extends Component
{
    #[Validate('required|min:3')]
    public $name = '';

    #[Validate('required|min:6|email:rfc,dns')]
    public $email = '';

    #[Validate('required|min:3|max:4294967295')]
    public $message = '';

    public function save(){
        $this->validate();

        GuestbookModel::create(
            $this->only(['name', 'email', 'message'])
        );

        $this->reset();

        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();

        $this->dispatch('guestbooks');
    }

    public function render()
    {
        return view('livewire.guestbook');
    }
}
