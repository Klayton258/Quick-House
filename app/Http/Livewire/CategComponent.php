<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\House;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
class CategComponent extends Component
{
    use WithPagination;
    public $pageSize= 3;

    public function changePagesize($size)
    {
        $this->pageSize =$size;
    }

    public function mount($slug)
    {
        $this->$slug =$slug;
    }

    public function render()
    {
        $category =Category::where('slug', $this->slug)->first();

        $category_id = $category->id;
        $category_name = $category->name;

        $categories = Category::orderBy('name', 'ASC')->get();

        $houses = House::paginate($this->pageSize);
        return view('livewire.categ-component',['houses'=>$houses ,'categories'=> $categories, 'category_name'=> $category_name]);
    }

}
