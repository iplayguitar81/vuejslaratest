

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








