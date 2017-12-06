<?php

Auth::routes();


// get 1
Route::get('threads', 'ThreadsController@index');

Route::get('/home', function () {
    return redirect('threads');
});

Route::get('/', function () {
    return redirect('threads');
});

// get 2
Route::get('/create', 'ThreadsController@create');

//get 3
Route::get('/threads/{id}', 'ThreadsController@show');

//post 2
Route::post('/threads/{id}/comment', 'CommentsController@store');

// post 1
Route::post('/threads', 'ThreadsController@store');