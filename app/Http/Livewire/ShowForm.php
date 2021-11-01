<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ShowForm extends Component
{

    public $names;
    public $email;
    public $subject;
    public $message;



    protected $rules = [

        'names' => 'required|min:6',
        'email' => 'required|email',
        'message' => 'required|min:15',
        'subject' => 'required|min:5|max:100',

    ];

    public function updated($propertyName)

    {

        $this->validateOnly($propertyName);
    }



    public function saveContact()

    {

        $validatedData = $this->validate();



        Contact::create($validatedData);
        session()->flash('message', 'Message successfully Sent, We will contact you as soon as Posible !.');
        $this->email = '';
        $this->message = '';
        $this->names = '';
        $this->subject = '';
        Mail::send(new \App\Mail\MessageDelivered);
    }

    public function render()
    {
        return view('livewire.show-form');
    }
}
