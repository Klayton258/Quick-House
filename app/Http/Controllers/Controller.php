<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $id;
    function index(){
        $houses = DB::table('houses')->paginate(8);
        $outdoor = DB::table('houses')->where(['outdoor_id'=> 2])->limit(4)->orderByDesc('id')->get();
        // dd(sizeof($outdoor));
        return view('home', ['houses'=> $houses, 'outdoors'=>$outdoor]);
    }

    function house($id){
        $house_id =$this->id = $id;
        $house = DB::table('houses')->where(['id'=>$house_id])->get();

        // dd($house->name);
        return view('house',['house'=>$house]);
    }

    function contact(){



        return view('contact');
    }

}
