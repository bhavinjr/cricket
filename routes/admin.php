<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', ['as'=>'admin.login','uses'=> 'Auth\LoginController@showLoginForm']);
Route::post('/login', ['as'=>'admin.login', 'uses'=> 'Auth\LoginController@login']);
Route::get('/logout', ['as'=>'admin.logout', 'uses'=> 'Auth\LoginController@logout']);

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('dashboard', ['as'=>'admin.dashboard', 'uses'=>'AdminController@dashboard']);

    Route::resource('teams', 'TeamController', ['as' => 'admin', 'except' => ['show']]);
    Route::resource('players', 'PlayerController', ['as' => 'admin', 'except' => ['show']]);
    Route::resource('matches', 'MatchController', ['as' => 'admin', 'except' => ['show']]);

    Route::post('players/batting/{player}', ['as' => 'admin.player.batting', 'uses' => 'PlayerController@handleBatting']);
    Route::post('players/bowling/{player}', ['as' => 'admin.player.bowling', 'uses' => 'PlayerController@handleBowling']);

    Route::get('points', 'PointController@index');


    Route::get('api/teams', 'AdminController@getTeams');
    Route::get('api/venues', 'AdminController@getVenues');
    Route::get('api/team/players', 'PlayerController@getTeamPlayers');

    Route::post('api/matches', 'MatchController@store');
    Route::put('api/matches/{match}', ['as' => 'admin.api_matches.update', 'uses' => 'MatchController@update']);
});
