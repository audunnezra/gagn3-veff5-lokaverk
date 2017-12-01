<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
class ThreadsController extends Controller
{
    public function __construct(){

    }

    public function store(Request $request){

    	//dd($request->all());

    	$this->validate($request, [
        	'title' => 'required|min:10',
        	'body' => 'required'
    	]);

    	Thread::create([
		 	'title' => $request->title,
		 	'body' => $request->body,
		 	'user_id' => auth()->id()
		 ]);
    }

    public function create(){
    	return view('threads.create');
    }
}
