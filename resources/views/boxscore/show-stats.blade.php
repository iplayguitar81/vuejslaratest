

@php
    $total_points = 0;
@endphp

@foreach($player as $play)
{{--{{((json_encode($play['boxscore_json']['away_stats'], true)))}}--}}

@foreach($play['boxscore_json']['away_stats'] as $regis)


    @if($regis['display_name'] =='LeBron James')

    @php
    $total_points+=$regis['points']
    @endphp

    @endif


    @endforeach

{{--{{$play['display_name']}}--}}

@php
//$regis = json_decode($play['boxscore_json']['away_stats'],true);
@endphp

    {{--@foreach( $regis as $playa))--}}

        {{--{{$playa['display_name']}}--}}

    {{----}}

        {{--@endforeach--}}

@endforeach


{{$total_points}}
{{--{{$team->team_json['city']}}--}}


{{--{{$team->team_json['city']}}--}}


<br/>
{{gettype($team)}}
