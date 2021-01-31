<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{

    public function view($id){

        $pieces = explode("/", url()->current());
        $room= Room::findOrFail($pieces[count($pieces)-1]);
        return view('soba',['room'=>$room]);

    }
    public function getAll(){
        $rooms=Room::all();
        $reservations=Reservation::all();
        foreach ($rooms as $room) {
            $roomReservations=[];
            foreach ($reservations as $reservation) {
                if ($reservation->room_id == $room->id){
                    $roomReservations[count($roomReservations)]=$reservation;
                }
            }

            $room->reservations=$roomReservations;
        }

        return response()->json($rooms,200);

    }
    public function getById($id){
        $room=Room::find($id);
        $reservations=Reservation::all();
        if(is_null($room)){
            return response()->json(["message"=>"Room doesn't exist!"],404);
        }
        $roomReservations=[];
        foreach ($reservations as $reservation) {
            if ($reservation->room_id == $room->id){
                $roomReservations[count($roomReservations)]=$reservation;
            }
        }

        $room->reservations=$roomReservations;

        return response()->json($room,200);
    }
    public function save(Request $request){

        $validator = Validator::make($request->all(), [
            'type'=>'required|min:2',
            'description'=>'required|min:2',
            'beds'=>'required',
            'picture'=>'required|min:2',
            'price'=>'required|min:2',
            'hotel_id'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>"All fields are required and must be longer than 2 characters"],400);
        }
        $room= Room::create($request->all());
        return response()->json($room, 201);
    }
    public function delete(Request $request, $id){
        $room=Room::find($id);

        if(is_null($room)){
            return response()->json(["message"=>"Room doesn't exit"],404);
        }
        $room->delete();
        return response()->json(null,204);
    }
}
