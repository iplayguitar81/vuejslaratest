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

use Illuminate\Support\Facades\Mail;
use App\Mail\UserRegistered;


Route::get('/', function () {
    return view('welcome');

});


Route::get('/test-queues', function () {

    Mail::to('test@example.com')->queue(new UserRegistered);
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


Route::get('boxscores/{event_id}', ['as' => 'boxscore.show', 'uses' => 'BoxscoreController@show']);

Route::get('teams/{team_id}', ['as' => 'team.show', 'uses' => 'TeamController@show']);

Route::get('rosters/{team_id}', ['as' => 'roster.show', 'uses' => 'RosterController@show']);

Route::get('schedules/{team_id}', ['as' => 'schedule.show', 'uses' => 'ScheduleController@show']);


Route::get('/players/{display_name}', ['as' => 'boxscore.show-stats', 'uses' => 'BoxscoreController@showStats']);

//test simplified Player Stats pdf view with link...
Route::get('/players-pdf/{display_name}', ['as' => 'boxscore.test-stats', 'uses' => 'BoxscoreController@testStats']);

//more simplified Player Stats view
Route::get('/tests/{display_name}', ['as' => 'boxscore.test-stats2', 'uses' => 'BoxscoreController@testStats2']);




//testing laravel-snappy
Route::get('generate-pdf-teams', 'BoxscoreController@pdfViewTeam')->name('generate-pdf-teams');

Route::get('generate-pdf-roster', 'RosterController@pdfViewRoster')->name('generate-pdf-roster');

Route::get('generate-pdf-boxscore', 'BoxscoreController@pdfViewBoxscore')->name('generate-pdf-boxscore');

Route::get('generate-pdf-player-stats', 'BoxscoreController@pdfViewPlayerStats')->name('generate-pdf-player-stats');

Route::get('generate-pdf-player-stats2', 'BoxscoreController@pdfViewPlayerStats2')->name('generate-pdf-player-stats2');





