<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;

class Form extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $message;
    public $subject;

    public function sendContact()
    {
        $this->email->sendContact($this->first_name, $this->last_name, $this->email, $this->phone, $this->message, $this->subject);
    }

    public function render()
    {
        return view('livewire.contact.form');
    }
}
