<?php

namespace App\Http\Controllers;

use App\Models\CovidTips;
use App\Models\LowerCovid;
use App\Models\BumdesImages;
use App\Models\TarunaImages;
use Illuminate\Http\Request;

class Covid_controller extends Controller
{
    public function show_taruna()
    {
        return view('covid',[
            "web_name" => "taruna",

            "carousel_img" => TarunaImages::all()->random(3),
            
            "covid_tips" => CovidTips::all(),
            "covid_detail" => LowerCovid::all(),

            "path_norm" => "../"
        ]);
    }

    public function show_bumdes()
    {
        return view('covid',[
            "web_name" => "bumdes",

            "carousel_img" => BumdesImages::all()->random(3),
            
            "covid_tips" => CovidTips::all(),
            "covid_detail" => LowerCovid::all(),

            "path_norm" => "../"
        ]);
    }

}
