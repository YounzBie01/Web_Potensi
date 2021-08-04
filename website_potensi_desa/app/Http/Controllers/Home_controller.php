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
        $post_count = TarunaPost::all()->count();
        $highlight_post = ($post_count>4)? 4: $post_count;

        return view('taruna_home',[
            "web_name" => "taruna",

            "carousel_img" => TarunaImages::all()->random(3),
            "quote_ketua" => TarunaQuotes::all()->random(),

            "profil_pelindung" => TarunaMembers::all()->where('jabatan', 000),
            "profil_ketua" => TarunaMembers::all()->where('jabatan', 000),
            "profil_sekretaris" => TarunaMembers::all()->where('jabatan', 000),
            "profil_bendahara" => TarunaMembers::all()->where('jabatan', 000),

            "covid_quote" => TarunaQuotes::all()->random(),

            "posts_highlight" => TarunaPost::all()->take(-$highlight_post),
            "highlight_count" => $highlight_post,

            "path_norm" => ""
        ]);
    }

    public function show_bumdes()
    {
        $post_berita_count = BumdesPost::all()->where('category', 'berita')->count();
        $post_potensi_count = BumdesPost::all()->where('category', 'potensi')->count();
        $post_umkm_count = BumdesPost::all()->where('category', 'umkm')->count();
        $highlight_berita_post = ($post_berita_count>4)? 4: $post_berita_count;
        $highlight_potensi_post = ($post_potensi_count>4)? 4: $post_potensi_count;
        $highlight_umkm_post = ($post_umkm_count>4)? 4: $post_umkm_count;

        return view('bumdes_home',[
            "web_name" => "bumdes",

            "carousel_img" => BumdesImages::all()->random(3),
            "quote_ketua" => BumdesQuotes::all()->random(),

            "profil_pelindung" => BumdesMembers::all()->where('jabatan', 000),
            "profil_ketua" => BumdesMembers::all()->where('jabatan', 000),
            "profil_sekretaris" => BumdesMembers::all()->where('jabatan', 000),
            "profil_bendahara" => BumdesMembers::all()->where('jabatan', 000),

            "covid_quote" => BumdesQuotes::all()->random(),

            "berita_posts_highlight" => BumdesPost::all()->where('category', 'berita')->take(-$highlight_berita_post),
            "berita_highlight_count" => $highlight_berita_post,
            "potensi_posts_highlight" => BumdesPost::all()->where('category', 'potensi')->take(-$highlight_potensi_post),
            "potensi_highlight_count" => $highlight_potensi_post,
            "umkm_posts_highlight" => BumdesPost::all()->where('category', 'umkm')->take(-$highlight_umkm_post),
            "umkm_highlight_count" => $highlight_umkm_post,

            "path_norm" => ""
        ]);
    }
}
