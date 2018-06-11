<?php

function printResult($content)
{
    //   global $TIME_ZONE;

    // Parses the JSON content and returns a reference to
    // Events (https://erikberg.com/api/methods/events)
    // $events = json_decode($content);

    // print_r((array) json_decode($content));


    $obj = json_decode($content);
    // print_r($obj->{'away_team'}); // prints out the away_team array
    $away_team =$obj->{'away_team'};
    $away_abbrev =$obj->{'away_team'}->abbreviation;
    $home_abbrev =$obj->{'home_team'}->abbreviation;
    //sweet dealio!
    $home_id =$obj->{'home_team'}->team_id;
    $away_id =$obj->{'away_team'}->team_id;


    //print_r($obj->{'home_stats'}); // prints out the away_team array
    $home_team =$obj->{'home_stats'};

    //each player
    //print_r ($obj->home_stats[0]);

    //field_goals_made
    //three_point_field_goals_made

    //correct format for player data!! :D
    // print_r ($obj->home_stats[0]->{'last_name'});
    $count = 0;
    $total = count($obj->home_stats);
    $total2 = count($obj->away_stats);



    //home and away point totals
    $home_totals=($obj->home_totals->{'points'});
    $away_totals=($obj->away_totals->{'points'});

    //entire team totals!!!

    //field goals made and attempted
    $home_field_goals_made=($obj->home_totals->{'field_goals_made'});
    $away_field_goals_made=($obj->away_totals->{'field_goals_made'});
    $away_field_goals_attempted=($obj->away_totals->{'field_goals_attempted'});
    $home_field_goals_attempted=($obj->home_totals->{'field_goals_attempted'});

    //3pointers made
    $home_three_point_field_goals_attempted=($obj->home_totals->{'three_point_field_goals_attempted'});
    $home_three_point_field_goals_made=($obj->home_totals->{'three_point_field_goals_made'});
    $away_three_point_field_goals_made=($obj->away_totals->{'three_point_field_goals_made'});
    $away_three_point_field_goals_attempted=($obj->away_totals->{'three_point_field_goals_attempted'});

    //free_throws_made
    $away_free_throws_attempted=($obj->away_totals->{'free_throws_attempted'});
    $home_free_throws_attempted=($obj->home_totals->{'free_throws_attempted'});

    $home_free_throws_made=($obj->home_totals->{'free_throws_made'});
    $away_free_throws_made=($obj->away_totals->{'free_throws_made'});

    //rebounds
    $away_offensive_rebounds=($obj->away_totals->{'offensive_rebounds'});
    $away_defensive_rebounds=($obj->away_totals->{'defensive_rebounds'});
    $away_total_rebounds= $away_offensive_rebounds + $away_defensive_rebounds;
    $home_offensive_rebounds=($obj->home_totals->{'offensive_rebounds'});
    $home_defensive_rebounds=($obj->home_totals->{'defensive_rebounds'});
    $home_total_rebounds= $home_offensive_rebounds + $home_defensive_rebounds;


    //assists
    $home_assists=($obj->home_totals->{'assists'});
    $away_assists=($obj->away_totals->{'assists'});

    //steals
    $home_steals=($obj->home_totals->{'steals'});
    $away_steals=($obj->away_totals->{'steals'});

    //blocks
    $home_blocks=($obj->home_totals->{'blocks'});
    $away_blocks=($obj->away_totals->{'blocks'});


    //turnovers
    $away_turnovers=($obj->away_totals->{'turnovers'});
    $home_turnovers=($obj->home_totals->{'turnovers'});

    //field_goal_percentage
    $away_field_goal_percentage=($obj->away_totals->{'field_goal_percentage'}) * 100;
    $home_field_goal_percentage=($obj->home_totals->{'field_goal_percentage'})* 100;


    //free_throw_percentage
    $home_free_throw_percentage=($obj->home_totals->{'free_throw_percentage'})* 100;
    $away_free_throw_percentage=($obj->away_totals->{'free_throw_percentage'})* 100;

    //three_point_percentage
    $home_three_point_percentage=($obj->home_totals->{'three_point_percentage'})* 100;
    $away_three_point_percentage=($obj->away_totals->{'three_point_percentage'})* 100;

    //personal_fouls
    $home_personal_fouls = ($obj->home_totals->{'personal_fouls'});
    $away_personal_fouls = ($obj->away_totals->{'personal_fouls'});

    // Assist/Turnover (need to calculate)

    //away_period_scores

    //boston-celtics
    // dallas-mavericks
    // brooklyn-nets
    // houston-rockets
    // new-york-knicks
    // memphis-grizzlies
    // philadelphia-76ers
    // new-orleans-pelicans
    // toronto-raptors
    // san-antonio-spurs
    // chicago-bulls
    // denver-nuggets
    // cleveland-cavaliers
    // minnesota-timberwolves
    // detroit-pistons
    // indiana-pacers
    // milwaukee-bucks
    // utah-jazz
    // atlanta-hawks
    // golden-state-warriors
    // charlotte-hornets
    // los-angeles-clippers
    // miami-heat
    // los-angeles-lakers
    // orlando-magic
    // phoenix-suns
    // washington-wizards
    // sacramento-kings
    //oklahoma-city-thunder


    $away_period_scores = ($obj->away_period_scores);

    $away_period_scores1=$away_period_scores[0];
    $away_period_scores2=$away_period_scores[1];
    $away_period_scores3=$away_period_scores[2];
    $away_period_scores4=$away_period_scores[3];

    #overtimes set up to handle 6 overtimes (current nba record but this happened in 1951)
    $away_period_scores5=$away_period_scores[4];
    $away_period_scores6=$away_period_scores[5];
    $away_period_scores7=$away_period_scores[6];
    $away_period_scores8=$away_period_scores[7];
    $away_period_scores9=$away_period_scores[8];
    $away_period_scores10=$away_period_scores[9];



    $home_period_scores = ($obj->home_period_scores);

    $home_period_scores1=$home_period_scores[0];
    $home_period_scores2=$home_period_scores[1];
    $home_period_scores3=$home_period_scores[2];
    $home_period_scores4=$home_period_scores[3];


    #overtimes set up to handle 6 overtimes (current nba record but this happened in 1951)
    $home_period_scores5=$home_period_scores[4];
    $home_period_scores6=$home_period_scores[5];
    $home_period_scores7=$home_period_scores[6];
    $home_period_scores8=$home_period_scores[7];
    $home_period_scores9=$home_period_scores[8];
    $home_period_scores10=$home_period_scores[9];



    //start_date_time
    $start_date_time= ($obj->event_information->{'start_date_time'});
    $start_date_time2= ($obj->event_information->{'start_date_time'});

    //convert start_date_time
    $start_date_time=date(" l F jS Y  g:i A", strtotime($start_date_time."-2 hours"));

    //put it into right format for method to be built?
    // $calendar_date = strftime($start_date_time,'yyyy-MM-dd');
    $calendar_date = date('Y-m-d', strtotime($start_date_time));

    //arena capacity
    $capacity = ($obj->event_information->{'site'}->{'capacity'});

    //game attendance
    $attendance = ($obj->event_information->{'attendance'});

    $referees = ($obj->officials);

    //three separate refs array objects concat.
    $ref1=$referees[0]->{'first_name'} .' '.$referees[0]->{'last_name'};
    $ref2=$referees[1]->{'first_name'} .' '.$referees[1]->{'last_name'};
    $ref3=$referees[2]->{'first_name'} .' '.$referees[2]->{'last_name'};


    //is_starter - - boolean check to see, then add bold tag version of name inside of td.



    //team full names:
    $home_team = ($obj->home_team->{'first_name'}).' '.($obj->home_team->{'last_name'});
    $away_team = ($obj->away_team->{'first_name'}).' '.($obj->away_team->{'last_name'});

    $home_team_last = ($obj->home_team->{'last_name'});
    $away_team_last = ($obj->away_team->{'last_name'});

    //home arena:
    $arena = ($obj->home_team->{'site_name'});





    echo "


        <div><p><input  id='start_date_time' name='start_date_time' type='datetime' style='width: 20em;' value='$start_date_time2' /></p><p><input  id='calendar_date' name='calendar_date' type='datetime' style='width: 20em;' value='$calendar_date' /></p><p><input  id='away_team' name='away_team' type='text' style='width: 20em;' value='$away_team' />  <input  id='away_total' name='away_total' type='text' style='width: 3em;' value='$away_totals' />  <img src='$away_id.gif' alt='away team'/></p> <p>at</p> <p><input  id='home_team' name='home_team' type='text' style='width: 20em;' value='$home_team' />  <input  id='home_total' name='home_total' type='text' style='width: 3em;' value='$home_totals' /> <img src='$home_id.gif' alt='away team'/></p><hr><p><input  id='arena' name='arena' type='text' style='width: 15em;' value='$arena' /></p><p>Capacity: <input  id='capacity' name='capacity' type='text' style='width: 4em;' value='$capacity' /></p><p>Attendance: <input  id='attendance' name='attendance' type='text' style='width: 4em;' value='$attendance' /></p><p>Referees:</p><p><input  id='ref1' name='ref1' type='text' style='width: 20em;' value='$ref1' /></p><p><input  id='ref2' name='ref2' type='text' style='width: 20em;' value='$ref2' /></p><p><input  id='ref3' name='ref3' type='text' style='width: 20em;' value='$ref3' /></p><img src='refs.png' alt='refs'/></div>
        <table style='border: 1px inset #000;'>
        <tr style='border: 1px inset #000;'><th style='border: 1px inset #000;' colspan='19'>$home_team - - $home_totals</th></tr>
        <tr style='border: 1px inset #000;'><th style='border: 1px inset #000;'>PLAYER</th><th style='border: 1px inset #000;'>MIN</th><th style='border: 1px inset #000;'>PTS</th><th style='border: 1px inset #000;'>FGM-A</th><th style='border: 1px inset #000;'>3PM-A</th><th style='border: 1px inset #000;'>FTM-A</th><th style='border: 1px inset #000;'>O-REB</th><th style='border: 1px inset #000;'>D-REB</th><th style='border: 1px inset #000;'>REB</th><th style='border: 1px inset #000;'>AST</th><th style='border: 1px inset #000;'>STL</th><th style='border: 1px inset #000;'>BLK</th><th style='border: 1px inset #000;'>TO</th><th style='border: 1px inset #000;'>PF</th><th style='border: 1px inset #000;'>STARTER</th></tr>

        ";
    echo "<tr style='border:1px inset #000;'>";
    //this loop is the golden ticket.... start of a nifty box score
    while ($count < $total) {

        $is_starter =($obj->home_stats[$count]->{'is_starter'});

        $player_name = ($obj->home_stats[$count]->{'first_name'}[0]).'. '.($obj->home_stats[$count]->{'last_name'});
        $minutes = ($obj->home_stats[$count]->{'minutes'});
        $points = ($obj->home_stats[$count]->{'points'});
        //$rebound_total = ($obj->home_stats[$count]->{'offensive_rebounds'})+($obj->home_stats[$count]->{'defensive_rebounds'});
        $fgm_a=($obj->home_stats[$count]->{'field_goals_made'})."-".($obj->home_stats[$count]->{'field_goals_attempted'});
        $tpm_a=($obj->home_stats[$count]->{'three_point_field_goals_made'})."-".($obj->home_stats[$count]->{'three_point_field_goals_attempted'});
        $ftm_a=($obj->home_stats[$count]->{'free_throws_made'})."-".($obj->home_stats[$count]->{'free_throws_attempted'});
        $o_reb=($obj->home_stats[$count]->{'offensive_rebounds'});
        $d_reb=($obj->home_stats[$count]->{'defensive_rebounds'});
        $assists=($obj->home_stats[$count]->{'assists'});
        $steals=($obj->home_stats[$count]->{'steals'});
        $blocks=($obj->home_stats[$count]->{'blocks'});
        $tovers=($obj->home_stats[$count]->{'turnovers'});
        $pf=($obj->home_stats[$count]->{'personal_fouls'});
        $starter=($obj->home_stats[$count]->{'is_starter'});

        $tfgm_a=$home_field_goals_made."-".$home_field_goals_attempted;
        $tptfgm_a=$home_three_point_field_goals_made.'-'.$home_three_point_field_goals_attempted;
        $tftm_a=$home_free_throws_made.'-'.$home_free_throws_attempted;
        $rebound_total = ($obj->home_stats[$count]->{'offensive_rebounds'})+($obj->home_stats[$count]->{'defensive_rebounds'});
        //"<tr style='border: 1px inset #000;'><td><input type='text' name='home_player$count' id='home_player$count' value='$player_name' style='width: 10em;' />"."</td><td style='border: 1px inset #000;'><input  id='home_minutes$count' type='text' style='width: 1.5em;' value='$minutes' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' value='$points' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 2em;' value='$fgm_a' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 2em;' value='$tpm_a' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 2em;' value='$ftm_a' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' value='$o_reb' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' value='$d_reb' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' value='$rebound_total' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' value='$assists' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' value='$steals' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' value='$blocks' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' value='$tovers' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' value='$pf' /></td>";
        echo"<tr style='border: 1px inset #000;'><td><input type='text' name='home_player$count' id='home_player$count' value='$player_name' style='width: 10em;'/>"."</td><td style='border: 1px inset #000;'><input  id='home_minutes$count' name='home_minutes$count' type='text' style='width: 1.5em;' value='$minutes' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='home_points$count' name='home_points$count' value='$points' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 2.7em;' id='home_fgma$count' name='home_fgma$count' value='$fgm_a' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 2em;' id='home_tpma$count' name='home_tpma$count' value='$tpm_a' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 2em;' id='home_ftma$count' name='home_ftma$count' value='$ftm_a' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='home_oreb$count' name='home_oreb$count' value='$o_reb' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='home_dreb$count' name='home_dreb$count' value='$d_reb' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='home_treb$count' name='home_treb$count' value='$rebound_total' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='home_assists$count' name='home_assists$count' value='$assists' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='home_steals$count' name='home_steals$count' value='$steals' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='home_blocks$count' name='home_blocks$count' value='$blocks' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='home_to$count' name='home_to$count' value='$tovers' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='home_pf$count' name='home_pf$count' value='$pf' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' value='$starter' id='home_starter$count' name='home_starter$count' /></td>";
        $count ++;
    }
    echo "</tr><tr style='border: 1px inset #000;'><td style='border: 1px inset #000;' colspan='2'>$home_team_last <br/>Home Totals</td><td style='border: 1px inset #000;' ><input type='text' style='width: 1.7em;' value='$home_totals' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 3em;' id='home_tfgma' name='home_tfgma' value='$tfgm_a' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 3em;' id='home_tptfgma' name='home_tptfgma' value='$tptfgm_a' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 3em;' id='home_tftma' name='home_tftma' value='$tftm_a' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 1.7em;' id='home_toreb' name='home_toreb' value='$home_offensive_rebounds' /></td><td style='border: 1px inset #000;' ><input type='text' id='home_tdreb' name='home_tdreb' style='width: 1.7em;' value='$home_defensive_rebounds' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 1.7em;' value='$home_total_rebounds' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 1.5em;' value='$home_assists' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 1.5em;' value='$home_steals' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 1.5em;' value='$home_blocks' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 1.5em;' value='$home_turnovers' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 1.5em;' value='$home_personal_fouls' /></td><td style='border: 1px inset #000;' ></tr>";
    echo "</table>";


    echo"<br/>
        <br/>
        <hr>";

    echo "<table style='border: 1px inset #000;'>
        <tr style='border: 1px inset #000;'><th style='border: 1px inset #000;' colspan='19'>$away_team - - $away_totals</th></tr>
        <tr style='border: 1px inset #000;'><th style='border: 1px inset #000;'>PLAYER</th><th style='border: 1px inset #000;'>MIN</th><th style='border: 1px inset #000;'>PTS</th><th style='border: 1px inset #000;'>FGM-A</th><th style='border: 1px inset #000;'>3PM-A</th><th style='border: 1px inset #000;'>FTM-A</th><th style='border: 1px inset #000;'>O-REB</th><th style='border: 1px inset #000;'>D-REB</th><th style='border: 1px inset #000;'>REB</th><th style='border: 1px inset #000;'>AST</th><th style='border: 1px inset #000;'>STL</th><th style='border: 1px inset #000;'>BLK</th><th style='border: 1px inset #000;'>TO</th><th style='border: 1px inset #000;'>PF</th><th style='border: 1px inset #000;'>STARTER</th></tr>

        ";
    $count=0;
    echo "<tr style='border:1px inset #000;'>";
    //this loop is the golden ticket.... start of a nifty box score
    while ($count < $total2) {

        //catch each piece for a brief instance and possible later to add to db
        $player_name = ($obj->away_stats[$count]->{'first_name'}[0]).'. '.($obj->away_stats[$count]->{'last_name'});
        $minutes = ($obj->away_stats[$count]->{'minutes'});
        $points = ($obj->away_stats[$count]->{'points'});
        $rebound_total = ($obj->away_stats[$count]->{'offensive_rebounds'})+($obj->away_stats[$count]->{'defensive_rebounds'});
        $fgm_a=($obj->away_stats[$count]->{'field_goals_made'})."-".($obj->away_stats[$count]->{'field_goals_attempted'});
        $tpm_a=($obj->away_stats[$count]->{'three_point_field_goals_made'})."-".($obj->away_stats[$count]->{'three_point_field_goals_attempted'});
        $ftm_a=($obj->away_stats[$count]->{'free_throws_made'})."-".($obj->away_stats[$count]->{'free_throws_attempted'});
        $o_reb=($obj->away_stats[$count]->{'offensive_rebounds'});
        $d_reb=($obj->away_stats[$count]->{'defensive_rebounds'});
        $assists=($obj->away_stats[$count]->{'assists'});
        $steals=($obj->away_stats[$count]->{'steals'});
        $blocks=($obj->away_stats[$count]->{'blocks'});
        $tovers=($obj->away_stats[$count]->{'turnovers'});
        $pf=($obj->away_stats[$count]->{'personal_fouls'});
        $starter=($obj->away_stats[$count]->{'is_starter'});

        $tfgm_a=$away_field_goals_made."-".$away_field_goals_attempted;
        $tptfgm_a=$away_three_point_field_goals_made.'-'.$away_three_point_field_goals_attempted;
        $tftm_a=$away_free_throws_made.'-'.$away_free_throws_attempted;

        //others already created:
        //  $away_offensive_rebounds
        // $away_defensive_rebounds
        // $away_total_rebounds
        // $away_total_assists
        // $away_personal_fouls
        // $away_steals
        // $away_blocks
        // $away_turnovers

        //stuff this stuff into an array and then retrieve it and put into similar structure from my own database so I don't use up the requests limitations of api!!!!

        echo"<tr style='border: 1px inset #000;'><td><input type='text' name='away_player$count' id='away_player$count' value='$player_name' style='width: 10em;' />"."</td><td style='border: 1px inset #000;'><input  id='away_minutes$count' name='away_minutes$count' type='text' style='width: 1.5em;' value='$minutes' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='away_points$count' name='away_points$count' value='$points' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 2.7em;' id='away_fgma$count' name='away_fgma$count' value='$fgm_a' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 2em;' id='away_tpma$count' name='away_tpma$count' value='$tpm_a' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 2em;' id='away_ftma$count' name='away_ftma$count' value='$ftm_a' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='away_oreb$count' name='away_oreb$count' value='$o_reb' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='away_dreb$count' name='away_dreb$count' value='$d_reb' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='away_treb$count' name='away_treb$count' value='$rebound_total' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='away_assists$count' name='away_assists$count' value='$assists' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='away_steals$count' name='away_steals$count' value='$steals' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='away_blocks$count' name='away_blocks$count' value='$blocks' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='away_to$count' name='away_to$count' value='$tovers' /></td>"."<td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' id='away_pf$count' name='away_pf$count' value='$pf' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 1.5em;' value='$starter' id='away_starter$count' name='away_starter$count' /></td>";
        $count ++;
    }
    echo "</tr><tr style='border: 1px inset #000;'><td style='border: 1px inset #000;' colspan='2'>$away_team_last <br/>Away Totals</td><td style='border: 1px inset #000;' ><input type='text' style='width: 1.7em;' value='$away_totals' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 3em;' id='away_tfgma' name='away_tfgma' value='$tfgm_a' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 3em;' id='away_tptfgma' name='away_tptfgma' value='$tptfgm_a' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 3em;' id='away_tftma' name='away_tftma' value='$tftm_a' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 1.7em;' id='away_toreb' name='away_toreb' value='$away_offensive_rebounds' /></td><td style='border: 1px inset #000;' ><input type='text' id='away_tdreb' name='away_tdreb' style='width: 1.7em;' value='$away_defensive_rebounds' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 1.7em;' value='$away_total_rebounds' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 1.5em;' value='$away_assists' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 1.5em;' value='$away_steals' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 1.5em;' value='$away_blocks' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 1.5em;' value='$away_turnovers' /></td><td style='border: 1px inset #000;' ><input type='text' style='width: 1.5em;' value='$away_personal_fouls' /></td></tr>";
    echo "</table>";

    //add the turnovers and personal fouls columns and then add names and ids and you're done mapping it all out buddy.  :D
    echo"<br/>
        <br/>
        <hr>
        <table>

        <tr style='border: 1px inset #000;'><th style='border: 1px inset #000;'>TEAM</th><th style='border: 1px inset #000;'>PTS</th><th style='border: 1px inset #000;'>FG%</th><th style='border: 1px inset #000;'>FT%</th><th style='border: 1px inset #000;'>3PT%</th><th style='border: 1px inset #000;'>REB</th><th>AST</th><th style='border: 1px inset #000;'>STL</th><th style='border: 1px inset #000;'>BLK</th><th style='border: 1px inset #000;'>TO</th><th style='border: 1px inset #000;'>PF</th></tr>
        <tr style='border: 1px inset #000;'><td style='border: 1px inset #000;' ><input type='text' name='away_nick' id='away_nick' style='width: 7em;' value='$away_team_last' /> </td><td style='border: 1px inset #000;'><input type='text' style='width: 1.7em;' value='$away_totals' /> </td><td style='border: 1px inset #000;'><input style='width: 2em;' name='away_fgp' id='away_fgp' type='text' value='$away_field_goal_percentage' /></td><td style='border: 1px inset #000;'><input style='width: 2em;' type='text' name='away_ftp' id='away_ftp' value='$away_free_throw_percentage' /></td><td style='border: 1px inset #000;'><input style='width: 2em;' name='away_3ptp' id='away_3ptp' type='text' value='$away_three_point_percentage' /> </td><td style='border: 1px inset #000;'><input name='away_treb' id='away_treb' style='width: 1.5em;' type='text' value='$away_total_rebounds' /></td><td style='border: 1px inset #000;'><input style='width: 1.5em;' type='text' name='away_tassists' id='away_tassists' value='$away_assists' /> </td><td style='border: 1px inset #000;'><input type='text' id='away_tsteals' name='away_tsteals' style='width: 1.5em;' value='$away_steals' /> </td><td style='border: 1px inset #000;'><input type='text' id='away_tblk' name='away_tblk' style='width: 1.5em;' value='$away_blocks' /></td><td style='border: 1px inset #000;'><input type='text' name='away_tto' id='away_tto' style='width: 1.5em;' value='$away_turnovers' /> </td><td style='border: 1px inset #000;'><input type='text' name='away_tpf' id='away_tpf' style='width: 1.5em;' value='$away_personal_fouls' /> </td></tr>
        <tr style='border: 1px inset #000;'><td style='border: 1px inset #000;'><input type='text' name='home_nick' id='home_nick' style='width: 7em;' value='$home_team_last' /> </td><td style='border: 1px inset #000;'><input type='text' style='width: 1.7em;' value='$home_totals' /> </td><td style='border: 1px inset #000;'><input style='width: 2em;' type='text' name='home_fgp' id='home_fgp' value='$home_field_goal_percentage' /></td><td style='border: 1px inset #000;'><input style='width: 2em;' name='home_ftp' id='home_ftp' type='text' value='$home_free_throw_percentage' /></td><td style='border: 1px inset #000;'><input style='width: 2em;' name='home_3ptp' id='home_3ptp' type='text' value='$home_three_point_percentage' /> </td><td style='border: 1px inset #000;'><input style='width: 1.5em;' name='home_treb' id='home_treb' type='text' value='$home_total_rebounds' /></td><td style='border: 1px inset #000;'><input style='width: 1.5em;' name='home_tassists' id='home_tassists' type='text' value='$home_assists' /> </td><td style='border: 1px inset #000;'><input type='text' name='home_tsteals' id='home_tsteals' style='width: 1.5em;' value='$home_steals' /> </td><td style='border: 1px inset #000;'><input type='text' name='home_tblk' id='home_tblk' style='width: 1.5em;' value='$home_blocks' /> </td><td style='border: 1px inset #000;'><input type='text' name='home_tto' id='home_tto' style='width: 1.5em;' value='$home_turnovers' /> </td><td style='border: 1px inset #000;'><input type='text' name='home_tpf' id='home_tpf' style='width: 1.5em;' value='$home_personal_fouls' /> </td></tr>
        </table>
        <br/>
        <table>
        <tr style='border: 1px inset #000;'><th style='border: 1px inset #000;'>TEAM</th><th style='border: 1px inset #000;'>Q1</th><th style='border: 1px inset #000;'>Q2</th><th style='border: 1px inset #000;'>Q3</th><th style='border: 1px inset #000;'>Q4</th><th style='border: 1px inset #000;'>OT1</th><th style='border: 1px inset #000;'>OT2</th><th style='border: 1px inset #000;'>OT3</th><th style='border: 1px inset #000;'>OT4</th><th style='border: 1px inset #000;'>OT5</th><th style='border: 1px inset #000;'>OT6</th><th style='border: 1px inset #000;'>T</th></tr>
        <tr style='border: 1px inset #000;'><td style='border: 1px inset #000;'><input type='text' name='away_abbrev' id='away_abbrev' style='width: 3em;' value='$away_abbrev' /></td><td style='border: 1px inset #000;'><input type='text' name='aq1' id='aq1' style='width: 1.5em;' value='$away_period_scores1' /></td><td style='border: 1px inset #000;'><input name='aq2' id='aq2' type='text' style='width: 1.5em;' value='$away_period_scores2' /></td><td style='border: 1px inset #000;'><input name='aq3' id='aq3' type='text' style='width: 1.5em;' value='$away_period_scores3' /></td><td style='border: 1px inset #000;'><input name='aq4' id='aq4' type='text' style='width: 1.5em;' value='$away_period_scores4' /></td><td><input name='aq5' id='aq5' type='text' style='width: 1.5em;' value='$away_period_scores5' /></td><td><input name='aq6' id='aq6' type='text' style='width: 1.5em;' value='$away_period_scores6' /></td><td><input name='aq7' id='aq7' type='text' style='width: 1.5em;' value='$away_period_scores7' /></td><td><input name='aq8' id='aq8' type='text' style='width: 1.5em;' value='$away_period_scores8' /></td><td><input name='aq9' id='aq9' type='text' style='width: 1.5em;' value='$away_period_scores9' /></td><td><input name='aq10' id='aq10' type='text' style='width: 1.5em;' value='$away_period_scores10' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 1.7em;' value='$away_totals' /></td></tr>
        <tr style='border: 1px inset #000;'><td style='border: 1px inset #000;'><input type='text' name='home_abbrev' id='home_abbrev' style='width: 3em;' value='$home_abbrev' /></td><td style='border: 1px inset #000;'><input name='hq1' id='hq1' type='text' style='width: 1.5em;' value='$home_period_scores1' /></td><td style='border: 1px inset #000;'><input name='hq2' id='hq2' type='text' style='width: 1.5em;' value='$home_period_scores2' /></td><td style='border: 1px inset #000;'><input name='hq3' id='hq3' type='text' style='width: 1.5em;' value='$home_period_scores3' /></td><td style='border: 1px inset #000;'><input name='hq4' id='hq4' type='text' style='width: 1.5em;' value='$home_period_scores4' /></td><td style='border: 1px inset #000;'><input name='hq5' id='hq5' type='text' style='width: 1.5em;' value='$home_period_scores5' /></td><td style='border: 1px inset #000;'><input name='hq6' id='hq6' type='text' style='width: 1.5em;' value='$home_period_scores6' /></td><td style='border: 1px inset #000;'><input name='hq7' id='hq7' type='text' style='width: 1.5em;' value='$home_period_scores7' /></td><td style='border: 1px inset #000;'><input name='hq8' id='hq8' type='text' style='width: 1.5em;' value='$home_period_scores8' /></td><td style='border: 1px inset #000;'><input name='hq9' id='hq9' type='text' style='width: 1.5em;' value='$home_period_scores9' /></td><td style='border: 1px inset #000;'><input name='hq10' id='hq10' type='text' style='width: 1.5em;' value='$home_period_scores10' /></td><td style='border: 1px inset #000;'><input type='text' style='width: 1.7em;' value='$home_totals' /></td></tr>
        </table>
        <br/>
        <br/>
        <br/>

        &nbsp;&nbsp;&nbsp;<input id='capture_stats' type='submit' name='submit' value='Capture'/>
        <br/>
        <br/>
        <br/>
        <br/>


        ";


    //assist turnover ratio!  add that in some day!

}




function main(){
    global $ACCESS_TOKEN, $USER_AGENT;

    // Set the API sport, method, id, format, and any parameters
    $host   = 'erikberg.com';
    $sport  = 'nba';
    $method = 'boxscore';
    $id     = '';
    $format = 'json';
    $parameters = array(
        // 'sport' => 'nba',
        // 'date'  => '20130414'
    );

    // Pass method, format, and parameters to build request url

    $url = buildURL($host, $sport, $method, $id, $format, $parameters);
    //$url = buildURL2($host, $sport, $method, $id, $home_away_yay, $parameters);

    // Set the User Agent, Authorization header and allow gzip
    $default_opts = array(
        'http' => array(
            'user_agent' => $USER_AGENT,
            'header'     => array(
                'Accept-Encoding: gzip',
                'Authorization: Bearer ' . $ACCESS_TOKEN
            )
        )
    );
    stream_context_get_default($default_opts);
    $file = 'compress.zlib://' . $url;
    $fh   = fopen($file, 'rb');
    if ($fh && strpos($http_response_header[0], "200 OK") !== false) {
        $content = stream_get_contents($fh);
        fclose($fh);
        printResult($content);
        //  $_SESSION['test2']=$content;
    } else {
        // handle error, check $http_response_header for HTTP status code, etc.
        if ($fh) {
            $xmlstats_error = json_decode(stream_get_contents($fh));
            printf("Server returned %s error along with this message:\n%s\n",
                $xmlstats_error->error->code,
                $xmlstats_error->error->description);
            print "No such game exists wise ass!\n";
        } else {
            print "No such game exists wise ass!\n";
            //  print_r(error_get_last());
        }
    }
}


function buildURL($host, $sport, $method, $id, $penny, $parameters)
{
    $coolio = trim($_POST['name']);
    $pen15=$coolio;
    $event_id=$pen15;
    $ary  = array($sport, $method, $id);
    $path = join('/', preg_grep('/^$/', $ary, PREG_GREP_INVERT));
    $url  = 'https://' . $host . '/' . $path  . '/'. $event_id . '.json';

   // $url = 'https://erikberg.com/'
    // Check for parameters and create parameter string
    if (!empty($parameters)) {
        $paramlist = array();
        foreach ($parameters as $key => $value) {
            array_push($paramlist, rawurlencode($key) . '=' . rawurlencode($value));
        }
        $paramstring = join('&', $paramlist);
        if (!empty($paramlist)) { $url .= '?' . $paramstring; }
    }
    return $url;
}



?>