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


Route::get('/nba', 'boxscoreTest@boxScoreGetter');

Route::post('/nba', 'boxscoreTest@boxScorePost');


//Route::post('/nba', 'boxscoreTest@boxScorePost');