<?php

namespace App\Livewire;

use App\Models\House;
use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    use WithPagination;
    public $pageSize= 3;
    public $orderBy;
    public $selectedType = 'All';
    // protected $paginationTheme = 'bootstrap';


    public function changeOrderBy($orderBy)
    {
        $this->orderBy =$orderBy;
    }

    public function filterByType($type)
    {
        $this->selectedType = $type;
    }

    public function render()
    {
        $housesQuery = House::query();

        if ($this->selectedType !== 'All') {
            $type = Type::where("id", $this->selectedType)->firstOrFail();//Type SALE
            $housesQuery = $type->houses();
        }else
        {
            $houses = $housesQuery->paginate($this->pageSize);
        }

        if ($this->orderBy === 'Price Ascending') {
            $housesQuery->orderBy('sale_price', 'ASC');
        } else if ($this->orderBy === 'Price Descending') {
            $housesQuery->orderBy('sale_price', 'DESC');
        }

        $houses = $housesQuery->paginate($this->pageSize);
        $types = Type::get();

        return view('livewire.home-component', compact('houses', 'types'));
    }
}
