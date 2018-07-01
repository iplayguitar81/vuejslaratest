@extends('layout')
@section('title', 'NBA Teams')
@section('content')

    <div class="container">

<h1>NBA Teams</h1>
    @foreach($teams as $team)

        <a href="{{url('/teams/'.$team->team_json["team_id"])}}"> {{$team->team_json['full_name']}}</a>
        <br/>
        <br/>



    @endforeach

    </div>

@endsection