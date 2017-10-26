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


Route::get('/', 'WelcomeController@index');

Route::get('/about', function () {
    return view('about');
});
Route::get('/tasks/{task}', 'TasksController@show');

//Route::post('/tasks', 'TasksController@store');
//Route::get('/tasks', 'TasksController@index');
//Route::get('/tasks/create', 'TasksController@create');
//Route::patch('/tasks/{task}/edit', 'TasksController@edit');
//Route::delete('/tasks/{tasks}/delete', 'TasksController@destory');
//  Route::get('/tasks/{task}', TasksController@show); //.. edit form



