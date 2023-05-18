<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class contactController extends Controller
{
    public function home(){
        return view('index');
    }
    //test

    public function storeData(Request $request){
        $contact = new contact();

        $contact->name= $request->name;
        $contact->email = $request->email;
        $contact->number = $request->number;
        $contact->review = $request->review;
        // $coffe->time = $request->time;
        // $coffe->hours = $request->hours;
        // $coffe->seats = $request->seats;
        // $seatbook->leaving = $request->leaving;

        $contact->save();
        return redirect()->route('home');
    }

    public function Admin_Contact_Index()
    {
        $data = DB::table('contacts')->get();
        return view('admin.contact', compact('data'));
    }
}
