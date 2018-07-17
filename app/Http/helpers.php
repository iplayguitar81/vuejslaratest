<?php


use App\Boxscore;

function gameDate($date) {

    $gamedate = new DateTime($date, new DateTimeZone('America/Los_Angeles'));

    $game_date = date_sub($gamedate, date_interval_create_from_date_string('3 hour'));
    $game_date = $game_date->format('M jS Y');

    return $game_date;

}



 function showPlayoffStats($slug)
{




    $player_name = str_replace('-', ' ', $slug);
    $player_name = str_replace('_', '-', $player_name);


    //this works case sensitive in JSON field:

//        $player = Boxscore::where([
//            ['boxscore_json->away_stats', 'like',  '%'.$player_name.'%'],
//            ['season_type', '=',  'regular'],
//        ])->orWhere([
//            ['boxscore_json->home_stats', 'like',  '%'.$player_name.'%'],
//            ['season_type', '=',  'regular'],
//        ])->groupBy('event_id')->get();


    $player = Boxscore::whereRaw('lower(boxscore_json->"$.away_stats") like lower(?)', ["%{$player_name}%"])->where('season_type', '=', 'post')->orWhereRaw('lower(boxscore_json->"$.home_stats") like lower(?)', ["%{$player_name}%"])->where('season_type', '=', 'post')->groupBy('event_id')->get();

    $total_points = 0;
    $total_rebounds = 0;
    $total_o_rebounds = 0;
    $total_d_rebounds = 0;

    $total_blocks = 0;
    $total_steals = 0;
    $total_assists = 0;
    $total_turnovers = 0;
    $total_personal_fouls = 0;
    $total_minutes = 0;
    $field_goals_made = 0;
    $field_goals_attempted = 0;
    $free_throws_made = 0;
    $free_throws_attempted = 0;

    $three_point_field_goals_made  = 0;
    $three_point_field_goals_attempted  = 0;
    $starter_count = 0;


    $display_name = '';

    $ps_games_played = 0;

    foreach($player as $play)
    {

        foreach($play['boxscore_json']['away_stats'] as $regis){



            if(strtolower( $regis['display_name']) == $player_name){

                $display_name = $regis['display_name'];

                $total_points+=$regis['points'];

                $total_rebounds+=$regis['rebounds'];
                $total_o_rebounds+=$regis['offensive_rebounds'];
                $total_d_rebounds+=$regis['defensive_rebounds'];

                $total_blocks+=$regis['blocks'];
                $total_steals+=$regis['steals'];
                $total_assists+=$regis['assists'];
                $total_turnovers+=$regis['turnovers'];
                $total_personal_fouls+=$regis['personal_fouls'];
                $total_minutes+=$regis['minutes'];
                $field_goals_made+=$regis['field_goals_made'];
                $field_goals_attempted+=$regis['field_goals_attempted'];

                $three_point_field_goals_made+=$regis['three_point_field_goals_made'];
                $three_point_field_goals_attempted+=$regis['three_point_field_goals_attempted'];

                $free_throws_made+=$regis['free_throws_made'];
                $free_throws_attempted+=$regis['free_throws_attempted'];


                if($regis['is_starter'] == 'true'){
                    $starter_count+=1;
                }


                $ps_games_played +=1;

            }

        }

    }

    foreach($player as $play)
    {

        foreach($play['boxscore_json']['home_stats'] as $regis){


            if(strtolower( $regis['display_name']) == $player_name){

                $total_points+=$regis['points'];
                $total_o_rebounds+=$regis['offensive_rebounds'];
                $total_d_rebounds+=$regis['defensive_rebounds'];
                $total_rebounds+=$regis['rebounds'];
                $total_blocks+=$regis['blocks'];
                $total_steals+=$regis['steals'];
                $total_assists+=$regis['assists'];
                $total_turnovers+=$regis['turnovers'];
                $total_personal_fouls+=$regis['personal_fouls'];
                $total_minutes+=$regis['minutes'];
                $field_goals_made+=$regis['field_goals_made'];
                $field_goals_attempted+=$regis['field_goals_attempted'];
                $three_point_field_goals_made+=$regis['three_point_field_goals_made'];
                $three_point_field_goals_attempted+=$regis['three_point_field_goals_attempted'];
                $free_throws_made+=$regis['free_throws_made'];
                $free_throws_attempted+=$regis['free_throws_attempted'];


                if($regis['is_starter'] == 'true'){
                    $starter_count+=1;
                }


                $ps_games_played +=1;

            }

        }

    }


    if($ps_games_played > 0) {
        $rs_points_avg = round(($total_points/$ps_games_played),1);
        $rs_mpg_avg = round(($total_minutes/$ps_games_played),1);
        $rs_to_avg = round(($total_turnovers/$ps_games_played),1);
        $rs_pf_avg = round(($total_personal_fouls/$ps_games_played),1);
        $rs_stl_avg = round(($total_steals/$ps_games_played),1);
        $rs_blk_avg = round(($total_blocks/$ps_games_played),1);
        $rs_ast_avg = round(($total_assists/$ps_games_played),1);

        $rs_reb_avg = round(($total_rebounds/$ps_games_played),1);
        $rs_o_reb_avg = round(($total_o_rebounds/$ps_games_played),1);
        $rs_d_reb_avg = round(($total_d_rebounds/$ps_games_played),1);
        $rs_fgm_avg = round(($field_goals_made/$ps_games_played),1);
        $rs_fga_avg = round(($field_goals_attempted/$ps_games_played),1);
        $rs_fg_pct_avg = round(($field_goals_made/$field_goals_attempted),3);




        //check to see if three pointers were shot and set to 0 if not
        if($three_point_field_goals_attempted > 0){
            $rs_3ptm_avg = round(($three_point_field_goals_made/$ps_games_played),1);
            $rs_3pta_avg = round(($three_point_field_goals_attempted/$ps_games_played),1);
            $rs_3pt_pct_avg = round(($three_point_field_goals_made/$three_point_field_goals_attempted),3);
        }
        else {
            $rs_3ptm_avg = 0;
            $rs_3pta_avg = 0;
            $rs_3pt_pct_avg = 0;
        }

        //check to see if free throws were shot and set to 0 if not
        if($free_throws_attempted > 0) {
            $rs_ftm_avg = round(($free_throws_made / $ps_games_played), 1);
            $rs_fta_avg = round(($free_throws_attempted / $ps_games_played), 1);
            $rs_ft_pct_avg = round(($free_throws_made / $free_throws_attempted), 3);
        }

        else {
            $rs_ftm_avg = 0;
            $rs_fta_avg = 0;
            $rs_ft_pct_avg = 0;

        }





    }
    else {
        $rs_points_avg = 0;
    }



    return view('partials.playoffs-player-stats', compact('team','player','total_points', 'total_rebounds', 'total_o_rebounds', 'total_d_rebounds', 'total_blocks', 'total_steals', 'total_assists', 'ps_games_played', 'rs_points_avg', 'player_name', 'total_turnovers', 'total_personal_fouls', 'total_minutes', 'field_goals_made', 'field_goals_attempted', 'three_point_field_goals_made', 'three_point_field_goals_attempted', 'free_throws_made', 'free_throws_attempted', 'rs_mpg_avg', 'rs_to_avg', 'rs_pf_avg', 'rs_stl_avg', 'rs_blk_avg', 'rs_ast_avg', 'rs_reb_avg', 'rs_o_reb_avg', 'rs_d_reb_avg', 'rs_fgm_avg', 'rs_fga_avg','rs_fg_pct_avg', 'rs_3ptm_avg', 'rs_3pta_avg', 'rs_3pt_pct_avg', 'rs_ftm_avg', 'rs_fta_avg', 'rs_ft_pct_avg', 'starter_count', 'display_name'));




}




?>