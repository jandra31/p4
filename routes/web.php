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

Route::get('/'               ,'PollController@home');
Route::get('/dash'           ,'DashboardController@landing');
Route::get('/dataview'       ,'DataViewController@landing');
Route::post('/datacontrol'   ,'DataEditorController@landing');
//Route::get('/login'          ,'LoginController@landing');
Route::get('/thanks'         , 'ThanksController@addPollResults');
Route::get('/pollDelete'     , 'DataViewController@pollDelete');
Route::get('/locationUpdate' , 'DataViewController@update');
Route::post('/newLocation'    , 'DataViewController@addLocation');
Route::get('/create'         , 'DataViewController@newLocation');
Route::get('/locationDelete' , 'DataViewController@deleteLocation');
Auth::routes();
Route::get('activate/{token}', 'Auth\RegisterController@activate')
    ->name('activate');

/*
//rater
Route::get('/', function () {
    return view('poll');
});
//login
Route::get('/', function () {
    return view('login');
});
//acc mngmnt
Route::get('/', function () {
    return view('data_view');
});
//locations
Route::get('/', function () {
    return view('data_view');
});
// edirot
Route::get('/', function () {
    return view('data_editor');
});
//dash
Route::get('/', function () {
    return view('dashboard');
});
*/