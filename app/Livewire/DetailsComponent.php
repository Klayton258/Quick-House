<?php

namespace App\Livewire;

use App\Models\Contact;
use App\Models\House;
use App\Models\Message;
use App\Notifications\ContactNotification;
use Exception;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

use Illuminate\Support\Facades\Notification;
use Yoeunes\Toastr\Facades\Toastr;


class DetailsComponent extends Component
{
    // protected $listeners =['refreshComponent'=> '$refresh'];//this is a event
    public $name;
    public $email;
    public $phone;
    public $message;
    public $id;

    public function mount($id)
    {
        $this->id =  Crypt::decrypt($id);
    }

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

            // $this->emitTo('livewire.details-component', 'refreshComponent');

            toastr()->success('Data has been saved successfully!', 'Congrats');
            session()->flash('message', 'The message was sent successfully');


            if($message->contact_email == $contact->email){

                $details =[
                    'name' => $contact->name,
                    'email' => $contact->email,
                    'phone' => $contact->phone,
                    'message' => $message->message,
                ];
            }

           $notify = Notification::send($contact,
             new ContactNotification($details));

            if($notify)
            {
                Toastr::success('The message has been sent successfully', 'Congrats');
                session()->flash('emailmessage', 'The message was sent successfully');
            }



        } catch (Exception $e) {
            Toastr::error('Oops! Something went wrong!');
            session()->flash('error', 'The message was not sent: ' . $e->getMessage());
        }
    }


    public function render()
    {
        $house = House::where('id', $this->id)->with('types')->first();

        // Get the types of the current house
        $types = $house->types;

        // Get related houses based on types
        $relatedHouses = House::whereHas('types', function ($query) use ($types) {
            $query->whereIn('types.id', $types->pluck('id'));
        })
        ->where('id', '!=', $this->id) // Exclude the current house
        ->with('types') // Load types for related houses
        ->get()->take(3);

        // dd($relatedHouses);

        return view('livewire.details-component',
        compact(
            'house',
            'relatedHouses',
        ),)->extends('layouts.layout-livewire');
    }
}
