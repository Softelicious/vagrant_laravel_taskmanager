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

Route::get('/', 'TaskController@index');
Route::get('/delete/{id}', 'TaskController@delete');
Route::get('/done/{id}', 'TaskController@done');
Route::get('/description/{id}', 'TaskController@description');
Route::get('/update/{id}', 'TaskController@update');
Route::post('/update_task', 'TaskController@update_task');
Route::get('/add', 'TaskController@add');
Route::post('/store', 'TaskController@store');
