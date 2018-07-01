@extends('layout')
@section('title', $team->team_json['full_name'].' Results')
@section('content')

    <div class="container">

<h1>{{$team->team_json['full_name']}} Results</h1>
@foreach($schedules as $schedule)

    <p>{{ gameDate($schedule->event_date)  }} </p>

    <p><a href="{{url('/boxscores/'.$schedule->event_id)}}"> {{$schedule->schedule_json['team']['full_name'] .' @ '. $schedule->schedule_json['opponent']['full_name'] }}</a></p>


    <hr/>

@endforeach


<div class="pagination"> {!! $schedules->render() !!} </div>

    </div>

@endsection