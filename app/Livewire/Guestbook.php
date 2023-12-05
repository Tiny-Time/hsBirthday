<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Filament\Notifications\Notification;
use App\Models\Guestbook as GuestbookModel;

class Guestbook extends Component
{
    #[Validate('required|min:3')]
    public $name = '';

    #[Validate('required|min:6|email:rfc,dns')]
    public $email = '';

    #[Validate('required|min:3|max:4294967295')]
    public $message = '';

    public $recaptcha;

    /**
     * handleRecaptchaResponse
     *
     * @param  mixed $response
     * @return void
     */

    #[On('recaptchaResponse')]
    public function handleRecaptchaResponse($response)
    {
        $this->recaptcha = $response;
    }

    /**
     * Custom Error messages for Validation
     *
     * @var array
     */
    protected $messages = [
        'recaptcha' => 'Please complete the reCAPTCHA verification.',
    ];

    /**
     * save
     *
     * @return void
     */
    public function save()
    {

        $this->validate([
            'recaptcha' => 'required|captcha',
            'message' => 'required|min:3|max:4294967295',
        ]);

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
