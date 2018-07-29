@if($ps_games_played == 0)

    <p>Sorry!  {{$display_name}} was on the roster but there are no postseason stats for him because he never actually played a game!</p>



@else


    <div class="container">

        <h3>Playoff Averages</h3>
        <table class="table table-sm" id="last_game_period_box">
            <tbody><tr><th>GP</th><th>GS</th><th>MIN</th><th>FGM-A</th><th>FG%</th><th>3PM-A</th><th>3PT%</th><th>FTM-A</th><th>FT%</th><th>OR</th><th>DR</th><th>REB</th><th>AST</th><th>BLK</th><th>STL</th><th>PF</th><th>TO</th><th>PTS</th></tr>
            <tr><td>{{$ps_games_played}}</td><td>{{$starter_count}}</td><td>{{$rs_mpg_avg}}</td><td>{{$rs_fgm_avg}}-{{$rs_fga_avg}}</td><td>{{$rs_fg_pct_avg}}</td><td>{{$rs_3ptm_avg}}-{{$rs_3pta_avg}}</td><td>{{$rs_3pt_pct_avg}}</td><td>{{$rs_ftm_avg}}-{{$rs_fta_avg}}</td><td>{{$rs_ft_pct_avg}}</td><td>{{$rs_o_reb_avg}}</td><td>{{$rs_d_reb_avg}}</td><td>{{$rs_reb_avg}}</td><td>{{$rs_ast_avg}}</td><td>{{$rs_blk_avg}}</td><td>{{$rs_stl_avg}}</td><td>{{$rs_pf_avg}}</td><td>{{$rs_to_avg}}</td><td>{{$rs_points_avg}}</td></tr>
            </tbody>
        </table>

        <br/>
        <h3>Playoff Totals</h3>
        <table class="table table-sm" id="last_game_period_box">
            <tbody><tr><th>FGM-A</th><th>FG%</th><th>3PM-A</th><th>3PT%</th><th>FTM-A</th><th>FT%</th><th>OR</th><th>DR</th><th>REB</th><th>AST</th><th>BLK</th><th>STL</th><th>PF</th><th>TO</th><th>PTS</th></tr>
            <tr><td>{{$field_goals_made}}-{{$field_goals_attempted}}</td><td>{{$rs_fg_pct_avg}}</td><td>{{$three_point_field_goals_made}}-{{$three_point_field_goals_attempted}}</td><td>{{$rs_3pt_pct_avg}}</td><td>{{$free_throws_made}}-{{$free_throws_attempted}}</td><td>{{$rs_ft_pct_avg}}</td><td>{{$total_o_rebounds}}</td><td>{{$total_d_rebounds}}</td><td>{{$total_rebounds}}</td><td>{{$total_assists}}</td><td>{{$total_blocks}}</td><td>{{$total_steals}}</td><td>{{$total_personal_fouls}}</td><td>{{$total_turnovers}}</td><td>{{$total_points}}</td></tr>
            </tbody>
        </table>


    </div>
    <br/>


@endif
