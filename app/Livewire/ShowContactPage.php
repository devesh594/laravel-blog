<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

class ShowContactPage extends Component
{

    public $name = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ];
    public function submit()
    {
        $this->validate();

        $mailData = [
            'subject' => 'You have a new message from contact form',
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ];

        Mail::to('admin@admin.com')->send(new ContactEmail($mailData));
        session()->flash('success', 'Message sent successfully');
        $this->redirect(route('contact'));
    }
    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
