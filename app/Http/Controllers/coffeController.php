<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffe;

class coffeController extends Controller
{
    public function seatbook(){
        return view('seatbook');
    }

    public function supplyData(Request $request){
        $coffe = new coffe();

        $coffe->name= $request->name;
        $coffe->email = $request->email;
        $coffe->phone = $request->phone;
        $coffe->date = $request->date;
        $coffe->time = $request->time;
        $coffe->hours = $request->hours;
        $coffe->seats = $request->seats;
        // $seatbook->leaving = $request->leaving;

        $coffe->save();
        return redirect()->route('seatbook');
    }
}
