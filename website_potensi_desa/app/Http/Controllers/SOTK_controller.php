<?php

namespace App\Http\Controllers;

use App\Models\BumdesImages;
use App\Models\TarunaImages;
use App\Models\TarunaQuotes;
use Illuminate\Http\Request;
use App\Models\BumdesMembers;
use App\Models\BumdesSotkDetail;
use App\Models\TarunaMembers;
use App\Models\TarunaSotkDetail;

class SOTK_controller extends Controller
{
    public function show_taruna()
    {
        return view('taruna_sotk',[
            "web_name" => "taruna",

            "carousel_img" => TarunaImages::all()->random(3),

            "profil_pengurus" => TarunaMembers::all(),
            "lower_text" => TarunaSotkDetail::all()->last(),

            "path_norm" => "../"
        ]);
    }

    public function show_bumdes()
    {
        return view('bumdes_sotk',[
            "web_name" => "bumdes",

            "carousel_img" => BumdesImages::all()->random(3),
            "profil_pengurus" => BumdesMembers::all(),

            "lower_text" => BumdesSotkDetail::all()->last(),

            "path_norm" => "../"
        ]);
    }

}
