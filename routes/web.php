<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userlogin;
use App\Http\Controllers\abcController;
use App\Http\Controllers\addController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function(){
    if(session()->has('user'))
    {
        return redirect('profile');
    }
    return view('login');
});

Route::get('/profile',function(){
    return view('profile');
});

Route::get('/logout',function(){
    if(session()->has('user'))
    {
        session()->pull('user',null);
    }
    return view('login');
});
Route::view('/upload','file');

Route::post('/users',[userlogin::class,'display']);

Route::post('/flash',[userlogin::class,'show']);

Route::post('/upload',[userlogin::class,'data']);

Route::get('/display',[abcController::class,'display']);


Route::post('/add',[addController::class,'add']);
Route::view("/add",'add');

Route::get('remove/{id}',[abcController::class,'delete']);

Route::get('edit/{id}',[abcController::class,'showdata']);

Route::post('/update',[abcController::class,'update']);