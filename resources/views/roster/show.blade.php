@extends('layout')
@section('title', $roster->team_id.' Roster')
@section('content')

    <div class="container">
@foreach($roster->roster_json['players'] as $team)

    @php

    $replace_dash = str_replace('-', '_', $team['display_name']);

     $player_slug = str_replace(' ', '-', $replace_dash);
    @endphp

            <a href="{{url('boxscores/player/'.$player_slug)}}">{{ $team['display_name']}}</a> {{' | Birthdate: '. $team['birthdate'] .' | Age: '. $team['age'] .' | Birthplace: '.  $team['birthplace'] .' | Height: '. $team['height_formatted'] .' | Weight: '. $team['weight_lb'] .' | Position: '. $team['position'] .' | Uniform #: '. $team['uniform_number'] }}
    <br/>
    <br/>



@endforeach

    </div>
@endsection
