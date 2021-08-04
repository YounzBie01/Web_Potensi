<?php

namespace App\Http\Controllers;

use App\Models\BumdesPost;
use App\Models\TarunaPost;
use App\Models\BumdesImages;
use App\Models\TarunaImages;
use Illuminate\Http\Request;

class DetailArticle_controller extends Controller
{
    public function show_taruna(TarunaPost $post)
    {
 
        return view('taruna_full_kegiatan',[
            "web_name" => "taruna",

            "carousel_img" => TarunaImages::all()->random(3),

            "article" => $post,

            "parent_dir" => "/taruna/kegiatan",
            
            "path_norm" => "../../"
        ]);
    }

    public function show_bumdes_berita(BumdesPost $post)
    {
      
        return view('bumdes_full_kegiatan',[
            "web_name" => "bumdes",

            "carousel_img" => BumdesImages::all()->random(3),
            "article" => $post,
            "parent_dir" => "/bumdes/berita",
            "path_norm" => "../../"
        ]);
    }

    public function show_bumdes_potensi(BumdesPost $post)
    {

        return view('bumdes_full_kegiatan',[
            "web_name" => "bumdes",

            "carousel_img" => BumdesImages::all()->random(3),
            "article" => $post,
            "parent_dir" => "/bumdes/potensi",
            "path_norm" => "../../"
        ]);
    }

    public function show_bumdes_umkm(BumdesPost $post)
    {
        return view('bumdes_full_kegiatan',[
            "web_name" => "bumdes",

            "carousel_img" => BumdesImages::all()->random(3),
            "article" => $post,
            "parent_dir" => "/bumdes/umkm",
            "path_norm" => "../../"
        ]);
    }

}
