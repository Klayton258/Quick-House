<?php

namespace App\Http\Livewire;
use App\Models\Category;
use Livewire\Component;
use App\Models\Product;

class CategoryComponet extends Component
{
    public $pageSize= 3;

    public function mount($slug)
    {
        $this->$slug =$slug;
    }
    public function changePagesize($size)
    {
        $this->pageSize =$size;
    }

    public function render()
    {
        $category =Category::where('slug',$this->slug)->first();

        $category_id = $category->id;
        $category_name = $category->name;

        $categories = Category::orderBy('name', 'ASC')->get();

        $products = Product::paginate($this->pageSize);

        return view('livewire.category-component',['products'=>$products, 'categories'=> $category, 'category_name'=> $category_name]);
    }
}
