
@if($games_played == 0)

    <p>Sorry!  {{$player_name}} was on the roster but there are no game stats for him because he never actually played a game!</p>

    @else

<p>{{$player_name}} Regular Season Stats:</p>

<hr/>

<p>Total Points:  {{$total_points}}</p>

<p>Points Per Game:  {{$rs_points_avg}}</p>

<p>Total Rebounds:  {{$total_rebounds}}</p>

<p>Total Blocks:  {{$total_blocks}}</p>

<p>Total Steals:  {{$total_steals}}</p>

<p>Total Assists:  {{$total_assists}}</p>


<p>Total Regular Season Games Played:  {{$games_played}}</p>



    @endif



