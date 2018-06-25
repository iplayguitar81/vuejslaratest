@php
    $count = 1;
@endphp

@foreach($rosters as $roster)

    {{--{{$count}}: {{$team->team_json['team_id']}} | {{$team->team_json['abbreviation']}}  | {{$team->team_json['active']}}  |  {{$team->team_json['first_name']}}  |  {{$team->team_json['last_name']}}  |  {{$team->team_json['conference']}}  |  {{$team->team_json['division']}}  | {{$team->team_json['site_name']}}   |  {{$team->team_json['city']}}  |  {{$team->team_json['state']}}   |  {{$team->team_json['full_name']}}       <br/>--}}

    <p>{{$count}}:  {{$roster->roster_json['team']['full_name']}} Roster:</p>



    @foreach($roster->roster_json['players'] as $team)

        {{$team['first_name'] .' '.$team['last_name'].' | '. $team['display_name'] .' | Birthdate: '. $team['birthdate'] .' | Age: '. $team['age'] .' | Birthplace: '.  $team['birthplace'] .' | Height: '. $team['height_formatted'] .' | Weight: '. $team['weight_lb'] .' | Position: '. $team['position'] .' | Uniform #: '. $team['uniform_number'] }}<br/>



        @endforeach




    @php
        $count++;
    @endphp

    <hr/>

@endforeach

