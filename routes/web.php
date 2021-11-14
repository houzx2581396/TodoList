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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('mission', 'MissionController@index')->name('mission');
Route::post('mission', 'MissionController@createMission');
Route::put('mission/{missionKey}', 'MissionController@missionComplete')->name('missionComplete');
Route::delete('mission/{missionKey}', 'MissionController@deleteMission')->name('missionDelete');
Route::get('test', 'TestController@index');