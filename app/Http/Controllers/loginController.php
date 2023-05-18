<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function storeData(Request $request)
    {
        $login = new Login();

        $login->name = $request->name;
        $login->email = $request->email;
        $login->password = $request->password;
        $login->confirmpassword = $request->confirmpassword;

        $login->save();

        return redirect()->route('login');
    }
}
