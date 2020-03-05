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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group([
    'middleware' => 'auth:api'
], function () {

    Route::get('client', 'ClientController@index');
    Route::post('client', 'ClientController@store');
    Route::get('client/{id}', 'ClientController@show');
    Route::delete('client/{id}', 'ClientController@destroy');

    Route::get('project/{id}/note', 'ProjectController@index');
    Route::post('project/{id}/note', 'ProjectController@store');
    Route::get('project/{id}/note/{noteId}', 'ProjectController@show');
    Route::put('project/{id}/note/{noteId}', 'ProjectController@update');
    Route::delete('project/{id}/note/{noteId}', 'ProjectController@destroy');



    Route::get('project', 'ProjectController@index');
    Route::post('project', 'ProjectController@store');
    Route::get('project/{id}', 'ProjectController@show');
    Route::delete('project/{id}', 'ProjectController@destroy');
});


