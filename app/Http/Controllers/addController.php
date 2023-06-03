<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class addController extends Controller
{
    function add(Request $req)
    {
        $us =new user;
        $us->name=$req->username;
        $us->password=$req->password;
        $us->save();
        return view('add');
    }
}
