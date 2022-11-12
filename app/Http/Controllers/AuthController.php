<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use session;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session as HttpFoundationSessionSession;

class AuthController extends Controller
{
    //Login
    public function login()
    {
        return view("auth.login");
    }

    public function registration()
    {
        return view("auth.registration");
    }

    public function registrationUser(Request $request)
    {
        $request->validate([
         'name'=>'required',
         'user_name'=>'required|unique:users',
         'phone'=>'required',
         'gender'=>'required',
         'birth_date'=>'required|date',
         'email'=>'required|email|unique:users',
         'password'=> 'required|min:6|max:12',
         'confirm_password'=>'required|same:password',
        ]);

        $user = new User();
        $user->name =$request->name;
        $user->user_name =$request->user_name;
        $user->phone=$request->phone;
        $user->gender =$request->gender;
        $user->birth_date =$request->birth_date;
        $user->email =$request->email;
        $user->password =Hash::make($request->password);
        $user->confirm_password =Hash::make($request->confirm_password);
        $res=$user->save();

        if ($res) {
            return back()->with('success', 'you registered successifuly');
        } else {
            return back()->with('fail', 'Somting went wrong');
        }
    }

    public function loginUser(Request $request)
    {
        //specify your custom message here
        $messages = [
           'required' => 'The :attribute field is required',
           'string'    => 'The :attribute must be text format',
           'file'    => 'The :attribute must be a file',
           'mimes' => 'Supported file format for :attribute are :mimes',
           'max'      => 'The :attribute must have a maximum length of :max',
         ];

        $validation = Validator::make($request->all(), [
            'email'=>'required',
            'password'=> 'required|min:6|max:12',
           ], $messages);


        if ($validation->fails()) {
            return back()->withErrors($validation);
        }

        $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';


        $user=User::where($fieldType, $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Auth::attempt([$fieldType => $request->email, 'password' => $request->password]);

            } else {
                return back()->with('fail', 'password or email not match');
            }
        } else {
            return back()->with('fail', 'password or email not match');
        }
        return redirect('/');

    }

    public function logOut(Request  $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');

    }
}
