<?php

namespace App\Http\Controllers;

use App\Enum\RoleType;
use App\Models\AdminUser;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserAdminController extends Controller
{
    private $users;

    function __construct(AdminUser $users)
    {

        $this->users = $users;

    }


    function manageUsers()
    {
        // $user = [
        //     'name'=> Auth::guard('admin')->user()->name
        // ];

        $roles =[];

        $user=[
            'name'=> Auth::guard('admin')->user()->name,
            'roleType'=> Auth::guard('admin')->user()->role,
            'roles'=> $roles
        ];

        $users =$this->users::all();

        for($i=0; $i < sizeof(RoleType::cases()); $i++){
            if(RoleType::cases()[$i]->name == Auth::guard('admin')->user()->role){
                $roles = RoleType::cases()[$i]->roles();
            }
        }


        return view('admin.user.create',['users'=>$users, 'roles'=>$roles,'user'=>$user]);
    }

    function newUser()
    {
        $user = [
            'name'=> Auth::guard('admin')->user()->name
        ];

        $users =$this->users::all();
        $roles = RoleType::cases();


        return view('admin.user.create',['users'=>$users, 'roles'=>$roles,'user'=>$user]);
    }

    function createUser(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'user_name'=>'required|unique:admin_users,name',
            'username'=>'required|unique:admin_users,username',
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

        $user->name = $request->user_name;
        $user->username = $request->username;
        $user->birthdate = $request->birthday;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();

        Toastr()->success("User created successfuly","User Created" , ["positionClass" => "toast-top-right"]);
        return back();
    }

    function loginView(){

        if(Auth::guard('admin')->check())
            return redirect(route('admin'));
        return view('admin.login');
    }

    function login(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'username'=>'required',
            'password'=>'required',
        ]);

        if($validation->fails()){

            Toastr()->error($validation->errors(),"Login Invalid" , ["positionClass" => "toast-top-right"]);

            return back()->withErrors($validation);
        }

        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

       if(Auth::guard('admin')->attempt([$fieldType => $request->username, 'password' =>
        $request->password])) {
            return redirect(route('admin'));
        }
        return redirect(route('admin.login'))->withErrors(['error'=>'Login invalido, as suas credenciais sao incorretas!']);

    }

    function logout(Request $request){

        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('admin.login'));
    }
}
