<?php

namespace App\Http\Controllers;

use App\Enum\RoleType;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserAdminController extends Controller
{
    private $users;

    function __construct(User $users)
    {

        $this->users = $users;

    }


    function manageUsers()
    {
        $user = [
            'name'=> 'Klayton Massango'
        ];

        $users =$this->users::all();
        $roles = RoleType::cases();


        return view('admin.user.create',['users'=>$users, 'roles'=>$roles,'user'=>$user]);
    }

    function newUser()
    {
        $user = [
            'name'=> 'Klayton Massango'
        ];

        $users =$this->users::all();
        $roles = RoleType::cases();


        return view('admin.user.create',['users'=>$users, 'roles'=>$roles,'user'=>$user]);
    }

    function createUser(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'user_name'=>'required|unique:users,user_name',
            'username'=>'required|unique:users,user_name',
            'birthday'=> 'required',
            'email'=> 'required',
            'phone'=> 'required|min:9|max:9',
            'password'=>'required|min:6',
            'role' => 'required'
        ]);

        if($validation->fails()){

            Toastr()->error($validation->errors(),"Error Creating User" , ["positionClass" => "toast-top-right"]);

            return back()->withErrors($validation);
        }

        $user = $this->users;

        $user->user_name = $request->user_name;
        $user->username = $request->username;
        $user->birthday = $request->birthday;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();

        Toastr()->success("User created successfuly","User Created" , ["positionClass" => "toast-top-right"]);
        return back();
    }
}
