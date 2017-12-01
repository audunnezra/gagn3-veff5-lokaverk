<?php

Auth::routes();

// get 1
Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect('/home');
});

// post 1
Route::post('/threads', 'ThreadsController@store');
// get 2
Route::get('/create', 'ThreadsController@create');

Route::get('threads', 'ThreadsController@show');