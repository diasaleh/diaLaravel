<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/greet/{name?}', function ($name="you") {
    return view('actions.greet',['name'=>$name]);
})->name('greet');

Route::get('/hug', function () {
    return view('actions.hug');
})->name('hug');

Route::get('/kiss', function () {
    return view('actions.kiss');
})->name('kiss');

Route::post('/benice',function(\Illuminate\Http\Request $req){
    if(isset($req['action']) && $req['name']){
        if(strlen($req['name'])>0){
            return view('actions.nice',['action' => $req['action'] ,'name' => $req['name']]);
        }
        return redirect()->back();

    }
    return redirect()->back();
})->name('benice');