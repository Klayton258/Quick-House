<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\House;
use Livewire\Component;
use Livewire\WithPagination;
class CategComponent extends Component
{
    use WithPagination;

    protected $paginationTheme ='bootstrap';
    public $pageSize=2;
    public $orderBy= 'Default Sorting';
    public $slug;

     //change page size,
     public function changePagesize($size)
     {
         $this->pageSize =$size;
     }

     public function changeOrderBy($orderBy)
     {
         $this->orderBy =$orderBy;
     }

    public function mount($slug)
    {
        $this->slug = $slug;
        // $this->slug = request()->slug;
    }

    public function render()
    {
       $s= $this->slug = request()->slug;
        $category =Category::where('slug',$s)->first();

        $category_id = $category->id;
        $category_name = $category->name;

        if($this->orderBy =='Price: Low to High')
        {
            // $houses =House::where('category_id',$category_id)->orderBY('regular_price', 'ASC')->paginate($this->pageSize);
            dd('im low');
        }
        else if($this->orderBy =='Price: High to Low')
        {
            $houses =House::where('category_id',$category_id)->orderBY('regular_price', 'DESC')->paginate($this->pageSize);
        }
        else if($this->orderBy =='Sort: by Newest')
        {
            $houses =House::where('category_id',$category_id)->latest('regular_price')->paginate($this->pageSize);
            //which is the same with:
            //$houses =house::orderBY('regular_price', 'DESC')->paginate($this->pageSize);
        }
        else
        {
            $houses = House::where('category_id',$category_id)->paginate($this->pageSize);
        }

        // Order by category....
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('categ',['houses'=>$houses, 'categories'=> $categories, 'category_name'=> $category_name, 'pageSize'=> $this->pageSize, 'orderBy'=>$this->orderBy,]);
    }

}
