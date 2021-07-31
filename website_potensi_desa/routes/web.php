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

Route::get('/', function () {
    return view('landingpage',[
        "web_name" => "bumdes"
    ]);
});

Route::get('/taruna', function(){
    return view('taruna_home',[
        "web_name" => "taruna"
    ]);
});

Route::get('/taruna/ketua', function(){
    return view('taruna_ketua',[
        "web_name" => "taruna"
    ]);
});

Route::get('/bumdes', function(){
    return view('bumdes_home', [
        "web_name" => "bumdes"
    ]);
});
