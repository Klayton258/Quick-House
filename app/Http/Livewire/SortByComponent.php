<?php

namespace App\Http\Livewire;
use App\Models\Product;
use App\Models\Category;
use Livewire\Component;

class SortByComponent extends Component
{
    public $pageSize= 3;
    public $orderBy= 'Default Sorting';
    //change page size,
      public function changePagesize($size)
      {
          $this->pageSize =$size;
      }
      public function changeOrderBy($orderBy)
      {
          $this->orderBy =$orderBy;
      }
    public function render()
    {
        if($this->orderBy =='Price: Low to High')
        {
            $products =Product::orderBY('regular_price', 'ASC')->paginate($this->pageSize);
        }
        else if($this->orderBy =='Price: High to Low')
        {
            $products =Product::orderBY('regular_price', 'DESC')->paginate($this->pageSize);
        }
        else if($this->orderBy =='Sort: by Newest')
        {
            $products =Product::latest('regular_price')->paginate($this->pageSize);
            //which is the same with:
            //  $products =Product::orderBY('regular_price', 'DESC')->paginate($this->pageSize);
        }
        else
        {
            $products = Product::paginate($this->pageSize);
        }
        $categories = Category::orderBy('name', 'ASC')->get();

        $products = Product::paginate($this->pageSize);
        return view('livewire.sort-by-component',['products'=>$products, 'categories'=> $categories]);
    }
}
