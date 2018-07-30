@extends('layout')
@section('title', $team->team_json['full_name'].' Results')
@section('content')

    <div class="container">

<h1>{{$team->team_json['full_name']}} Results</h1>
@foreach($schedules as $schedule)

    <p>{{ gameDate($schedule->event_date)  }} </p>

@if($schedule->schedule_json['team_event_location_type'] == 'h')

    <p><a href=" {{url('/boxscores/'.$schedule->event_id)}}"> {{$schedule->schedule_json['opponent']['full_name'].' '. $schedule->schedule_json['opponent_points_scored'].' @ '.$schedule->schedule_json['team']['full_name'].' '. $schedule->schedule_json['team_points_scored']}}</a> </p>

    @else

    <p><a href="{{url('/boxscores/'.$schedule->event_id)}}"> {{$schedule->schedule_json['team']['full_name'].' '. $schedule->schedule_json['team_points_scored']  .' @ '. $schedule->schedule_json['opponent']['full_name'].' '. $schedule->schedule_json['opponent_points_scored']}} </a></p>


    @endif



        <p><b>{{$team->team_json['last_name'].' '. $schedule->schedule_json['team_event_result']}}</b></p>

    <hr/>

@endforeach


<div class="pagination"> {!! $schedules->render() !!} </div>

    </div>

@endsection