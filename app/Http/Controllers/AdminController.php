<?php

namespace App\Http\Controllers;

use App\Enum\RoleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {

        $roles =[];

        for($i=0; $i < sizeof(RoleType::cases()); $i++){
            if(RoleType::cases()[$i]->name == Auth::guard('admin')->user()->role){
                $roles = RoleType::cases()[$i]->roles();
            }
        }

        $user=[
            'name'=> Auth::guard('admin')->user()->name,
            'roleType'=> Auth::guard('admin')->user()->role,
            'roles'=> $roles
        ];
        return view('admin.home',['user'=>$user]);
    }
}
