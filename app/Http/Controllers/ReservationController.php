<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    public function create(Request $request){
        $reservation= new Reservation();
        $reservation->name=$request->name;
        $reservation->surname=$request->surname;
        $reservation->address=$request->address;
        $reservation->phone=$request->phone;
        $reservation->arrive_date=$request->arrive_date;
        $reservation->end_date=$request->end_date;
        $reservation->room_id=$request->room_id;
        $reservation->save();
        return redirect('/'.$request->id);
    }
    public function getAll(){
        return response()->json(Reservation::all(),200);

    }
    public function getById($id){
        $reservation=Reservation::find($id);
        if(is_null($reservation)){
            return response()->json(["message"=>"Reservation doesn't exist!"],404);
        }
        return response()->json($reservation,200);
    }
    public function save(Request $request){

        $validator = Validator::make($request->all(), [
            'name'=>'required|min:2',
            'surname'=>'required|min:2',
            'address'=>'required|min:2',
            'phone'=>'required|min:2',
            'arrive_date'=>'required',
            'end_date'=>'required',
            'room_id'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>"All fields are required and must be longer than 2 characters"],400);
        }
        $reservation= Reservation::create($request->all());
        return response()->json($reservation, 201);
    }
    public function delete(Request $request, $id){
        $reservation=Reservation::find($id);

        if(is_null($reservation)){
            return response()->json(["message"=>"Reservation doesn't exit"],404);
        }
        $reservation->delete();
        return response()->json(null,204);
    }
}
