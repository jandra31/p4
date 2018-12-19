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
//poll
Route::get('/'               ,'PollController@home');
//thank you view should redirect back to poll after 5s
Route::get('/thanks'         , 'ThanksController@addPollResults');
Route::get('/dash'           ,'DashboardController@landing');
//table viewers for data
Route::get('/dataview'       ,'DataViewController@landing');
//data controller
Route::post('/datacontrol'   ,'DataEditorController@landing');
Route::get('/pollDelete'     , 'DataViewController@pollDelete');
Route::get('/locationUpdate' , 'DataViewController@update');
Route::post('/newLocation'   , 'DataViewController@addLocation');
Route::get('/create'         , 'DataViewController@newLocation');
Route::get('/locationDelete' , 'DataViewController@deleteLocation');
//login
Auth::routes();
Route::get('activate/{token}', 'Auth\RegisterController@activate')
    ->name('activate');

