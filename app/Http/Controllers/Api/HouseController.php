<?php

namespace App\Http\Controllers\Api;

use App\API\ApiLogs;
use App\API\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Nonstandard\Uuid;

class HouseController extends Controller
{
    function index(){

        $houses = House::all();

        return ApiResponse::responseMessage('OK',200, $houses);
    }

    function newhouse(Request $request){

        try{

        $path = Uuid::uuid1();
        $images = '';
        $size=20;

        for ($i=0; $i < sizeof( $request->file('images')); $i++) {
            $image = $request->file('images')[$i];
            $imageName = $i.'.'.$image->getClientOriginalExtension();
            ApiLogs::apiLog('info','New House Request: '.$image);
            $image->move(public_path('/images/houses/'.$path),$imageName);

            $images .= $imageName;
            $images .= '|';
        }

        $house = DB::table('houses')->insert([
            'type_id'=> $request->type_id,
            'level_id'=> $request->level_id,
            'outdoor_id'=> $request->outdoor_id,
            'visit_times'=> $request->visit_times,
            'promotion_price'=>  $request->promotion_price,
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

        // if($request->promotion_id == 2){
            //     // select
            // }

            ApiLogs::apiLog('info','New House Request: '.$house);
        return ApiResponse::responseMessage('Uploaded with success',200);
    } catch (\Exception $e) {
        if (config('app.debug')) {
            ApiLogs::apiLog('error','House Request: ',$e->getMessage());
            return response()->json(ApiResponse::responseMessage($e->getMessage(), 1010), 500);
        }
        ApiLogs::apiLog('error','House Request: ',$e->getMessage());
        return response()->json(ApiResponse::responseMessage('Error', 1010), 500);
    }

}
    function housebyid($id){
        try{
        $house = House::where(['id'=> $id])->get();

        ApiLogs::apiLog('info','House Request: '.$house);
        return ApiResponse::responseMessage('Success',200, $house);

    } catch (\Exception $e) {
        if (config('app.debug')) {
            ApiLogs::apiLog('error','House Request House: ',$e->getMessage());
            return response()->json(ApiResponse::responseMessage($e->getMessage(), 1010), 500);
        }
        ApiLogs::apiLog('error','House Request: ',$e->getMessage());
        return response()->json(ApiResponse::responseMessage('Error', 1010), 500);
    }
    }
    function delete($id){
        try{
        $house = House::find($id)->delete();

        ApiLogs::apiLog('info','House Deleted: '.$id);
        return ApiResponse::responseMessage('Deleted with Success',200);

    } catch (\Exception $e) {
        if (config('app.debug')) {
            ApiLogs::apiLog('error','Deleting House: ',$e->getMessage());
            return response()->json(ApiResponse::responseMessage($e->getMessage(), 1010), 500);
        }
        ApiLogs::apiLog('error','Deleting House: ',$e->getMessage());
        return response()->json(ApiResponse::responseMessage('Error', 1010), 500);
    }
    }
}
