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

/*Route::get('/', function () {
    return view('home-dashboard');
});

Route::get('/events', 'EventsController@index');

Route::get('get-events', [
    'uses' => 'EventsController@getEvents',
    'as' => 'get-events'
]);
Route::post('add-event', [
    'uses' => 'EventsController@addEvent',
    'as' => 'add-event'
]);*/

Route::get('vue-test/', function () {
    return view('vue-test');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});

Route::resource('/task', 'TaskController');