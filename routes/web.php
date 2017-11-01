<?php
use App\Todos;

Route::get('/', 'WelcomeController@index');
Route::get('/tasks/create', 'TasksController@create');
Route::post('/tasks/store', 'TasksController@store');
Route::delete('/tasks/{tasks}/delete', 'TasksController@destroy');
Route::patch('/tasks/{task}/edit', 'TasksController@edit');

Route::get('/tasks/{task}', 'TasksController@show');


/*Route::get('/about', function () {
    return view('about');
});
*/

/*
Route::get('/tasks/{task}', function($id) {
    //$task = DB::table('todos')->find($id);
   $task = Todos::find($id);
   return view('tasks.show',compact('task'));

});
*/
//Route::post('/tasks', 'TasksController@store');
//Route::get('/tasks', 'TasksController@index');
//Route::get('/tasks/create', 'TasksController@create');
//Route::patch('/tasks/{task}/edit', 'TasksController@edit');
//Route::delete('/tasks/{tasks}/delete', 'TasksController@destory');
//  Route::get('/tasks/{task}', TasksController@show); //.. edit form



