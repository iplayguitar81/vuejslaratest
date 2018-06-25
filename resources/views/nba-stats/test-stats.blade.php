<!DOCTYPE html>

<html>

<head>

    <title>Boxscore Laravel v 2.0</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    <!-- provide the csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script>
        $(document).ready(function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $(".postbutton").click(function(){
                $.ajax({
                    /* the route pointing to the post function */
                    url: '/postajax2',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, message:$(".getinfo").val()},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {


                         var boxString = JSON.stringify(data.boxscore);
                         var boxScore = (data.boxscore);
                         console.log(boxString);
                        $(".writeinfo").empty();
                        $.each(data.boxscore, function(i, obj){
//                            //do something

                        //console.log(data.boxscore['event_id']);
                           // console.log(event_id['event_id']);
                          //  $('.writeinfo').append(obj['team_id']+'<br/>');


//
                        });

                         // $(".writeinfo").empty();
                        //  $(".writeinfo").append("Away Team: "+boxScore['away_team']['team_id']);
                        //  $(".writeinfo").append("<br/>");

                        //  $(".writeinfo").append("Home Team: " +boxScore['home_team']['team_id']);


                    }
                });
            });
        });
    </script>


</head>

<body>

<input class="getinfo"></input>
<button class="postbutton">Switch API Data</button>
<div class="writeinfo"></div>


</body>



</html>