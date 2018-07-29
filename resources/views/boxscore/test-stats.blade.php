@extends('layout')
@section('title', $data['player_name'].' Statistics')
@section('content')


    @php
        $replace_dash = str_replace('-', '_', $data['player_name']);
        $player_slug = str_replace(' ', '-', $replace_dash);
        $player_slug = strtolower($player_slug);
    @endphp

    {!! showRegularSeasonStats($player_slug) !!}


    {!! showPlayoffStats($player_slug) !!}


@endsection
