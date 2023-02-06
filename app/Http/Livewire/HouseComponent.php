<?php

namespace App\Http\Livewire;

use App\Models\Category;
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

    public function render()
    {
        if($this->orderBy =='Price: Low to High')
        {
            $houses =House::orderBY('price', 'ASC')->paginate($this->pageSize);

        }
        else if($this->orderBy =='Price: High to Low')
        {
            $houses =House::orderBY('price', 'DESC')->paginate($this->pageSize);

        }
        else if($this->orderBy =='Sort: by Newest')
        {
            // $houses =house::latest('price')->paginate($this->pageSize);
            //which is the same with:
             $houses =House::orderBY('price', 'DESC')->paginate($this->pageSize);
        }
        else
        {
            $houses = House::paginate($this->pageSize);
        }
        // $type= Type::where(['id'=> $this->id])->first();

        // $type_name=$type->type_name;
        // dd($type->id);
        $categories = Category::orderBy('name', 'ASC')->get();
        $houses = House::paginate($this->pageSize);
        return view('livewire.house-component', ['houses'=>$houses, 'categories'=>$categories]);
    }
}
