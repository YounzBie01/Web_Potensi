<?php

namespace App\Http\Controllers;

use App\Models\taruna_quotes;
use Illuminate\Http\Request;

class TarunaQuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('taruna_home', [
            "quote" => taruna_quotes::all()->random(),
            "web_name" => "taruna"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\taruna_quotes  $taruna_quotes
     * @return \Illuminate\Http\Response
     */
    public function show(taruna_quotes $taruna_quotes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\taruna_quotes  $taruna_quotes
     * @return \Illuminate\Http\Response
     */
    public function edit(taruna_quotes $taruna_quotes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\taruna_quotes  $taruna_quotes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, taruna_quotes $taruna_quotes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\taruna_quotes  $taruna_quotes
     * @return \Illuminate\Http\Response
     */
    public function destroy(taruna_quotes $taruna_quotes)
    {
        //
    }
}
