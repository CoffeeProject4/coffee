<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Model\User;

class UserController extends Controller
{
    public function Admin_User_Index()
    {
        $data = DB::table('users')->get();
        return view('admin.user', compact('data'));
    }
}
