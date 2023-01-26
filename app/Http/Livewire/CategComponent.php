<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\House;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
class CategComponent extends Component
{
    use WithPagination;
    public $slug;
    public function mount($slug)
    {
        $this->$slug =$slug;
    }

    public function render()
    {
        $category =Category::where('slug', $this->slug)->first();

        $category_id = $category->id;
        $category_name = $category->name;
        $category_slug = $category->slug;

        dd( $category_slug);
        $categories = Category::orderBy('name', 'ASC')->get();

        $outdoor = DB::table('houses')->where(['outdoor_id'=> 1])->orderByDesc('id')->get();
        $houses = House::paginate(12);
        return view('livewire.categ-component',['houses'=>$houses ,'categories'=> $categories, 'category_name'=> $category_name, 'outdoor'=> $outdoor]);
    }

}
