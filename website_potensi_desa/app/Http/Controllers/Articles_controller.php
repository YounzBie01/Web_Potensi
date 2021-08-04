<?php

namespace App\Http\Controllers;

use App\Models\BumdesImages;
use App\Models\TarunaImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Articles_controller extends Controller
{
    public function show_taruna()
    {
        $articles = DB::table('taruna_posts')->latest()->paginate(5);
 
        return view('taruna_list_kegiatan',[
            "web_name" => "taruna",

            "carousel_img" => TarunaImages::all()->random(3),

            "articles" => $articles,
            
            "path_norm" => "../"
        ]);
    }

    public function show_bumdes_berita()
    {
        $articles = DB::table('bumdes_posts')->where('category', 'berita')->latest()->paginate(5);

        return view('bumdes_list_kegiatan',[
            "web_name" => "bumdes",

            "carousel_img" => BumdesImages::all()->random(3),
            "articles" => $articles,
            "parent_dir" => "/bumdes/berita",
            "path_norm" => "../"
        ]);
    }

    public function show_bumdes_potensi()
    {
        $articles = DB::table('bumdes_posts')->where('category', 'potensi')->latest()->paginate(5);

        return view('bumdes_list_kegiatan',[
            "web_name" => "bumdes",

            "carousel_img" => BumdesImages::all()->random(3),
            "articles" => $articles,
            "parent_dir" => "/bumdes/potensi",
            "path_norm" => "../"
        ]);
    }

    public function show_bumdes_umkm()
    {
        $articles = DB::table('bumdes_posts')->where('category', 'umkm')->latest()->paginate(5);

        return view('bumdes_list_kegiatan',[
            "web_name" => "bumdes",

            "carousel_img" => BumdesImages::all()->random(3),
            "articles" => $articles,
            "parent_dir" => "/bumdes/umkm",
            "path_norm" => "../"
        ]);
    }

}
