

    {{--{{$count}}: {{$team->team_json['team_id']}} | {{$team->team_json['abbreviation']}}  | {{$team->team_json['active']}}  |  {{$team->team_json['first_name']}}  |  {{$team->team_json['last_name']}}  |  {{$team->team_json['conference']}}  |  {{$team->team_json['division']}}  | {{$team->team_json['site_name']}}   |  {{$team->team_json['city']}}  |  {{$team->team_json['state']}}   |  {{$team->team_json['full_name']}}       <br/>--}}

    <p>{{' event_id: '.$boxscore->event_id}}</p>
    <div> {{$boxscore->boxscore_json['away_team']['full_name'].' '.$boxscore->boxscore_json['away_totals']['points']}}
        <br/>
        <p>at</p>
        {{$boxscore->boxscore_json['home_team']['full_name'].' '.$boxscore->boxscore_json['home_totals']['points']}}
        <br/>
        <br/>

        {{$boxscore->boxscore_json['event_information']['site']['name']}}
        <br/>
        <br/>
        {{gameDate($boxscore->boxscore_date)}}

    </div>


    {{--@foreach($roster->roster_json['players'] as $team)--}}

    {{--{{$team['first_name'] .' '.$team['last_name'].' | '. $team['display_name'] .' | Birthdate: '. $team['birthdate'] .' | Age: '. $team['age'] .' | Birthplace: '.  $team['birthplace'] .' | Height: '. $team['height_formatted'] .' | Weight: '. $team['weight_lb'] .' | Position: '. $team['position'] .' | Uniform #: '. $team['uniform_number'] }}<br/>--}}



    {{--@endforeach--}}





    <hr/>


