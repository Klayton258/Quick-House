<?php

namespace App\Http\Livewire;

use App\Models\House;
use App\Models\Type;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ListHousesComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $House = House::all();

        foreach($House as $house){
            $type = Type::find($house->id);

            //give the the house the name of the type from type table....
            $house->type_name = $type->type_name;

        }

        return view('livewire.list-houses-component',  compact('House'));
    }
}
