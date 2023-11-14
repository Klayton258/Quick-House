<?php

namespace App\Livewire;

use App\Models\Contact;
use App\Models\Message;
use Exception;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public function storeMessage()
    {
        try {
            $this->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'message' => 'required',
            ]);

            // Check if a contact with the given email already exists
            $contact = Contact::where('email', $this->email)->first();

            // If the contact doesn't exist, create a new one
            if (!$contact) {
                $contact = new Contact();
                $contact->name = $this->name;
                $contact->email = $this->email;
                $contact->phone = $this->phone;
                $contact->save();
            }

            // Create a new message associated with the contact
            $message = new Message();
            $message->contact_email = $contact->email;
            $message->message = $this->message;
            $message->save();

            session()->flash('message', 'The message was sent successfully');
        } catch (Exception $e) {
            session()->flash('error', 'The message was not sent: ' . $e->getMessage());
        }
    }


    public function render()
    {
        return view('livewire.details-component')->extends('layouts.layout-livewire');
    }
}
