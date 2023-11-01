<?php

namespace App\Livewire;

use App\Models\House;
use App\Models\HouseType;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HeaderSearchComponent extends Component
{
    public function render()
    {

        // $houseTypeIds = House::pluck('housetype_id')->get();


        // $houseTypeIds = HouseType::pluck('name')->unique();
        // dd($houseTypeIds);
        $houseTypes = DB::table('house_types')->get();
        $types = DB::table('types')->get();
        $locations = DB::table('locations')->get();

        return view('livewire.header-search-component' ,
         compact(
            'houseTypes',
            'types',
            'locations',

        ));
    }
}
