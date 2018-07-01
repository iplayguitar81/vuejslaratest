@extends('layout')
@section('title', 'Team: '.$team->team_json['full_name'])
@section('content')

<h1>{{$team->team_json['full_name']}}</h1>
<div>
    <p>City:  {{$team->team_json['city']}}</p>
    <p>State:  {{$team->team_json['state']}}</p>
    <p>team_id:  {{$team->team_json['team_id']}}</p>
    <p>Division:  {{$team->team_json['division']}}</p>
    <p>Team Name:  {{$team->team_json['full_name']}}</p>
    <p>Nickname:  {{$team->team_json['last_name']}}</p>
    <p>Arena:  {{$team->team_json['site_name']}}</p>
    <p>Conference:  {{$team->team_json['conference']}}</p>
    <p>Abbreviation:  {{$team->team_json['abbreviation']}}</p>

    <br/>


    <p><a href="{{url('/rosters/'.$team->team_id)}}">{{$team->team_json['full_name']}} Team Roster</a></p>


    <p><a href="{{url('/schedules/'.$team->team_id)}}">{{$team->team_json['full_name']}} Team Results</a></p>


    <br/>
    <br/>


</div>


@endsection