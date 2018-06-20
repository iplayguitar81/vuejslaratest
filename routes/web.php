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

Route::get('/', function () {
    return view('welcome');




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


//});



//Route::post('/nba', 'boxscoreTest@boxScorePost');