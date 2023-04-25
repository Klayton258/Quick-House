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
    public $house_id;
    // public $slug;


    public function changeOrderBy($orderBy)
      {
          $this->orderBy =$orderBy;
      }
      //change page size,
      public function changePagesize($size)
      {
          $this->pageSize =$size;
      }
    //   public function mount($slug)
    //   {

    //       $this->slug = $slug;
    //       // $this->slug = request()->slug;
    //   }
    // function __construct($slug)
    // {
    //     $this->slug = $slug;
    // }
    public function render()
    {

        $House = DB::table('houses')->get();



        // foreach($House as $house){
        //      $house_id =$house->id;



        //     $house = DB::table('houses')->where(['id'=>$house_id])->get();
        //         dd($house);

        // }
        // $url='/house-category' . $this->slug;

        // $categoryUrl = request($url);


        // dd( $categoryUrl);


        // $s= $this->slug = request()->slug;
        // $category =Category::where('slug', $s)->first();

        // $category_id = $category->id;
        // $category_name = $category->name;


        if ($this->orderBy ==='Price: Low to High') {
            $houses =House::orderBy('price', 'ASC')->paginate($this->pageSize);
            // dd('=========>>>Eu sghj===>>>');
        } elseif ($this->orderBy ==='Price: High to Low') {
            $houses =House::orderBy('price', 'DESC')->paginate($this->pageSize);
        } elseif ($this->orderBy ==='Sort: by Newest') {
            // $houses =house::latest('price')->paginate($this->pageSize);
            //which is the same with:
            $houses =House::orderBy('price', 'DESC')->paginate($this->pageSize);
        } else {
            // $houses = House::paginate($this->pageSize);
            $houses = House::where('name', 'like')->paginate($this->pageSize, ['*'], 'page', $this->page);
        }
        // $type= Type::where(['id'=> $this->id])->first();

        // $type_name=$type->type_name;
        // dd($type->id);
        $categories = Category::orderBy('name', 'ASC')->get();
        $houses = House::paginate($this->pageSize);
        return view('livewire.house-component',
        [
        'House' => $House,
        'houses'=>$houses,
        'categories'=>$categories,


        ]);
    }
}
