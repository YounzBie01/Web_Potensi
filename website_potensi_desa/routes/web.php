<?php

use App\Http\Controllers\Covid_controller;
use App\Http\Controllers\Home_controller;
use App\Http\Controllers\SOTK_controller;
use App\Http\Controllers\Taruna_home;
use App\Http\Controllers\TarunaQuotesController;
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

Route::get('/taruna', [Home_controller::class, 'show_taruna']);
Route::get('/taruna/sotk', [SOTK_controller::class, 'show_taruna']);
Route::get('/taruna/covid', [Covid_controller::class, 'show_taruna']);


Route::get('/taruna/ketua', function(){
    return view('taruna_ketua',[
        "web_name" => "taruna"
    ]);
});




Route::get('/taruna/kegiatan', function(){
    return view('taruna_list_kegiatan',[
        "web_name" => "taruna"
    ]);
});

///
Route::get('/taruna/slug', function(){
    return view('taruna_list_kegiatan',[
        "web_name" => "taruna"
    ]);
});
///

Route::get('/bumdes', function(){
    return view('bumdes_home', [
        "web_name" => "bumdes"
    ]);
});


Route::get('/bumdes', [Home_controller::class, 'show_bumdes']);
Route::get('/bumdes/sotk', [SOTK_controller::class, 'show_bumdes']);
Route::get('/bumdes/covid', [Covid_controller::class, 'show_bumdes']);


Route::get('/bumdes/ketua', function(){
    return view('bumdes_ketua', [
        "web_name" => "bumdes"
    ]);
});


Route::get('/bumdes/kegiatan', function(){
    return view('bumdes_list_kegiatan', [
        "web_name" => "bumdes",
        "tag" => "kegiatan"
    ]);
});

Route::get('/bumdes/potensi', function(){
    return view('bumdes_list_kegiatan', [
        "web_name" => "bumdes",
        "tag" => "potensi"
    ]);
});

Route::get('/bumdes/UMKM', function(){
    return view('bumdes_list_kegiatan', [
        "web_name" => "bumdes",
        "tag" => "UMKM"
    ]);
});

///
Route::get('/bumdes/slug', function(){
    return view('bumdes_list_kegiatan', [
        "web_name" => "bumdes",
        "tag" => "potensi"
    ]);
});
///