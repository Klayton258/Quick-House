<?php

namespace App\Http\Controllers;

use App\Models\House;
use Exception;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    private $houses;

    function __construct(House $houses)
    {
        $this->houses = $houses;
    }

    function houses()
    {
        try {

            return $this->responseMessage('OK',200, $this->houses::all());

        } catch (Exception $e) {

            return $this->responseMessage('ERROR',500, $e->getMessage());
        }
    }



    function show($id)
    {
        try {

            return $this->responseMessage('OK',200, $this->houses::find($id));

        } catch (Exception $e) {

            return $this->responseMessage('ERROR',500, $e->getMessage());
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
