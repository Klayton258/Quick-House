<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\House;
use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class SearchComponent extends Component
{
    use WithPagination;
    protected $paginationTheme ='bootstrap';
    public $pageSize=2;
    public $orderBy= 'Default Sorting';

    public $q;
    public $search_term;

    public function mount()
    {
        $this->fill(request()->only('q'));
        $this->search_term= '%'.$this->q .'%';
    }

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
            $houses =House::where('name','like',$this->search_term)->orderBy('price', 'ASC')->paginate($this->pageSize);

        }
        else if($this->orderBy =='Price: High to Low')
        {
            $houses =House::where('name','like',$this->search_term)->orderBy('price', 'DESC')->paginate($this->pageSize);

        }
        else if($this->orderBy =='Sort: by Newest')
        {
            // $houses =house::latest('price')->paginate($this->pageSize);
            //which is the same with:
             $houses =House::where('name','like',$this->search_term)->orderBy('price', 'DESC')->paginate($this->pageSize);
        }
        else
        {
            $houses = House::where('name','like',$this->search_term)->paginate($this->pageSize);
        }
        // $type= Type::where(['id'=> $this->id])->first();

        // $type_name=$type->type_name;
        // dd($type->id);
        $categories = Category::orderBy('name', 'ASC')->get();
        // $houses = House::paginate($this->pageSize);
        return view('livewire.search-component', ['houses'=>$houses, 'categories'=>$categories, 'pageSize'=> $this->pageSize, 'orderBy'=>$this->orderBy]);
    }
}
