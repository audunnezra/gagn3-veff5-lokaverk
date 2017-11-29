<?php

Auth::routes();

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/threads', function () {
    return view('threads');
});