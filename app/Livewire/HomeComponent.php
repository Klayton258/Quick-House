<?php

namespace App\Livewire;

use App\Models\House;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        // $houses = DB::table('houses')->get();

        $houses = House::with('locations')->get();


        return view('livewire.home-component',
    compact(
        'houses',

        ));
    }
}
