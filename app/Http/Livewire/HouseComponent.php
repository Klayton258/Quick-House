<?php

namespace App\Http\Livewire;

use App\Models\House;
use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class HouseComponent extends Component
{
    use WithPagination;

    public $pageSize=2;
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
    //   public function mount($id)
    //   {
    //     $this->id =$id;
    //   }
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
        // $type= Type::where(['id'=> $this->id])->first();

        // $type_name=$type->type_name;
        // dd($type->id);
        $houses = House::paginate($this->pageSize);
        return view('livewire.house-component', ['houses'=>$houses]);
    }
}
