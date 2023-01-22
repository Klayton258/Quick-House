<?php

namespace App\Http\Livewire;

use App\Models\House;
use Livewire\Component;
use Livewire\WithPagination;
class HouseComponent extends Component
{
    use WithPagination;

    public $pageSize= 3;
    protected $paginationTheme ='bootstrap';
    public $orderBy= 'Default Sorting';
    public function changeOrderBy($orderBy)
      {
          $this->orderBy =$orderBy;
      }
      //change page size,
      public function changePagesize($size)
      {
          $this->pageSize =$size;
      }

    public function render()
    {
        // if($this->orderBy =='Price: Low to High')
        // {
        //     $houses =Product::orderBY('regular_price', 'ASC')->paginate($this->pageSize);
        // }
        // else if($this->orderBy =='Price: High to Low')
        // {
        //     $houses =Product::orderBY('regular_price', 'DESC')->paginate($this->pageSize);
        // }
        // else if($this->orderBy =='Sort: by Newest')
        // {
        //     $houses =Product::latest('regular_price')->paginate($this->pageSize);
        //     //which is the same with:
        //     //  $houses =Product::orderBY('regular_price', 'DESC')->paginate($this->pageSize);
        // }
        // else
        // {
        //     $houses = Product::paginate($this->pageSize);
        // }
        $houses = House::paginate($this->pageSize);
        return view('livewire.house-component', ['houses'=>$houses]);
    }
}
