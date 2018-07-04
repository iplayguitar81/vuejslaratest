@extends('layout')
@section('title', 'NBA Teams')
@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="display-5 text-center">
              NBA Teams By Conference
            </h2>

        </div>
    </div>

    <div class="container">

        <h2 class="text-center">Western Conference</h2>
        <br/>

        <h3 class="text-center">Northwest Division</h3>
        <div class="row justify-content-center">

    @foreach($teams as $team)



            @if($team->team_json['division'] == "Northwest")

                {{--<a href="{{url('/teams/'.$team->team_json["team_id"])}}"> {{$team->team_json['full_name']}}</a>--}}

                    <div class="col-lg-2 col-sm-6 col-6">

                <div class="card" style="margin-bottom:.3em;">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{url('/teams/'.$team->team_json["team_id"])}}">{{$team->team_json['full_name']}}</a></h5>
                        <p><a href="{{url('/rosters/'.$team->team_id)}}">Team Roster</a></p>
                        <p><a href="{{url('/schedules/'.$team->team_id)}}">Team Results</a></p>
                    </div>
                </div>
                    </div>
            @endif



    @endforeach
        </div>
        <br/>
        <h3 class="text-center">Pacific Division</h3>

        <div class="row justify-content-center">


        @foreach($teams as $team)



            @if($team->team_json['division'] == "Pacific")

                {{--<a href="{{url('/teams/'.$team->team_json["team_id"])}}"> {{$team->team_json['full_name']}}</a>--}}

                <div class="col-lg-2 col-sm-6 col-6">

                    <div class="card" style="margin-bottom:.3em;">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{url('/teams/'.$team->team_json["team_id"])}}">{{$team->team_json['full_name']}}</a></h5>
                            <p><a href="{{url('/rosters/'.$team->team_id)}}">Team Roster</a></p>
                            <p><a href="{{url('/schedules/'.$team->team_id)}}">Team Results</a></p>
                        </div>
                    </div>
                </div>
            @endif



        @endforeach

        </div>
        <br/>
        <h3 class="text-center">Southwest Division</h3>

        <div class="row justify-content-center">


            @foreach($teams as $team)



                @if($team->team_json['division'] == "Southwest")

                    {{--<a href="{{url('/teams/'.$team->team_json["team_id"])}}"> {{$team->team_json['full_name']}}</a>--}}

                    <div class="col-lg-2 col-sm-6 col-6">

                        <div class="card" style="margin-bottom:.3em;">
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{url('/teams/'.$team->team_json["team_id"])}}">{{$team->team_json['full_name']}}</a></h5>
                                <p><a href="{{url('/rosters/'.$team->team_id)}}">Team Roster</a></p>
                                <p><a href="{{url('/schedules/'.$team->team_id)}}">Team Results</a></p>
                            </div>
                        </div>
                    </div>
                @endif



            @endforeach


        </div>

        <hr/>

        <h2 class="text-center">Eastern Conference</h2>
        <br/>
        <h3 class="text-center">Atlantic Division</h3>
        <div class="row justify-content-center">

            @foreach($teams as $team)



                @if($team->team_json['division'] == "Atlantic")

                    {{--<a href="{{url('/teams/'.$team->team_json["team_id"])}}"> {{$team->team_json['full_name']}}</a>--}}

                    <div class="col-lg-2 col-sm-6 col-6">

                        <div class="card" style="margin-bottom:.3em;">
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{url('/teams/'.$team->team_json["team_id"])}}">{{$team->team_json['full_name']}}</a></h5>
                                <p><a href="{{url('/rosters/'.$team->team_id)}}">Team Roster</a></p>
                                <p><a href="{{url('/schedules/'.$team->team_id)}}">Team Results</a></p>
                            </div>
                        </div>
                    </div>
                @endif



            @endforeach
        </div>
        <br/>
        <h3 class="text-center">Central Division</h3>

        <div class="row justify-content-center">


            @foreach($teams as $team)



                @if($team->team_json['division'] == "Central")

                    {{--<a href="{{url('/teams/'.$team->team_json["team_id"])}}"> {{$team->team_json['full_name']}}</a>--}}

                    <div class="col-lg-2 col-sm-6 col-6">

                        <div class="card" style="margin-bottom:.3em;">
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{url('/teams/'.$team->team_json["team_id"])}}">{{$team->team_json['full_name']}}</a></h5>
                                <p><a href="{{url('/rosters/'.$team->team_id)}}">Team Roster</a></p>
                                <p><a href="{{url('/schedules/'.$team->team_id)}}">Team Results</a></p>
                            </div>
                        </div>
                    </div>
                @endif



            @endforeach

        </div>


        <br/>
        <h3 class="text-center">Southeast Division</h3>

        <div class="row justify-content-center">


            @foreach($teams as $team)



                @if($team->team_json['division'] == "Southeast")

                    {{--<a href="{{url('/teams/'.$team->team_json["team_id"])}}"> {{$team->team_json['full_name']}}</a>--}}

                    <div class="col-lg-2 col-sm-6 col-6">

                        <div class="card" style="margin-bottom:.3em;">
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{url('/teams/'.$team->team_json["team_id"])}}">{{$team->team_json['full_name']}}</a></h5>
                                <p><a href="{{url('/rosters/'.$team->team_id)}}">Team Roster</a></p>
                                <p><a href="{{url('/schedules/'.$team->team_id)}}">Team Results</a></p>
                            </div>
                        </div>
                    </div>
                @endif



            @endforeach

        </div>




    </div>

@endsection