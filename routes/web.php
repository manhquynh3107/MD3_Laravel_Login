<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('login');
});

Route::post('/login',function (Illuminate\Http\Request $request){
    if ($request->username == 'root' && $request->password == '1'){
        return view('welcome_admin');
    }else{
        return view('login_error');
    }
});
