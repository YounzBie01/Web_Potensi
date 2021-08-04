<?php

namespace App\Http\Controllers;

use App\Models\BumdesImages;
use App\Models\TarunaImages;
use Illuminate\Http\Request;

class ComingSoon_controller extends Controller
{
    public function show_taruna()
    {
 
        return view('comingsoon',[
            "web_name" => "taruna",

            "carousel_img" => TarunaImages::all()->random(3),
            "parent_dir" => "/taruna",
            "path_norm" => "../"
        ]);
    }

    public function show_bumdes()
    {
      
        return view('comingsoon',[
            "web_name" => "bumdes",

            "carousel_img" => BumdesImages::all()->random(3),
            "parent_dir" => "/bumdes",
            "path_norm" => "../"
        ]);
    }

}
