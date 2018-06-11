
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

@extends('layouts.app')

@php


    $message="";
    $db = new mysqli('stats.trailblazersfans.com', 'theglide','Drexler22','boxscores');

    if ($db->connect_error){
        $message = $db->connect_error;
    }


        //we can do it like the check engine ajax style here in theory.  this should be pretty slick

        if (isset($_POST['name']) === true && empty($_POST['name']) === false) {

            $ACCESS_TOKEN = '0ef7bc26-d2c2-4821-8d26-2804598c50c9';

        // Replace with your bot name and email/website to contact if there is a problem
        // e.g., "mybot/0.1 (https://erikberg.com/)"
            $USER_AGENT = 'trailblazersfans/0.1 (trailblazersfans.com)';

        // set time zone to use for output
            $TIME_ZONE = 'America/New_York';

        // PHP complains if time zone is not set
            date_default_timezone_set($TIME_ZONE);

 main();

        }




    session_start();

    #require 'template/dbconnecty2.php';

    //$headline=$_POST['headline'];


    //home and away player names




    //submit button of capture button

  //  $submit=$_POST['submit'];


   # if($submit) {

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   //'$away_tfgma','$away_tftma','$away_tptfgma','$home_tfgma','$home_tftma','$home_tptfgma' //$home_tto,$home_tpf,$awaytto,$away_tpf

   #     $sql= "INSERT INTO boxer2 (id,game_string,datey,dashy_date, afname, hfname, atotal, htotal, arena, capacity, attendance, ref1, ref2, ref3, hp1_name, hp1_min, hp1_pts, hp1_fgma, hp1_3pma, hp1_ftma, hp1_oreb, hp1_dreb, hp1_reb, hp1_ast, hp1_stl, hp1_blk, hp1_to, hp1_pf, hp1_starter, hp2_name, hp2_min, hp2_pts, hp2_fgma, hp2_3pma, hp2_ftma, hp2_oreb, hp2_dreb, hp2_reb, hp2_ast, hp2_stl, hp2_blk, hp2_to, hp2_pf, hp2_starter, hp3_name, hp3_min, hp3_pts, hp3_fgma, hp3_3pma, hp3_ftma, hp3_oreb, hp3_dreb, hp3_reb, hp3_ast, hp3_stl, hp3_blk, hp3_to, hp3_pf, hp3_starter, hp4_name, hp4_min, hp4_pts, hp4_fgma, hp4_3pma, hp4_ftma, hp4_oreb, hp4_dreb, hp4_reb, hp4_ast, hp4_stl, hp4_blk, hp4_to, hp4_pf, hp4_starter, hp5_name, hp5_min, hp5_pts, hp5_fgma, hp5_3pma, hp5_ftma, hp5_oreb, hp5_dreb, hp5_reb, hp5_ast, hp5_stl, hp5_blk, hp5_to, hp5_pf, hp5_starter, hp6_name, hp6_min, hp6_pts, hp6_fgma, hp6_3pma, hp6_ftma, hp6_oreb, hp6_dreb, hp6_reb, hp6_ast, hp6_stl, hp6_blk, hp6_to, hp6_pf, hp6_starter, hp7_name, hp7_min, hp7_pts, hp7_fgma, hp7_3pma, hp7_ftma, hp7_oreb, hp7_dreb, hp7_reb, hp7_ast, hp7_stl, hp7_blk, hp7_to, hp7_pf, hp7_starter, hp8_name, hp8_min, hp8_pts, hp8_fgma, hp8_3pma, hp8_ftma, hp8_oreb, hp8_dreb, hp8_reb, hp8_ast, hp8_stl, hp8_blk, hp8_to, hp8_pf, hp8_starter, hp9_name, hp9_min, hp9_pts, hp9_fgma, hp9_3pma, hp9_ftma, hp9_oreb, hp9_dreb, hp9_reb, hp9_ast, hp9_stl, hp9_blk, hp9_to, hp9_pf, hp9_starter, hp10_name, hp10_min, hp10_pts, hp10_fgma, hp10_3pma, hp10_ftma, hp10_oreb, hp10_dreb, hp10_reb, hp10_ast, hp10_stl, hp10_blk, hp10_to, hp10_pf, hp10_starter, hp11_name, hp11_min, hp11_pts, hp11_fgma, hp11_3pma, hp11_ftma, hp11_oreb, hp11_dreb, hp11_reb, hp11_ast, hp11_stl, hp11_blk, hp11_to, hp11_pf, hp11_starter, hp12_name, hp12_min, hp12_pts, hp12_fgma, hp12_3pma, hp12_ftma, hp12_oreb, hp12_dreb, hp12_reb, hp12_ast, hp12_stl, hp12_blk, hp12_to, hp12_pf, hp12_starter, hp13_name, hp13_min, hp13_pts, hp13_fgma, hp13_3pma, hp13_ftma, hp13_oreb, hp13_dreb, hp13_reb, hp13_ast, hp13_stl, hp13_blk, hp13_to, hp13_pf, hp13_starter, ap1_name, ap1_min, ap1_pts, ap1_fgma, ap1_3pma, ap1_ftma, ap1_oreb, ap1_dreb, ap1_reb, ap1_ast, ap1_stl, ap1_blk, ap1_to, ap1_pf, ap1_starter, ap2_name, ap2_min, ap2_pts, ap2_fgma, ap2_3pma, ap2_ftma, ap2_oreb, ap2_dreb, ap2_reb, ap2_ast, ap2_stl, ap2_blk, ap2_to, ap2_pf, ap2_starter, ap3_name, ap3_min, ap3_pts, ap3_fgma, ap3_3pma, ap3_ftma, ap3_oreb, ap3_dreb, ap3_reb, ap3_ast,ap3_stl, ap3_blk, ap3_to, ap3_pf, ap3_starter, ap4_name, ap4_min, ap4_pts, ap4_fgma, ap4_3pma, ap4_ftma, ap4_oreb, ap4_dreb, ap4_reb, ap4_ast,ap4_stl, ap4_blk, ap4_to, ap4_pf, ap4_starter, ap5_name, ap5_min, ap5_pts, ap5_fgma, ap5_3pma, ap5_ftma, ap5_oreb, ap5_dreb, ap5_reb, ap5_ast, ap5_stl, ap5_blk, ap5_to, ap5_pf, ap5_starter, ap6_name, ap6_min, ap6_pts, ap6_fgma, ap6_3pma, ap6_ftma, ap6_oreb, ap6_dreb, ap6_reb, ap6_ast, ap6_stl, ap6_blk, ap6_to, ap6_pf, ap6_starter, ap7_name, ap7_min, ap7_pts, ap7_fgma, ap7_3pma, ap7_ftma, ap7_oreb, ap7_dreb, ap7_reb, ap7_ast, ap7_stl, ap7_blk, ap7_to, ap7_pf, ap7_starter, ap8_name, ap8_min, ap8_pts, ap8_fgma, ap8_3pma, ap8_ftma, ap8_oreb, ap8_dreb, ap8_reb, ap8_ast, ap8_stl, ap8_blk, ap8_to, ap8_pf, ap8_starter, ap9_name, ap9_min, ap9_pts, ap9_fgma, ap9_3pma, ap9_ftma, ap9_oreb, ap9_dreb, ap9_reb, ap9_ast, ap9_stl, ap9_blk, ap9_to, ap9_pf, ap9_starter, ap10_name, ap10_min, ap10_pts, ap10_fgma, ap10_3pma, ap10_ftma, ap10_oreb, ap10_dreb, ap10_reb, ap10_ast, ap10_stl, ap10_blk, ap10_to, ap10_pf, ap10_starter, ap11_name, ap11_min, ap11_pts, ap11_fgma, ap11_3pma, ap11_ftma, ap11_oreb, ap11_dreb, ap11_reb, ap11_ast, ap11_stl, ap11_blk, ap11_to, ap11_pf, ap11_starter, ap12_name, ap12_min, ap12_pts, ap12_fgma, ap12_3pma, ap12_ftma, ap12_oreb, ap12_dreb, ap12_reb, ap12_ast, ap12_stl, ap12_blk, ap12_to, ap12_pf, ap12_starter, ap13_name, ap13_min, ap13_pts, ap13_fgma, ap13_3pma, ap13_ftma, ap13_oreb, ap13_dreb, ap13_reb, ap13_ast, ap13_stl, ap13_blk, ap13_to, ap13_pf, ap13_starter, h_nick, a_nick, h_initials, a_initials, aq1, aq2, aq3, aq4, aq5, aq6, aq7, aq8, aq9, aq10, hq1, hq2, hq3, hq4, hq5, hq6, hq7, hq8, hq9, hq10, afgp, aftp, a3ptp, arebt, aastt, astlt, ablkt, hfgp, hftp, h3ptp, hrebt, hastt, hstlt, hblkt,awaytfgma,awaytftma,awayt3fgma,hometfgma,hometftma,homet3fgma,hometoreb,hometdreb,awaytoreb,awaytdreb,hometto,hometpf,awaytto,awaytpf) VALUES (NULL,'$game_string','$start_date_time','$date_dashy','$away_team','$home_team','$away_total','$home_total','$arena','$capacity','$attendance','$ref1','$ref2','$ref3','$home_player0','$home_minutes0','$home_points0','$home_fgma0','$home_tpma0','$home_ftma0','$home_oreb0','$home_dreb0','$home_treb0','$home_assists0','$home_steals0','$home_blocks0','$home_to0','$home_pf0', '$home_starter0', '$home_player1','$home_minutes1','$home_points1','$home_fgma1','$home_tpma1','$home_ftma1','$home_oreb1','$home_dreb1','$home_treb1','$home_assists1','$home_steals1','$home_blocks1','$home_to1','$home_pf1', '$home_starter1','$home_player2','$home_minutes2','$home_points2','$home_fgma2','$home_tpma2','$home_ftma2','$home_oreb2','$home_dreb2','$home_treb2','$home_assists2','$home_steals2','$home_blocks2','$home_to2','$home_pf2', '$home_starter2', '$home_player3','$home_minutes3','$home_points3','$home_fgma3','$home_tpma3','$home_ftma3','$home_oreb3','$home_dreb3','$home_treb3','$home_assists3','$home_steals3','$home_blocks3','$home_to3','$home_pf3', '$home_starter3', '$home_player4','$home_minutes4','$home_points4','$home_fgma4','$home_tpma4','$home_ftma4','$home_oreb4','$home_dreb4','$home_treb4','$home_assists4','$home_steals4','$home_blocks4','$home_to4','$home_pf4', '$home_starter4','$home_player5','$home_minutes5','$home_points5','$home_fgma5','$home_tpma5','$home_ftma5','$home_oreb5','$home_dreb5','$home_treb5','$home_assists5','$home_steals5','$home_blocks5','$home_to5','$home_pf5', '$home_starter5', '$home_player6','$home_minutes6','$home_points6','$home_fgma6','$home_tpma6','$home_ftma6','$home_oreb6','$home_dreb6','$home_treb6','$home_assists6','$home_steals6','$home_blocks6','$home_to6','$home_pf6', '$home_starter6', '$home_player7','$home_minutes7','$home_points7','$home_fgma7','$home_tpma7','$home_ftma7','$home_oreb7','$home_dreb7','$home_treb7','$home_assists7','$home_steals7','$home_blocks7','$home_to7','$home_pf7', '$home_starter7', '$home_player8','$home_minutes8','$home_points8','$home_fgma8','$home_tpma8','$home_ftma8','$home_oreb8','$home_dreb8','$home_treb8','$home_assists8','$home_steals8','$home_blocks8','$home_to8','$home_pf8', '$home_starter8', '$home_player9','$home_minutes9','$home_points9','$home_fgma9','$home_tpma9','$home_ftma9','$home_oreb9','$home_dreb9','$home_treb9','$home_assists9','$home_steals9','$home_blocks9','$home_to9','$home_pf9', '$home_starter9','$home_player10','$home_minutes10','$home_points10','$home_fgma10','$home_tpma10','$home_ftma10','$home_oreb10','$home_dreb10','$home_treb10','$home_assists10','$home_steals10','$home_blocks10','$home_to10','$home_pf10', '$home_starter10','$home_player11','$home_minutes11','$home_points11','$home_fgma11','$home_tpma11','$home_ftma11','$home_oreb11','$home_dreb11','$home_treb11','$home_assists11','$home_steals11','$home_blocks11','$home_to11', '$home_pf11', '$home_starter11', '$home_player12','$home_minutes12','$home_points12','$home_fgma12','$home_tpma12','$home_ftma12','$home_oreb12','$home_dreb12','$home_treb12','$home_assists12','$home_steals12','$home_blocks12','$home_to12','$home_pf12', '$home_starter12', '$away_player0','$away_minutes0','$away_points0','$away_fgma0','$away_tpma0','$away_ftma0','$away_oreb0','$away_dreb0','$away_treb0','$away_assists0','$away_steals0','$away_blocks0','$away_to0','$away_pf0', '$away_starter0', '$away_player1','$away_minutes1','$away_points1','$away_fgma1','$away_tpma1','$away_ftma1','$away_oreb1','$away_dreb1','$away_treb1','$away_assists1','$away_steals1','$away_blocks1','$away_to1', '$away_pf1', '$away_starter1', '$away_player2','$away_minutes2','$away_points2','$away_fgma2','$away_tpma2','$away_ftma2','$away_oreb2','$away_dreb2','$away_treb2','$away_assists2','$away_steals2','$away_blocks2','$away_to2','$away_pf2', '$away_starter2', '$away_player3','$away_minutes3','$away_points3','$away_fgma3','$away_tpma3','$away_ftma3','$away_oreb3','$away_dreb3','$away_treb3','$away_assists3','$away_steals3','$away_blocks3','$away_to3','$away_pf3', '$away_starter3', '$away_player4','$away_minutes4','$away_points4','$away_fgma4','$away_tpma4','$away_ftma4','$away_oreb4','$away_dreb4','$away_treb4','$away_assists4','$away_steals4','$away_blocks4','$away_to4','$away_pf4', '$away_starter4', '$away_player5','$away_minutes5','$away_points5','$away_fgma5','$away_tpma5','$away_ftma5','$away_oreb5','$away_dreb5','$away_treb5','$away_assists5','$away_steals5','$away_blocks5','$away_to5','$away_pf5', '$away_starter5', '$away_player6','$away_minutes6','$away_points6','$away_fgma6','$away_tpma6','$away_ftma6','$away_oreb6','$away_dreb6','$away_treb6','$away_assists6','$away_steals6','$away_blocks6','$away_to6','$away_pf6', '$away_starter6', '$away_player7','$away_minutes7','$away_points7','$away_fgma7','$away_tpma7','$away_ftma7','$away_oreb7','$away_dreb7','$away_treb7','$away_assists7','$away_steals7','$away_blocks7','$away_to7','$away_pf7', '$away_starter7', '$away_player8','$away_minutes8','$away_points8','$away_fgma8','$away_tpma8','$away_ftma8','$away_oreb8','$away_dreb8','$away_treb8','$away_assists8','$away_steals8','$away_blocks8','$away_to8','$away_pf8', '$away_starter8', '$away_player9','$away_minutes9','$away_points9','$away_fgma9','$away_tpma9','$away_ftma9','$away_oreb9','$away_dreb9','$away_treb9','$away_assists9','$away_steals9','$away_blocks9','$away_to9','$away_pf9', '$away_starter9', '$away_player10','$away_minutes10','$away_points10','$away_fgma10','$away_tpma10','$away_ftma10','$away_oreb10','$away_dreb10','$away_treb10','$away_assists10','$away_steals10','$away_blocks10','$away_to10','$away_pf10', '$away_starter10', '$away_player11','$away_minutes11','$away_points11','$away_fgma11','$away_tpma11','$away_ftma11','$away_oreb11','$away_dreb11','$away_treb11','$away_assists11','$away_steals11','$away_blocks11','$away_to11','$away_pf11', '$away_starter11', '$away_player12','$away_minutes12','$away_points12','$away_fgma12','$away_tpma12','$away_ftma12','$away_oreb12','$away_dreb12','$away_treb12','$away_assists12','$away_steals12','$away_blocks12','$away_to12','$away_pf12', '$away_starter12', '$home_nick','$away_nick','$home_abbrev','$away_abbrev','$aq1','$aq2','$aq3','$aq4','$aq5','$aq6','$aq7','$aq8','$aq9','$aq10','$hq1','$hq2','$hq3','$hq4','$hq5','$hq6','$hq7','$hq8','$hq9','$hq10','$away_fgp', '$away_ftp','$away_3ptp','$away_treb','$away_tassists','$away_tsteals','$away_tblk','$home_fgp','$home_ftp','$home_3ptp','$home_treb','$home_tassists','$home_tsteals','$home_tblk','$away_tfgma','$away_tftma','$away_tptfgma','$home_tfgma','$home_tftma','$home_tptfgma','$home_toreb','$home_tdreb','$away_toreb', '$away_tdreb', '$home_tto', '$home_tpf', '$away_tto', '$away_tpf' );";

  #      $result = $db->query($sql);       // use query method to query sql variable
 #       if ($db->error){                                    //this will give us error message
#            $message = $db-> error;

      #      echo "<script>alert($message);</script>";
      #  }

     #   mysqli_close($db);
     #   ob_clean();

    #    header("Location: testins2.php");
  #  }

    #require 'template/head.php';
    #require 'template/header.php';






@endphp

<script>
    function coolMan(){
        var name = document.getElementById("game_string").value;
        // var name = $('input#name').val();
        if($.trim(name) != '') {
            $.post('nba', {name: name}, function(data2) {
                $('div.ajax_game').html(data2);
                $('div.ajax_game').trigger('create');
            });
        }

        else {
            $('div.name-data').html('<h3 id="result_header" class="ui-bar ui-bar-c">Game Not Found!</h3>');
        }
        //remove this to go back to manual style
        //$("#reset_box").show();

        //uncomment this if you go back to manual style
        //   $("#get_box").hide();

        $("#capture_stats").show();

    }


    $(function() {
        $( "#datepicker" ).datepicker();
    });

    function resetBox() {
        //uncomment this line out if you need to go back to manual style
        //$("#box_it").show();
        $("#capture_stats").hide();
        $("#json_addy").hide();
        $("#box_it2").hide();
        $("#reset_box").hide();
        $("#get_box").hide();
        $('div.ajax_game').html("");
        document.getElementById("game_string").value="";
        document.getElementById("datepicker").value="";
        document.getElementById("game_construct").value="SELECT GAME TO CONSTRUCT BELOW";
    }

    function timSucks() {

        var selectBox = document.getElementById("game_construct");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        var last10=selectedValue.substring(selectedValue.length - 11, selectedValue.length);
        var date = last10.trim();


        if(selectedValue[9]=="@"){

            var opponentValue = document.getElementById("opponent");

            //var team=selectedValue.substring(selectedValue[9], selectedValue[25]);
            var pre_team=selectedValue.substring(selectedValue[0], selectedValue.length-10);
            var prep_foe =pre_team.substr(11, pre_team.length);
            var foe=prep_foe.trim();
            var length_foe=foe.length;

            if (foe =="Atlanta"){

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="atlanta-hawks";
                document.getElementById("home-away").value="Away";

            }

            else if (foe =="Boston") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="boston-celtics";
                document.getElementById("home-away").value="Away";
            }

            else if (foe =="Brooklyn") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="brooklyn-nets";
                document.getElementById("home-away").value="Away";
            }

            else if (foe =="Charlotte") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="charlotte-hornets";
                document.getElementById("home-away").value="Away";
            }
            else if (foe =="Chicago") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="chicago-bulls";
                document.getElementById("home-away").value="Away";
            }
            else if (foe =="Cleveland") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="cleveland-cavaliers";
                document.getElementById("home-away").value="Away";
            }
            else if (foe =="Dallas") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="dallas-mavericks";
                document.getElementById("home-away").value="Away";
            }
            else if (foe =="Denver") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="denver-nuggets";
                document.getElementById("home-away").value="Away";
            }
            else if (foe =="Detroit") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="detroit-pistons";
                document.getElementById("home-away").value="Away";
            }
            else if (foe =="Golden State") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="golden-state-warriors";
                document.getElementById("home-away").value="Away";
            }

            else if (foe =="Houston") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="houston-rockets";
                document.getElementById("home-away").value="Away";
            }

            else if (foe =="Indiana") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="indiana-pacers";
                document.getElementById("home-away").value="Away";
            }
            else if (foe =="L.A.Clippers") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="los-angeles-clippers";
                document.getElementById("home-away").value="Away";
            }
            else if (foe =="L.A.Lakers") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="los-angeles-lakers";
                document.getElementById("home-away").value="Away";
            }
            else if (foe =="Memphis") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="memphis-grizzlies";
                document.getElementById("home-away").value="Away";
            }
            else if (foe =="Miami") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="miami-heat";
                document.getElementById("home-away").value="Away";
            }
            else if (foe =="Milwaukee") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="milwaukee-bucks";
                document.getElementById("home-away").value="Away";
            }
            else if (foe =="Minnesota") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="minnesota-timberwolves";
                document.getElementById("home-away").value="Away";
            }

            else if (foe =="New York") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="new-york-knicks";
                document.getElementById("home-away").value="Away";
            }

            else if (foe =="New Orleans") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="new-orleans-pelicans";
                document.getElementById("home-away").value="Away";
            }
            else if (foe =="Oklahoma City") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="oklahoma-city-thunder";
                document.getElementById("home-away").value="Away";
            }

            else if (foe =="Orlando") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="orlando-magic";
                document.getElementById("home-away").value="Away";
            }

            else if (foe =="Philadelphia") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="philadelphia-76ers";
                document.getElementById("home-away").value="Away";
            }

            else if (foe =="Phoenix") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="phoenix-suns";
                document.getElementById("home-away").value="Away";
            }

            else if (foe =="Sacramento") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="sacramento-kings";
                document.getElementById("home-away").value="Away";
            }
            else if (foe =="San Antonio") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="san-antonio-spurs";
                document.getElementById("home-away").value="Away";
            }
            else if (foe =="Toronto") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="toronto-raptors";
                document.getElementById("home-away").value="Away";
            }
            else if (foe =="Utah") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="utah-jazz";
                document.getElementById("home-away").value="Away";
            }
            else if (foe =="Washington") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="washington-wizards";
                document.getElementById("home-away").value="Away";
            }

            sweetDeal();
            // alert("Away"+last10+"\n"+foe+"\n"+pre_team+"\n"+length_foe);

        }
        else{

            var pre_team=selectedValue.substring(selectedValue[0], selectedValue.length-10);
            var prep_foe =pre_team.substr(13, pre_team.length);
            var foe=prep_foe.trim();
            var length_foe=foe.length;

            if (foe =="Atlanta"){

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="atlanta-hawks";
                document.getElementById("home-away").value="Home";

            }

            else if (foe =="Boston") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="boston-celtics";
                document.getElementById("home-away").value="Home";
            }

            else if (foe =="Brooklyn") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="brooklyn-nets";
                document.getElementById("home-away").value="Home";
            }

            else if (foe =="Charlotte") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="charlotte-hornets";
                document.getElementById("home-away").value="Home";
            }
            else if (foe =="Chicago") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="chicago-bulls";
                document.getElementById("home-away").value="Home";
            }
            else if (foe =="Cleveland") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="cleveland-cavaliers";
                document.getElementById("home-away").value="Home";
            }
            else if (foe =="Dallas") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="dallas-mavericks";
                document.getElementById("home-away").value="Home";
            }
            else if (foe =="Denver") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="denver-nuggets";
                document.getElementById("home-away").value="Home";
            }
            else if (foe =="Detroit") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="detroit-pistons";
                document.getElementById("home-away").value="Home";
            }
            else if (foe =="Golden State") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="golden-state-warriors";
                document.getElementById("home-away").value="Home";
            }

            else if (foe =="Houston") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="houston-rockets";
                document.getElementById("home-away").value="Home";
            }

            else if (foe =="Indiana") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="indiana-pacers";
                document.getElementById("home-away").value="Home";
            }
            else if (foe =="L.A.Clippers") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="los-angeles-clippers";
                document.getElementById("home-away").value="Home";
            }
            else if (foe =="L.A.Lakers") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="los-angeles-lakers";
                document.getElementById("home-away").value="Home";
            }
            else if (foe =="Memphis") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="memphis-grizzlies";
                document.getElementById("home-away").value="Home";
            }
            else if (foe =="Miami") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="miami-heat";
                document.getElementById("home-away").value="Home";
            }
            else if (foe =="Milwaukee") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="milwaukee-bucks";
                document.getElementById("home-away").value="Home";
            }
            else if (foe =="Minnesota") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="minnesota-timberwolves";
                document.getElementById("home-away").value="Home";
            }

            else if (foe =="New York") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="new-york-knicks";
                document.getElementById("home-away").value="Home";
            }

            else if (foe =="New Orleans") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="new-orleans-pelicans";
                document.getElementById("home-away").value="Home";
            }
            else if (foe =="Oklahoma City") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="oklahoma-city-thunder";
                document.getElementById("home-away").value="Home";
            }

            else if (foe =="Orlando") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="orlando-magic";
                document.getElementById("home-away").value="Home";
            }

            else if (foe =="Philadelphia") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="philadelphia-76ers";
                document.getElementById("home-away").value="Home";
            }

            else if (foe =="Phoenix") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="phoenix-suns";
                document.getElementById("home-away").value="Home";
            }

            else if (foe =="Sacramento") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="sacramento-kings";
                document.getElementById("home-away").value="Home";
            }
            else if (foe =="San Antonio") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="san-antonio-spurs";
                document.getElementById("home-away").value="Home";
            }
            else if (foe =="Toronto") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="toronto-raptors";
                document.getElementById("home-away").value="Home";
            }
            else if (foe =="Utah") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="utah-jazz";
                document.getElementById("home-away").value="Home";
            }
            else if (foe =="Washington") {

                document.getElementById("datepicker").value=date;
                document.getElementById("opponent").value="washington-wizards";
                document.getElementById("home-away").value="Home";
            }

            sweetDeal();

            //if you want it automatically to refresh :D nice
            // coolMan();
            //alert("Home"+"\n"+foe);

        }
        //14 + 9 is the number after OKC which is the largest team name by character count


    }

    function sweetDeal() {
        var opponent = $("#opponent option:selected").val();
        var home_away = $("#home-away option:selected").val();
        var awayp1 = $("#home_player1").val();
        var date_prep=document.getElementById("datepicker").value
        var yyyy = date_prep.substr(6,4),mm=date_prep.substr(0,2),dd=date_prep.substr(3,2),
            our_team='portland-trail-blazers';
        var game_string;

        if(home_away=='Home') {
            game_string=yyyy +mm + dd+'-' +opponent+'-at-'+our_team;

        }
        else  {
            game_string=yyyy +mm + dd +'-'+our_team+'-at-'+opponent;
        }
        // document.getElementById("game_string").value=game_string;
        document.getElementById("game_string").value=game_string;
        $("#box_it").hide();
        $("#box_it2").show();

        $("#get_box").show();
        $("#game_string_contain").show();
        $("#json_addy").show();
        $("#reset_box").show();
    }


    $( document ).ready(function() {
        $("#capture_stats").hide();
        $("#box_it2").hide();
        $("#reset_box").hide();
        $("#box_it").hide();
        $("#json_addy").hide();
    });



    $(function() {
        $( "#datepicker" ).datepicker();
    });

    $( "#speed" ).selectmenu();

    $( "#home-away" ).selectmenu();
    $( "#opponent" ).selectmenu();




    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>
<div>
    <h2 class="story_h2"><span class="article_title">Boxscore Generator</span></h2>

    <br/>
    <br/>

    <label for='speed' style='font-family:Arial,Tahoma,Courier;font-weight:800;'>SELECT A 2014-2015 GAME FOR BOXSCORE CONSTRUCTION</label><br/>
    <select name='game_construct' id='game_construct' onchange='timSucks();'>

        <!--        <option selected>SELECT GAME TO CONSTRUCT BELOW</option>-->
        <!--        <option>Portland @ Phoenix 10/30/2013</option>-->
        <!--        <option>Portland @ Denver 11/01/2013</option>-->
        <!--        <option>Portland vs. San Antonio 11/02/2013</option>-->
        <!--        <option>Portland vs. Houston 11/05/2013</option>-->
        <!--        <option>Portland @ Sacramento 11/08/2013</option>-->
        <!--        <option>Portland vs. Sacramento 11/09/2013</option>-->
        <!--        <option>Portland vs. Detroit 11/11/2013</option>-->
        <!--        <option>Portland vs. Phoenix 11/13/2013</option>-->
        <!--        <option>Portland @ Boston 11/15/2013</option>-->
        <!--        <option>Portland @ Toronto 11/17/2013</option>-->
        <!--        <option>Portland @ Brooklyn 11/18/2013</option>-->
        <!--        <option>Portland @ Milwaukee 11/20/2013</option>-->
        <!--        <option>Portland vs. Chicago 11/22/2013</option>-->
        <!--        <option>Portland @ Golden State 11/23/2013</option>-->
        <!--        <option>Portland vs. New York 11/25/2013</option>-->
        <!--        <option>Portland @ Phoenix 11/27/2013</option>-->
        <!--        <option>Portland @ L.A.Lakers 12/01/2013</option>-->
        <!--        <option>Portland vs. Indiana 12/02/2013</option>-->
        <!--        <option>Portland vs. Oklahoma City 12/04/2013</option>-->
        <!--        <option>Portland vs. Utah 12/06/2013</option>-->
        <!--        <option>Portland vs. Dallas 12/07/2013</option>-->
        <!--        <option>Portland @ Utah 12/09/2013</option>-->
        <!--        <option>Portland vs. Houston 12/12/2013</option>-->
        <!--        <option>Portland @ Philadelphia 12/14/2013</option>-->
        <!--        <option>Portland @ Detroit 12/15/2013</option>-->
        <!--        <option>Portland @ Cleveland 12/17/2013</option>-->
        <!--        <option>Portland @ Minnesota 12/18/2013</option>-->
        <!--        <option>Portland vs. New Orleans 12/21/2013</option>-->
        <!--        <option>Portland vs. L.A.Clippers 12/26/2013</option>-->
        <!--        <option>Portland vs. Miami 12/28/2013</option>-->
        <!--        <option>Portland @ New Orleans 12/30/2013</option>-->
        <!--        <option>Portland @ Oklahoma City 12/31/2013</option>-->
        <!--        <option>Portland vs. Charlotte 01/02/2014</option>-->


        <!---->
        <!---->
        <option>Portland vs. New Orleans 10/28/2015</option>
        <option>Portland vs. Utah 10/25/2016</option>
        <option>Portland vs. L.A.Clippers 10/27/2016</option>
        <option>Portland @ Denver 10/29/2016</option>
        <option>Portland vs. Golden State 11/01/2016</option>
        <option>Portland @ Phoenix 11/02/2016</option>
        <option>Portland @ Dallas 11/04/2016</option>
        <option>Portland @ Memphis 11/06/2016</option>
        <option>Portland vs. Phoenix 11/08/2016</option>
        <option>Portland @ L.A.Clippers 11/08/2016</option>
        <option>Portland vs. Sacramento 11/11/2016</option>
        <option>Portland vs. Denver 11/13/2016</option>
        <option>Portland vs. Chicago 11/15/2016</option>
        <option>Portland @ Houston 11/17/2016</option>
        <option>Portland @ New Orleans 11/18/2016</option>
        <option>Portland @ Brooklyn 11/20/2016</option>
        <option>Portland @ New York 11/22/2016</option>
        <option>Portland @ Cleveland 11/23/2016</option>
        <option>Portland vs. New Orleans 11/25/2016</option>
        <option>Portland vs. Houston 11/27/2016</option>
        <option>Portland vs. Indiana 11/30/2016</option>
        <option>Portland vs. Miami 12/03/2016</option>
        <option>Portland @ Chicago 12/05/2016</option>
        <option>Portland @ Milwaukee 12/07/2016</option>
        <option>Portland @ Memphis 12/08/2016</option>
        <option>Portland @ Indiana 12/10/2016</option>
        <option>Portland @ L.A.Clippers 12/12/2016</option>
        <option>Portland vs. Oklahoma City 12/13/2016</option>
        <option>Portland @ Denver 12/15/2016</option>
        <option>Portland @ Golden State 12/17/2016</option>
        <option>Portland @ Sacramento 12/20/2016</option>
        <option>Portland vs. Dallas 12/21/2016</option>
        <option>Portland vs. San Antonio 12/23/2016</option>
        <option>Portland vs. Toronto 12/26/2016</option>
        <option>Portland vs. Sacramento 12/28/2016</option>
        <option>Portland @ San Antonio 12/30/2016</option>
        <option>Portland @ Minnesota 01/01/2017</option>
        <option>Portland @ Golden State 01/04/2017</option>
        <option>Portland vs. L.A.Lakers 01/05/2017</option>
        <option>Portland vs. Detroit 01/07/2017</option>
        <option>Portland @ L.A.Lakers 01/10/2017</option>
        <option>Portland vs. Cleveland 01/11/2017</option>
        <option>Portland vs. Orlando 01/13/2017</option>
        <option>Portland @ Washington 01/16/2017</option>
        <option>Portland @ Charlotte 01/18/2017</option>
        <option>Portland @ Philadelphia 01/20/2017</option>
        <option>Portland @ Boston 01/21/2017</option>
        <option>Portland vs. L.A.Lakers 01/25/2017</option>
        <option>Portland vs. Memphis 01/27/2017</option>
        <option>Portland vs. Golden State 01/29/2017</option>
        <option>Portland vs. Charlotte 01/31/2017</option>
        <option>Portland vs. Dallas 02/03/2017</option>
        <option>Portland @ Oklahoma City 02/05/2017</option>
        <option>Portland @ Dallas 02/07/2017</option>
        <option>Portland vs. Boston 02/09/2017</option>
        <option>Portland vs. Atlanta 02/13/2017</option>
        <option>Portland @ Utah 02/15/2017</option>
        <option>Portland @ Orlando 02/23/2017</option>
        <option>Portland @ Toronto 02/26/2017</option>
        <option>Portland @ Detroit 02/28/2017</option>
        <option>Portland vs. Oklahoma City 03/02/2017</option>
        <option>Portland vs. Brooklyn 03/04/2017</option>
        <option>Portland @ Minnesota 03/06/2017</option>
        <option>Portland @ Oklahoma City 03/07/2017</option>
        <option>Portland vs. Philadelphia 03/09/2017</option>
        <option>Portland vs. Washington 03/11/2017</option>
        <option>Portland @ Phoenix 03/12/2017</option>
        <option>Portland @ New Orleans 03/14/2017</option>
        <option>Portland @ San Antonio 03/15/2017</option>
        <option>Portland @ Atlanta 03/18/2017</option>
        <option>Portland @ Miami 03/19/2017</option>
        <option>Portland vs. Milwaukee 03/21/2017</option>
        <option>Portland vs. New York 03/23/2017</option>
        <option>Portland vs. Minnesota 03/25/2017</option>
        <option>Portland @ L.A.Lakers 03/26/2017</option>
        <option>Portland vs. Denver 03/28/2017</option>
        <option>Portland vs. Houston 03/30/2017</option>
        <option>Portland vs. Phoenix 04/01/2017</option>
        <option>Portland @ Utah 04/04/2017</option>
        <option>Portland vs. Minnesota 04/06/2017</option>
        <option>Portland vs. Utah 04/08/2017</option>
        <option>Portland vs. San Antonio 04/10/2017</option>
        <option>Portland vs. New Orleans 04/12/2017</option>
    </select>

    <br/>
    <br/>
    <br/>


    <div id='json_addy'>
        <div id='game_string_prep'>
            <br/>
            <br/>

            <fieldset>
                <label for='speed' style='font-family:Arial,Tahoma,Courier;font-weight:800;'>SELECT AN OPPONENT</label>
                <select name='opponent' id='opponent'>
                    <option selected>SELECT OPPONENT</option>
                    <option>atlanta-hawks</option>
                    <option>boston-celtics</option>
                    <option>brooklyn-nets</option>
                    <option>charlotte-hornets</option>
                    <option>chicago-bulls</option>
                    <option>cleveland-cavaliers</option>
                    <option>dallas-mavericks</option>
                    <option>denver-nuggets</option>
                    <option>detroit-pistons</option>
                    <option>golden-state-warriors</option>
                    <option>houston-rockets</option>
                    <option>indiana-pacers</option>
                    <option>los-angeles-clippers</option>
                    <option>los-angeles-lakers</option>
                    <option>memphis-grizzlies</option>
                    <option>miami-heat</option>
                    <option>milwaukee-bucks</option>
                    <option>minnesota-timberwolves</option>
                    <option>new-york-knicks</option>
                    <option>new-orleans-pelicans</option>
                    <option>oklahoma-city-thunder</option>
                    <option>orlando-magic</option>
                    <option>philadelphia-76ers</option>
                    <option>phoenix-suns</option>
                    <option>sacramento-kings</option>
                    <option>san-antonio-spurs</option>
                    <option>toronto-raptors</option>
                    <option>utah-jazz</option>
                    <option>washington-wizards</option>
                </select>
                <br/>
                <label style='font-family:Arial,Tahoma,Courier;font-weight:800;' for='home-away'>HOME (VS.) OR AWAY (@)?</label>
                <select name='home-away' id='home-away'>
                    <option>Home</option>
                    <option>Away</option>
                </select>
            </fieldset>
            <br/>
            <br/>
            <br/>




            &nbsp;<button class='ui-button ui-button-text-only ui-widget ui-state-default ui-corner-all'> <span id='box_it' onclick='sweetDeal();' class='ui-button-text'>Prep Box Score</span> </button>
        </div>
        &nbsp;<button name='form_submit' id='get_box' class='ui-button ui-button-text-only ui-widget ui-state-default ui-corner-all' onclick='coolMan();'> <span id='box_it2' class='ui-button-text'>Get Box Score</span> </button>
        &nbsp;<button class='ui-button ui-button-text-only ui-widget ui-state-default ui-corner-all'> <span id='reset_box' onclick='resetBox();' class='ui-button-text'>Reset Box Score</span> </button>

        <br/>
        <br/>
        <form method="POST" action="/nba">
         @csrf
            <div class='ajax_game' data-role='content'></div>

            <div id='game_string_contain'>
                <label style='font-family:Arial,Tahoma,Courier;font-weight:800;' for='game_string'>&nbsp;BOXSCORE STRING</label> <input name='game_string' type='text' id='game_string' style='width:50%;' /></p>

                <label style='font-family:Arial,Tahoma,Courier;font-weight:800;' for='datepicker'>&nbsp;DATE</label>
                <input name='datepicker' type='text' id='datepicker' />


            </div>

            <br/>
            <br/>
        </form>
    </div>