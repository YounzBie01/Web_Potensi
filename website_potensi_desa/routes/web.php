<?php

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

Route::get('/taruna', [TarunaQuotesController::class, 'index']);

Route::get('/taruna/ketua', function(){
    return view('taruna_ketua',[
        "web_name" => "taruna"
    ]);
});

Route::get('/taruna/covid', function(){
    return view('covid',[
        "web_name" => "taruna"
    ]);
});

Route::get('/taruna/sotk', function(){
    return view('taruna_sotk',[
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

Route::get('/bumdes/ketua', function(){
    return view('bumdes_ketua', [
        "web_name" => "bumdes"
    ]);
});

Route::get('/bumdes/covid', function(){
    return view('covid', [
        "web_name" => "bumdes"
    ]);
});

Route::get('/bumdes/sotk', function(){
    return view('bumdes_sotk', [
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