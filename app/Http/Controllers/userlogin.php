<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userlogin extends Controller
{
    function display(Request $req)
    {
        //session 
        $data = $req->input('username');
        $req->session()->put('user',$data);
        return view('profile');
    }
    function show(Request $request)
    {
        $data= $request->input('username');
        $request->session()->flash('xyz',$data);
        return view('/login');
    }
    function data(Request $reeq)
    {
        return $reeq->file('file')->store('img');
    }
}
