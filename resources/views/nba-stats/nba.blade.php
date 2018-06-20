<!DOCTYPE html>

<html>

<head>

    <title>Boxscore Laravel v 2.0</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



</head>

<body>

<div class="container">

    <h1>Laravel 5.5 Ajax Request example</h1>


    <ul>
        {{--@foreach($errors->all() as $error)--}}
            {{--<div class="alert alert-primary">--}}
                {{--<li>{{ $error }}</li>--}}
            {{--</div>--}}
        {{--@endforeach--}}
    </ul>
    <form action="/ajax" method="GET">

        <div class="form-group">

            <label>Game String</label>

            <input type="text" name="gameString" class="form-control" placeholder="Game String" required="">

        </div>


        <div class="form-group">

            <button class="btn btn-success btn-submit">Submit</button>

        </div>

    </form>

</div>
<hr/>

<br/>
<br/>
<hr/>
<div class="text-center">
<textarea rows="4" cols="75" id="json_data">


</textarea>
</div>

<br/>
<br/>




</body>

<script type="text/javascript">


//    $(document).ready(function(){
//        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
//        $(".postbutton").click(function(){
//            $.ajax({
//                /* the route pointing to the post function */
//                url: '/nba',
//                type: 'POST',
//                /* send the csrf-token and the input to the controller */
//                data: {_token: CSRF_TOKEN, message:$(".getinfo").val()},
//                dataType: 'JSON',
//                /* remind that 'data' is the response of the AjaxController */
//                success: function (data) {
//                    $(".writeinfo").append(data.msg);
//                }
//            });
//        });
//    });
//
//
//
//
//
//    //    $.ajaxSetup({
////
////        headers: {
////
////            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
////
////        }
////
////    });
//
//
//
//    $(".btn-submit").click(function(e){
//
//        e.preventDefault();
//
//
//
//        var gameString = $("input[name=gameString]").val();
//
//
//
//
//
//        $.ajax({
//
//            type:'GET',
//
//            url:'/nba',
//
//         data:{gameString:gameString}
//
////            success:function(data){
//////
//               // alert(data.success);
//
//   //           $("#json_data").text(data.success);
//              //  $("#json_data").show();
//  //          }
//
//
//     });

       // $("#json_data").show();

    });
//
//    $(document).ready(function() {
//
//       // $("#json_data").hide();
//
//
//    });

</script>

</html>