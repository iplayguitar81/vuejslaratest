<?php

namespace App\Http\Controllers;

use App\Boxscore;
use App\Team;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



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


    public function showStats($slug){


//        $team = DB::table('teams')
//            ->where('team_json->city', 'Portland')
//            ->get(['team_json']);

        //$player_name = str_slug($slug);

       $player_name = str_replace('-', ' ', $slug);
       $player_name = str_replace('_', '-', $player_name);


        $player = Boxscore::where([
            ['boxscore_json->away_stats', 'like',  '%'.$player_name.'%'],
            ['season_type', '=',  'regular'],
        ])->orWhere([
            ['boxscore_json->home_stats', 'like',  '%'.$player_name.'%'],
            ['season_type', '=',  'regular'],
        ])->groupBy('event_id')->get();


       // $player = Boxscore::whereRaw(['boxscore_json->away_stats', 'like',  '%'.$player_name.'%'])->orWhereRaw(['boxscore_json->home_stats', 'like',  '%'.$player_name.'%']);

        $player = Boxscore::whereRaw('lower(boxscore_json->"$.away_stats") like lower(?)', ["%{$player_name}%"])->orWhereRaw('lower(boxscore_json->"$.home_stats") like lower(?)', ["%{$player_name}%"])->groupBy('event_id')->get();


        $total_points = 0;
        $total_rebounds = 0;
        $total_blocks = 0;
        $total_steals = 0;
        $total_assists = 0;
        $games_played = 0;

        foreach($player as $play)
        {

            foreach($play['boxscore_json']['away_stats'] as $regis){


            if(strtolower( $regis['display_name']) == $player_name){

                $total_points+=$regis['points'];
                $total_rebounds+=$regis['rebounds'];
                $total_blocks+=$regis['blocks'];
                $total_steals+=$regis['steals'];
                $total_assists+=$regis['assists'];
                $games_played +=1;

            }

            }

        }

        foreach($player as $play)
        {

            foreach($play['boxscore_json']['home_stats'] as $regis){


                if(strtolower( $regis['display_name']) == $player_name){

                    $total_points+=$regis['points'];
                    $total_rebounds+=$regis['rebounds'];
                    $total_blocks+=$regis['blocks'];
                    $total_steals+=$regis['steals'];
                    $total_assists+=$regis['assists'];
                    $games_played +=1;

                }

            }

        }


        if($games_played > 0) {
        $rs_points_avg = round(($total_points/$games_played),1);
        }
        else {
            $rs_points_avg = 0;
        }

        return view('boxscore.show-stats')->with(compact('team','player','total_points', 'total_rebounds', 'total_blocks', 'total_steals', 'total_assists', 'games_played', 'rs_points_avg', 'player_name'));;

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
