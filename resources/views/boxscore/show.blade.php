
<p>{{' event_id: '.$boxscore->event_id}}</p>
    <div>

        {{$boxscore->boxscore_json['away_team']['full_name'].' '.$boxscore->boxscore_json['away_totals']['points']}}
        <br/>
        <p>at</p>
        {{$boxscore->boxscore_json['home_team']['full_name'].' '.$boxscore->boxscore_json['home_totals']['points']}}
        <br/>
        <br/>

        {{$boxscore->boxscore_json['event_information']['site']['name']}}
        <br/>
        <br/>
        {{gameDate($boxscore->boxscore_date)}}
        <br/>
        <br/>

        <table id="last_game_period_box">
            <tbody><tr><th colspan="1"></th><th>1</th><th>2</th><th>3</th><th>4</th><th colspan="2">T</th></tr>
            <tr><td>{{$boxscore->boxscore_json['away_team']['abbreviation']}}</td><td>{{$boxscore->boxscore_json['away_period_scores'][0]}}</td><td>{{$boxscore->boxscore_json['away_period_scores'][1]}}</td><td>{{$boxscore->boxscore_json['away_period_scores'][2]}}</td><td>{{$boxscore->boxscore_json['away_period_scores'][3]}}</td><td>{{$boxscore->boxscore_json['away_totals']['points']}}</td></tr>
            <tr><td>{{$boxscore->boxscore_json['home_team']['abbreviation']}}</td><td>{{$boxscore->boxscore_json['home_period_scores'][0]}}</td><td>{{$boxscore->boxscore_json['home_period_scores'][1]}}</td><td>{{$boxscore->boxscore_json['home_period_scores'][2]}}</td><td>{{$boxscore->boxscore_json['home_period_scores'][3]}}</td><td>{{$boxscore->boxscore_json['home_totals']['points']}}</td></tr>
            </tbody>
        </table>

        <br/>
        <br/>
        <table id="boxscore_away">
            <tbody><tr style="border: 1px inset #000;"><th style="border: 1px inset #000;" colspan="19">{{$boxscore->boxscore_json['away_team']['full_name']}} <span class="digit_box_total">{{$boxscore->boxscore_json['away_totals']['points']}}</span></th></tr>
            <tr style="border: 1px inset #000;font-weight:800;"><td style="border: 1px inset #000;">PLAYER</td><td style="border: 1px inset #000;">MIN</td><td style="border: 1px inset #000;">PTS</td><td style="border: 1px inset #000;">FGM-A</td><td style="border: 1px inset #000;" class="hide_box_column">3PM-A</td><td style="border: 1px inset #000;">FTM-A</td><td style="border: 1px inset #000;" class="hide_box_column">O-REB</td><td style="border: 1px inset #000;" class="hide_box_column">D-REB</td><td style="border: 1px inset #000;">REB</td><td style="border: 1px inset #000;">AST</td><td style="border: 1px inset #000;" class="hide_box_column">STL</td><td style="border: 1px inset #000;" class="hide_box_column">BLK</td><td style="border: 1px inset #000;" class="hide_box_column">TO</td><td style="border: 1px inset #000;">PF</td><td style="border: 1px inset #000;" class="hide_this">STARTER</td></tr>

            @foreach($boxscore->boxscore_json['away_stats'] as $player)

                <tr style="border: 1px inset #000;"><td class="starter"> {{$player['display_name']}}</td><td class="starter" style="border: 1px inset #000;">{{$player['minutes']}}</td><td class="starter" style="border: 1px inset #000;">{{$player['points']}}</td><td class="starter" style="border: 1px inset #000;">{{$player['field_goals_made']}}-{{$player['field_goals_attempted']}}</td><td style="border: 1px inset #000;" class="starter hide_box_column">{{$player['three_point_field_goals_made']}}-{{$player['three_point_field_goals_attempted']}}</td><td class="starter" style="border: 1px inset #000;">{{$player['free_throws_made']}}-{{$player['free_throws_attempted']}}</td><td style="border: 1px inset #000;" class="starter hide_box_column">{{$player['offensive_rebounds']}}</td><td style="border: 1px inset #000;" class="starter hide_box_column">{{$player['defensive_rebounds']}}</td><td class="starter" style="border: 1px inset #000;">{{$player['rebounds']}}</td><td class="starter" style="border: 1px inset #000;">{{$player['assists']}}</td><td style="border: 1px inset #000;" class="starter hide_box_column">{{$player['steals']}}</td><td style="border: 1px inset #000;" class="starter hide_box_column">{{$player['blocks']}}</td><td style="border: 1px inset #000;" class="starter hide_box_column">{{$player['turnovers']}}</td><td class="starter" style="border: 1px inset #000;">{{$player['personal_fouls']}}</td></tr>

            @endforeach

            <tr style="border: 1px inset #000;font-weight:800;">
                <td style="border: 1px inset #000;" colspan="2">{{$boxscore->boxscore_json['away_team']['last_name']}} <br>Totals</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['away_totals']['points']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['away_totals']['field_goals_made']}}-{{$boxscore->boxscore_json['away_totals']['field_goals_attempted']}}</td><td style="border: 1px inset #000;" class="hide_box_column">{{$boxscore->boxscore_json['away_totals']['three_point_field_goals_made']}}-{{$boxscore->boxscore_json['away_totals']['three_point_field_goals_attempted']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['away_totals']['free_throws_made']}}-{{$boxscore->boxscore_json['away_totals']['free_throws_attempted']}}</td><td style="border: 1px inset #000;" class="hide_box_column">{{$boxscore->boxscore_json['away_totals']['offensive_rebounds']}}</td><td style="border: 1px inset #000;" class="hide_box_column">{{$boxscore->boxscore_json['away_totals']['defensive_rebounds']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['away_totals']['rebounds']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['away_totals']['assists']}}</td><td style="border: 1px inset #000;" class="hide_box_column">{{$boxscore->boxscore_json['away_totals']['steals']}}</td><td style="border: 1px inset #000;" class="hide_box_column">{{$boxscore->boxscore_json['away_totals']['blocks']}}</td><td style="border: 1px inset #000;" class="hide_box_column">{{$boxscore->boxscore_json['away_totals']['turnovers']}}</td><td colspan="2" style="border: 1px inset #000;">{{$boxscore->boxscore_json['away_totals']['personal_fouls']}}</td></tr>

            </tbody></table>

        <br/>
        <br/>
        <table id="boxscore_home">
            <tbody><tr style="border: 1px inset #000;"><th style="border: 1px inset #000;" colspan="19">{{$boxscore->boxscore_json['home_team']['full_name']}} <span class="digit_box_total">{{$boxscore->boxscore_json['home_totals']['points']}}</span></th></tr>
            <tr style="border: 1px inset #000;font-weight:800;"><td style="border: 1px inset #000;">PLAYER</td><td style="border: 1px inset #000;">MIN</td><td style="border: 1px inset #000;">PTS</td><td style="border: 1px inset #000;">FGM-A</td><td style="border: 1px inset #000;" class="hide_box_column">3PM-A</td><td style="border: 1px inset #000;">FTM-A</td><td style="border: 1px inset #000;" class="hide_box_column">O-REB</td><td style="border: 1px inset #000;" class="hide_box_column">D-REB</td><td style="border: 1px inset #000;">REB</td><td style="border: 1px inset #000;">AST</td><td style="border: 1px inset #000;" class="hide_box_column">STL</td><td style="border: 1px inset #000;" class="hide_box_column">BLK</td><td style="border: 1px inset #000;" class="hide_box_column">TO</td><td style="border: 1px inset #000;">PF</td><td style="border: 1px inset #000;" class="hide_this">STARTER</td></tr>

            @foreach($boxscore->boxscore_json['home_stats'] as $player)

                <tr style="border: 1px inset #000;"><td class="starter"> {{$player['display_name']}}</td><td class="starter" style="border: 1px inset #000;">{{$player['minutes']}}</td><td class="starter" style="border: 1px inset #000;">{{$player['points']}}</td><td class="starter" style="border: 1px inset #000;">{{$player['field_goals_made']}}-{{$player['field_goals_attempted']}}</td><td style="border: 1px inset #000;" class="starter hide_box_column">{{$player['three_point_field_goals_made']}}-{{$player['three_point_field_goals_attempted']}}</td><td class="starter" style="border: 1px inset #000;">{{$player['free_throws_made']}}-{{$player['free_throws_attempted']}}</td><td style="border: 1px inset #000;" class="starter hide_box_column">{{$player['offensive_rebounds']}}</td><td style="border: 1px inset #000;" class="starter hide_box_column">{{$player['defensive_rebounds']}}</td><td class="starter" style="border: 1px inset #000;">{{$player['rebounds']}}</td><td class="starter" style="border: 1px inset #000;">{{$player['assists']}}</td><td style="border: 1px inset #000;" class="starter hide_box_column">{{$player['steals']}}</td><td style="border: 1px inset #000;" class="starter hide_box_column">{{$player['blocks']}}</td><td style="border: 1px inset #000;" class="starter hide_box_column">{{$player['turnovers']}}</td><td class="starter" style="border: 1px inset #000;">{{$player['personal_fouls']}}</td></tr>

            @endforeach

            <tr style="border: 1px inset #000;font-weight:800;">
                <td style="border: 1px inset #000;" colspan="2">{{$boxscore->boxscore_json['home_team']['last_name']}} <br>Totals</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['home_totals']['points']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['home_totals']['field_goals_made']}}-{{$boxscore->boxscore_json['home_totals']['field_goals_attempted']}}</td><td style="border: 1px inset #000;" class="hide_box_column">{{$boxscore->boxscore_json['home_totals']['three_point_field_goals_made']}}-{{$boxscore->boxscore_json['home_totals']['three_point_field_goals_attempted']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['home_totals']['free_throws_made']}}-{{$boxscore->boxscore_json['home_totals']['free_throws_attempted']}}</td><td style="border: 1px inset #000;" class="hide_box_column">{{$boxscore->boxscore_json['home_totals']['offensive_rebounds']}}</td><td style="border: 1px inset #000;" class="hide_box_column">{{$boxscore->boxscore_json['home_totals']['defensive_rebounds']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['home_totals']['rebounds']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['home_totals']['assists']}}</td><td style="border: 1px inset #000;" class="hide_box_column">{{$boxscore->boxscore_json['home_totals']['steals']}}</td><td style="border: 1px inset #000;" class="hide_box_column">{{$boxscore->boxscore_json['home_totals']['blocks']}}</td><td style="border: 1px inset #000;" class="hide_box_column">{{$boxscore->boxscore_json['home_totals']['turnovers']}}</td><td colspan="2" style="border: 1px inset #000;">{{$boxscore->boxscore_json['home_totals']['personal_fouls']}}</td></tr>

            </tbody></table>
    <br/>
    <br/>


        <table id="box_team_total_percentages">
            <tbody><tr style="border: 1px inset #000;"><th colspan="11" style="border: 1px inset #000;">totals</th></tr>
            <tr style="border: 1px inset #000;font-weight:800;"><td style="border: 1px inset #000;"> </td><td style="border: 1px inset #000;">PTS</td><td style="border: 1px inset #000;">FG%</td><td style="border: 1px inset #000;">FT%</td><td style="border: 1px inset #000;">3PT%</td><td style="border: 1px inset #000;">REB</td><td style="border: 1px inset #000;">AST</td><td style="border: 1px inset #000;">STL</td><td style="border: 1px inset #000;">BLK</td><td style="border: 1px inset #000;">TO</td><td style="border: 1px inset #000;">PF</td></tr>
            <tr style="border: 1px inset #000;"><td style="border: 1px inset #000;font-weight:800;">{{$boxscore->boxscore_json['away_team']['last_name']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['away_totals']['points']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['away_totals']['field_goal_percentage_string']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['away_totals']['free_throw_percentage_string']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['away_totals']['three_point_field_goal_percentage_string']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['away_totals']['rebounds']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['away_totals']['assists']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['away_totals']['steals']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['away_totals']['blocks']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['away_totals']['turnovers']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['away_totals']['personal_fouls']}}</td></tr>
            <tr style="border: 1px inset #000;"><td style="border: 1px inset #000;font-weight:800;">{{$boxscore->boxscore_json['home_team']['last_name']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['home_totals']['points']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['home_totals']['field_goal_percentage_string']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['home_totals']['free_throw_percentage_string']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['home_totals']['three_point_field_goal_percentage_string']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['home_totals']['rebounds']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['home_totals']['assists']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['home_totals']['steals']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['home_totals']['blocks']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['home_totals']['turnovers']}}</td><td style="border: 1px inset #000;">{{$boxscore->boxscore_json['home_totals']['personal_fouls']}}</td></tr>
            </tbody></table>

    <br/>
    <br/>

        <p>Game Officials: </p>

        <ul>
            @foreach($boxscore->boxscore_json['officials'] as $refs)

            <li>{{$refs['first_name']}} {{$refs['last_name']}}</li>
            @endforeach
        </ul>

        @php
           $attendence_percentage = round(($boxscore->boxscore_json['event_information']['attendance']/ $boxscore->boxscore_json['event_information']['site']['capacity'] * 100), 2);
        @endphp

        <p>There were {{$boxscore->boxscore_json['event_information']['attendance']}} out of a possible {{$boxscore->boxscore_json['event_information']['site']['capacity']}} fans in attendace. This means that {{$boxscore->boxscore_json['event_information']['site']['name']}} was {{$attendence_percentage}}% filled to capacity.</p>

    </div>


<br/>
<br/>






