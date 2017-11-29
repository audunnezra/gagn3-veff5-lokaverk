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

    public function store(){
    	$this->validate($request, [
        	'title' => 'required|max:10',
        	'body' => 'required'
    	]);
    }
}
