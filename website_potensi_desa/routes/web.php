<?php

use App\Http\Controllers\Taruna_home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home_controller;
use App\Http\Controllers\SOTK_controller;
use App\Http\Controllers\Covid_controller;
use App\Http\Controllers\Articles_controller;
use App\Http\Controllers\ComingSoon_controller;
use App\Http\Controllers\TarunaQuotesController;
use App\Http\Controllers\DetailArticle_controller;

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
Route::get('/taruna/kegiatan', [Articles_controller::class, 'show_taruna']);
Route::get('/taruna/kegiatan/{post:slug}', [DetailArticle_controller::class, 'show_taruna']);
Route::get('/taruna/soon', [ComingSoon_controller::class, 'show_taruna']);

Route::get('/taruna/ketua', function(){
    return view('taruna_ketua',[
        "web_name" => "taruna"
    ]);
});


Route::get('/bumdes', [Home_controller::class, 'show_bumdes']);
Route::get('/bumdes/sotk', [SOTK_controller::class, 'show_bumdes']);
Route::get('/bumdes/covid', [Covid_controller::class, 'show_bumdes']);
Route::get('/bumdes/berita', [Articles_controller::class, 'show_bumdes_berita']);
Route::get('/bumdes/potensi', [Articles_controller::class, 'show_bumdes_potensi']);
Route::get('/bumdes/umkm', [Articles_controller::class, 'show_bumdes_umkm']);
Route::get('/bumdes/berita/{post:slug}', [DetailArticle_controller::class, 'show_bumdes_berita']);
Route::get('/bumdes/potensi/{post:slug}', [DetailArticle_controller::class, 'show_bumdes_potensi']);
Route::get('/bumdes/umkm/{post:slug}', [DetailArticle_controller::class, 'show_bumdes_umkm']);
Route::get('/bumdes/soon', [ComingSoon_controller::class, 'show_bumdes']);


Route::get('/bumdes/ketua', function(){
    return view('bumdes_ketua', [
        "web_name" => "bumdes"
    ]);
});