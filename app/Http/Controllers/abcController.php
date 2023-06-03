<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class abcController extends Controller
{
    function display()
    {
        $data= user::all();
        return view('delete',['names'=>$data]);

    }
    function delete($id)
    {
        $data = user::find($id);
        $data->delete();
        return view('delete');
    }
    function showdata($id)
    {
        $data=user::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req)
    {
        $data=user::find($req->id);
        $data->name=$req->username;
        $data->password=$req->password;
        $data->save();
        return view('delete');
    }
}

