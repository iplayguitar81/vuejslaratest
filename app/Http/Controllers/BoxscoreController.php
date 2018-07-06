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


    public function showStats(){

       // $boxscore = Boxscore::all();

       // $team = Team::all();

       // $team = $team->where('team_json->city', 'Portland');

        $team = DB::table('teams')
            ->where('team_json->city', 'Portland')
            ->get(['team_json']);




      // $team = json_decode($team,true);

       // $team = json_encode($team);

//        $player = DB::table('boxscores')
//            ->where('boxscore_json->away_team->full_name', 'Phoenix Suns')
//            ->get();
//

       // $player = Boxscore::whereRaw('JSON_CONTAINS(boxscore_json->away_stats$., "Alex Len")')->get();

//$player = Boxscore::where('boxscore_json->away_stats', 'like',  '%Alex Len%')->avg(['boxscore_json->away_stats->points']);

    $player = Boxscore::where('boxscore_json->away_stats', 'like',  '%LeBron James%')->get();

   // $player = json_encode($player,true);

     //$player = json_encode($player['boxscore_json'], true);
      //  $player = new Collection($player);


     //   $player = $player->count('points');
//        $player = $player->sum(function ($play) {
//            return $play->boxscore_json->away_stats->sum('points');
//        });

       // $player = Boxscore::whereRaw('JSON_CONTAINS(boxscore_json->away_stats"$[*].display_name", "Alex Len")')->get();

        //$player = Boxscore::whereRaw('JSON_CONTAINS(boxscore_json->away_stats->"$[*]."->display_name, "Alex Len")')->get();
        //Note::where('note_id','1')->get(['user_id']);
      // $player = Boxscore::whereRaw('JSON_CONTAINS(boxscore_json->away_team, \'{"full_name": "Phoenix Suns"}\')')->get();

//        $team = Team::where([
//            ['team_json->team_id', 'like', 'toronto-raptors'],
//        ])->get();


//       $teamArr = ['atlanta-hawks', 'dallas-mavericks', 'chicago-bulls'];
//
//        $team = Team::whereIn('team_json->team_id', $teamArr)->get();

      // $team = DB::table('teams')->where(DB::raw('JSON_EXTRACT(`teams.team_json`, "$.team_id")'), '=', 'dallas-mavericks');

      //  $team = DB::table('teams')->where('team_json->team_id', 'atlanta-hawks')->get();

       // $team = Team::whereRaw('JSON_CONTAINS(team_json->"$[*].team_id", "atlanta-hawks")')->get();

//        $boxscore = Boxscore::whereRaw('JSON_CONTAINS(boxscore_json->"$[*].display_name", "Alex Len")')->get();

       // $boxscore = Boxscore::whereRaw('JSON_CONTAINS(boxscore_json->home_team->"$[*].team_id", "dallas-mavericks")')->get();

//        $test_dude = [];

//        foreach($boxscore as $box) {
//            ;
//            array_push($test_dude, $box->whereJsonContains('away_stats', 'Alex Len'));
//
//        }




        //return view('boxscore.show-stats', compact('team', 'player') );
        return view('boxscore.show-stats')->with(compact('team', 'player'));;

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
