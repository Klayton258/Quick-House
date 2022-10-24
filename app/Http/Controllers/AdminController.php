<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        $user=[
            'name'=> "Klayton Massamgo",
        ];
        return view('admin.home',['user'=>$user]);
    }
}
