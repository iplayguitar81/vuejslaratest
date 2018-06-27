<?php

namespace App\Http\Controllers;

use App\Boxscore;
use Illuminate\Http\Request;

class BoxscoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


    public function show($slug)
    {
        //
        $boxscore = Boxscore::where('event_id', $slug)->first();

        return view('boxscore.show', compact('boxscore') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boxscore  $boxscore
     * @return \Illuminate\Http\Response
     */
    public function edit(Boxscore $boxscore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boxscore  $boxscore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boxscore $boxscore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boxscore  $boxscore
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boxscore $boxscore)
    {
        //
    }
}
