<?php

namespace App\Http\Controllers;

use App\API\ApiResponse;
use App\Models\House;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MobileApiController extends Controller
{
    private $houses;

    function __construct(House $houses)
    {
        $this->houses = $houses;
    }


    function houses()
    {
        try {

            return ApiResponse::responseMessage('OK',200, $this->houses::all());

        } catch (Exception $e) {

            return ApiResponse::responseMessage('ERROR',500, $e->getMessage());
        }
    }



    function show($id)
    {
        try {

            return ApiResponse::responseMessage('OK',200, $this->houses::find($id));

        } catch (Exception $e) {

            return ApiResponse::responseMessage('ERROR',500, $e->getMessage());
        }
    }

    function createUser(Request $request)
    {

        try {

            $user = new User();
            $user->name =$request->name;
            $user->user_name =$request->user_name;
            $user->phone=$request->phone;
            $user->gender =$request->gender;
            $user->birth_date =$request->birth_date;
            $user->email =$request->email;
            $user->password = Hash::make($request->password);
            $user->confirm_password = Hash::make($request->confirm_password);
            $res=$user->save();

            if ($res) {
                return ApiResponse::responseMessage('success','204', 'you registered successifuly');
            } else {
                return ApiResponse::responseMessage('error','500', 'Somting went wrong');
            }

        } catch (Exception $e) {
            return ApiResponse::responseMessage('error','500', $e->getMessage());
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

                return ApiResponse::responseMessage('success','200', $token);
            }

            return  ApiResponse::responseMessage('error','203', "The provided credentias are wrong");

        } catch (Exception $e) {
            return ApiResponse::responseMessage('error','500', $e->getMessage());
        }
    }

}
