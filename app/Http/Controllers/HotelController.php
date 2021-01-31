<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    public function all(){
        $hotels=Hotel::all();

        return view('hoteli', [
            'hoteli'=>$hotels
        ]);

    }
    public function view($id){
        $hotel= Hotel::findOrFail($id);
        $rooms= Room::all();
        $myrooms=[];
        foreach ($rooms as $room) {
            if ($room->hotel_id == $id) {
                $myrooms[count($myrooms)] = $room;
            }
        }
        $hotel->rooms=$myrooms;
        return view('hotel',['hotel'=>$hotel]);

    }

    public function save(Request $request){

        $validator = Validator::make($request->all(), [
            'name'=>'required|min:2',
            'description'=>'required|min:2',
            'stars'=>'required|min:2',
            'city'=>'required|min:2',
            'address'=>'required|min:2',
            'url'=>'required|min:2'
        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>"All fields must be longer then 2 characters"],400);
        }
        $hotel= Hotel::create($request->all());
        return response()->json($hotel, 201);
    }
    public function delete(Request $request, $id){
        $hotel=Hotel::find($id);

        if(is_null($hotel)){
            return response()->json(["message"=>"Hotel doesn't exist"],404);
        }

        $hotel->delete();
        return response()->json(null,204);
    }
    public function getAll(){
        $hotels=Hotel::all();
        $rooms=Room::all();
        foreach ($hotels as $hotel) {
            $hotelRooms=[];
            foreach ($rooms as $room) {
                if ($room->hotel_id == $hotel->id){
                    $hotelRooms[count($hotelRooms)]=$room;
                }
            }

            $hotel->rooms=$hotelRooms;
        }

        return response()->json($hotels,200);
    }
    public function getById($id){
        $hotel=Hotel::find($id);
        $rooms=Room::all();
        if(is_null($hotel)){
            return response()->json(["message"=>"Hotel doesn't exist"],404);
        }
        $hotelRooms=[];
        foreach ($rooms as $room) {
            if ($room->hotel_id == $hotel->id){
                $hotelRooms[count($hotelRooms)]=$room;
            }
        }
        $hotel->rooms=$hotelRooms;
        return response()->json($hotel,200);
    }
}
