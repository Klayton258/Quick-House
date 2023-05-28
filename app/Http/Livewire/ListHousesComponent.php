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
    public $selectedRooms = ''; // Holds the selected number of rooms
    public $pageSize = 3;
    public $orderBy= 'Default Sorting';
    public $selectedTypes = '';
    protected $paginationTheme ='bootstrap';


    public function changeOrderBy($orderBy)
    {
        $this->orderBy =$orderBy;
    }

    public function render()
    {
        $rooms = House::pluck('rooms')->unique()->toArray();

        $housesQuery = House::query()->with('type');
        $types = Type::pluck('type_name', 'id')->unique()->toArray();

        // Apply filters
        if ($this->selectedRooms && $this->selectedRooms !== "All") {
            $housesQuery->where('rooms', '=', (int)$this->selectedRooms);
        }else{
            $houses = House::paginate($this->pageSize);
        }

        if ($this->selectedTypes && $this->selectedTypes !== "All") {
            $housesQuery->whereHas('type', function ($query) {
                $query->where('id', '=', (int)$this->selectedTypes);
            });
        }

        // Apply ordering
        if ($this->orderBy === "Low to High") {
            $housesQuery->orderBy('price', 'asc');
        } elseif ($this->orderBy === "High to Low") {
            $housesQuery->orderBy('price', 'desc');
        }

        // Get paginated results
        $houses = $housesQuery->paginate($this->pageSize);

        return view('livewire.list-houses-component', compact('rooms', 'houses', 'types'));
    }
}
