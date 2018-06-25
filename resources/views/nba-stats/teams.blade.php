@php
$count = 1;
@endphp

    @foreach($teams as $team)

        {{$count}}: {{$team->team_json['team_id']}} | {{$team->team_json['abbreviation']}}  | {{$team->team_json['active']}}  |  {{$team->team_json['first_name']}}  |  {{$team->team_json['last_name']}}  |  {{$team->team_json['conference']}}  |  {{$team->team_json['division']}}  | {{$team->team_json['site_name']}}   |  {{$team->team_json['city']}}  |  {{$team->team_json['state']}}   |  {{$team->team_json['full_name']}}       <br/>
       @php
       $count++;
       @endphp


    @endforeach