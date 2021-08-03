<?php

namespace App\Http\Controllers;

use App\Models\TarunaPost;
use App\Models\BumdesImages;
use App\Models\BumdesQuotes;
use App\Models\TarunaImages;
use App\Models\TarunaQuotes;
use Illuminate\Http\Request;
use App\Models\BumdesMembers;
use App\Models\BumdesPost;
use App\Models\TarunaMembers;

class Home_controller extends Controller
{
    public function show_taruna()
    {
        return view('taruna_home',[
            "web_name" => "taruna",

            "carousel_img" => TarunaImages::all()->random(3),
            "quote_ketua" => TarunaQuotes::all()->random(),

            "profil_pelindung" => TarunaMembers::all()->where('jabatan', 000),
            "profil_ketua" => TarunaMembers::all()->where('jabatan', 000),
            "profil_sekretaris" => TarunaMembers::all()->where('jabatan', 000),
            "profil_bendahara" => TarunaMembers::all()->where('jabatan', 000),

            "covid_quote" => TarunaQuotes::all()->random(),

            "posts_highlight" => TarunaPost::all()->take(-4),

            "path_norm" => ""
        ]);
    }

    public function show_bumdes()
    {
        return view('bumdes_home',[
            "web_name" => "bumdes",

            "carousel_img" => BumdesImages::all()->random(3),
            "quote_ketua" => BumdesQuotes::all()->random(),

            "profil_pelindung" => BumdesMembers::all()->where('jabatan', 000),
            "profil_ketua" => BumdesMembers::all()->where('jabatan', 000),
            "profil_sekretaris" => BumdesMembers::all()->where('jabatan', 000),
            "profil_bendahara" => BumdesMembers::all()->where('jabatan', 000),

            "covid_quote" => BumdesQuotes::all()->random(),

            "berita_posts_highlight" => BumdesPost::all()->where('category', 'umkm')->take(-4),
            "potensi_posts_highlight" => BumdesPost::all()->where('category', 'umkm')->take(-4),
            "umkm_posts_highlight" => BumdesPost::all()->where('category', 'umkm')->take(-4),

            "path_norm" => ""
        ]);
    }
}
