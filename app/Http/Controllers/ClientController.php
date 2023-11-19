<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    private $role_id_def = 2;
    private $settings_def = '{"locale":"en"}';
    private $avatar_def = "users/default.png";

    function signup(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'name' => 'required|unique:users|max:255',
                'email' => 'required|unique:users|max:255',
                'mobile' => 'required|unique:users|max:255',
                'password' => 'required|min:6|max:12',
            ]);

            $errors = $validator->errors();

            if ($validator->fails()) {
                return response()->json([
                    'status' => 400,
                    'errors'=>$errors,
                    'message' => 'Account Created Successfully'
                  ]);
            }

            $user = User::create([
                'name' => $request->name,
                'email'=>$request->email,
                'mobile' => $request->phone,
                'birthday' => $request->birthday,
                'password' => Hash::make($request->password),
                'role_id' => $this->role_id_def,
                'settings'=>$this->settings_def,
                'avatar'=>$this->avatar_def
            ]);



            return response()->json([
              'status' => 200,
              'user'=>$user,
              'message' => 'Account Created Successfully'
            ]);

        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Error creating account'
              ]);
        }
    }


    function loginUser(Request $request)
    {
        try {


            $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';

            if(Auth::attempt([$fieldType => $request->email, 'password' =>
            $request->password])) {
                $user = Auth::user();
                $userInfo = User::where($fieldType, $request->email)->first();

                $token = [ 'token' => $user->createToken($request->device_name)->plainTextToken,
                    'user' => $userInfo ];

                    return $this->responseMessage('success','200', $token);
                }

                return  $this->responseMessage('error','203', "The provided credentias are wrong");

        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Error loging into account'
              ]);
        }
    }

    function responseMessage($message, $code, $data = '')
    {
        return
            [
                'msg' => $message,
                'code' => $code,
                'data' => $data
            ];
    }

}
