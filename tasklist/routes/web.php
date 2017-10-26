<?php

use Illuminate\Http\request;
use app\task

Route::get('/', function () {
	return view('tasks/index');
});

Route::post('/task', function (Request $request) {
	$validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
		]);

	if ($validator->fails()){
		return redirect('/')
			->withInput()
			->withErrors($validator);
	}



});

Route::delete('/task/{task}', function(){
	
});