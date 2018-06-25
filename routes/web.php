<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Team;
use App\Roster;
use App\Schedule;
use App\Boxscore;



Route::get('/', function () {
    return view('welcome');

});


Route::get('/teams', function () {

    $teams = Team::all();

    return view('nba-stats.teams', compact('teams'));
});

Route::get('/rosters', function () {

    $rosters = Roster::all();



    return view('nba-stats.rosters', compact('rosters'));
});

Route::get('/schedules', function () {

    $schedules = Schedule::all();



    return view('nba-stats.schedules', compact('schedules'));
});


Route::get('/boxscores', function () {

    $boxscores = Boxscore::orderBy('boxscore_date', 'asc')->paginate(10);




    return view('nba-stats.boxscores', compact('boxscores'));
});


//Route::get('/nba', function () {
//    return view('nba-stats.nba');});


//Route::get('/nba', 'boxscoreTest@boxscoreViewer');

Route::get('/nba', 'boxscoreTest@boxScoreGetter');
Route::get('/ajax', 'boxscoreTest@boxScorePost');

Route::post('/test', ['as' => 'nba-stats.test-view', 'uses'=>'boxscoreTest@boxScorePost']);

//Route::get('/ajaxgetter', 'boxscoreTest@boxScoreGetter');


//Route::get('/testview', function(){
 //   return view('nba-stats.test-view');



Route::get('testerson', function(){ return view('nba-stats.test-stats'); });


Route::post('/postajax', 'boxscoreTest@boxScoreAjax');

Route::post('/postajax2', 'boxscoreTest@boxScoreAjax2');


Route::get('boxscore/{id}/{event_id}', ['as' => 'boxscore.show', 'uses' => 'BoxscoreController@show']);

//});



//Route::post('/nba', 'boxscoreTest@boxScorePost');