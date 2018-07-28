<?php

namespace App\Http\Controllers;

use App\Roster;
use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Barryvdh\Snappy\IlluminateSnappyPdf;


class RosterController extends Controller
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Roster  $roster
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //

        $roster = Roster::where('team_id', $slug)->first();



        return view('roster.show', compact('roster', 'slug') );

    }


    /**
     * Stream pdf for Roster view.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfViewRoster(Request $request)
    {



        if($request->has('view')) {

            $roster = Roster::where('team_id', $request->team)->first();
            view()->share('roster',$roster);
            // pass view file
            $pdf = SnappyPdf::loadView('roster.show');
            // download pdf
            return $pdf->stream('team-roster.pdf');
        }
        return view('pdfview');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Roster  $roster
     * @return \Illuminate\Http\Response
     */
    public function edit(Roster $roster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Roster  $roster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roster $roster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roster  $roster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roster $roster)
    {
        //
    }
}
