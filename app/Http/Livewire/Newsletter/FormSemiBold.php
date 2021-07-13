<?php

namespace App\Http\Livewire\Newsletter;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class FormSemiBold extends Component
{
    public $email;
    public $subscribed = false;

    public function subscribeToList()
    {
        $response = Http::withToken(config('services.newsletter.api_token'))->post(config('services.newsletter.base_url') . '/api/email-lists/'. config('services.newsletter.list_id') .'/subscribers', [
            'email' => $this->email,
        ]);

        if ($response->ok()) {
            $this->subscribed = true;
        }
    }

    public function render()
    {
        return view('livewire.newsletter.form-semi-bold');
    }
}
