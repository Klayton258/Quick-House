<?php

namespace App\Http\Controllers;

use App\API\ApiLogs;
use App\Enum\RoleType;
use App\Models\Category;
use App\Models\House;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Ramsey\Uuid\Uuid;

class HouseAdminController extends Controller
{
    private $houses;

    function __construct(House $houses)
    {
        $this->houses = $houses;
    }


    function createhouse()
    {
        $roles =[];
        $user=[
            'name'=> Auth::guard('admin')->user()->name,
            'roleType'=> Auth::guard('admin')->user()->role,
            'roles'=> $roles
        ];
        for($i=0; $i < sizeof(RoleType::cases()); $i++){
            if(RoleType::cases()[$i]->name == Auth::guard('admin')->user()->role){
                $roles = RoleType::cases()[$i]->roles();
            }
        }
        $types = Type::all();
        $categories = Category::all();

        return view('admin.house.create',compact('types', 'user' , 'categories', 'roles'));
    }

    function manageHouses(){

        $houses = $this->houses::all();
        $user=[
            'name'=> "Klayton Massamgo",
        ];

        return view('admin.house.list',['houses'=>$houses,'user'=>$user]);
    }


    function newhouse(Request $request){

        try{
            $path = Uuid::uuid1();
            $images = '';
            $size=20;
            mkdir(public_path('images/houses/'.$path),666,true);

            for ($i=0; $i < sizeof($request->file('images')); $i++) {
                $image = $request->file('images')[$i];
                $imageName = $i.'.'.$image->getClientOriginalExtension();
                $img = Image::make($image);
                $img->resize(1200, 800);
                // ApiLogs::apiLog('info','New House Request:11 '.$img);
                $img->save(public_path('images/houses/'.$path.'/'.$imageName),$size);


                $images .= $imageName;
                $images .= '|';
            }

            if($request->outdoor_id == "on")
                $request->outdoor_id = 2;
            else
                $request->outdoor_id = 1;

            $request->level_id = 1;

            $house = DB::table('houses')->insert([
                'type_id'=> $request->type_id,
                'level_id'=> $request->level_id,
                'outdoor_id'=> $request->outdoor_id,
                'category_id'=> $request->category_id,
                'visit_times'=> $request->visit_times,
                'promotion_price'=>  $request->promotion_price ==null ? 0 :$request->promotion_price ,
                'images'=> $images,
                'path'=>$path,
                'name'=> $request->name,
                'price'=> $request->price,
                'rooms'=> $request->rooms,
                'suit'=> $request->suit,
                'kitchen'=> $request->kitchen,
                'living_room'=> $request->linving_room,
                'wc'=> $request->wc,
                'garage'=> $request->garage,
                'location'=> $request->location,
                'description'=> $request->description,
                'created_at'=>NOW(),
                'updated_at'=>NOW()
            ]);

            Toastr()->success("House saveded successfuly","House Saved" , ["positionClass" => "toast-top-right"]);

            // ApiLogs::apiLog('info','New House Request: '.$house);
            return back();

        } catch (\Exception $e) {
            if (config('app.debug')) {
                return $e->getMessage();
                ApiLogs::apiLog('error','House Request: ',$e->getMessage());
            }
            ApiLogs::apiLog('error','House Request: ',$e->getMessage());

        }

    }

    function viewHouse($id)
    {

        $house = $this->houses::find($id);
        $user=[
            'name'=> "Klayton Massamgo",
        ];
        $types = Type::all();

        return view('admin.house.view',['house'=>$house,'types'=>$types, 'user'=>$user]);

    }

}
