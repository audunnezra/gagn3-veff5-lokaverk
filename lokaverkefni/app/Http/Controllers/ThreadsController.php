<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
class ThreadsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('show', 'index');
    }

    public function index(Request $request){
        $threads = Thread::latest()->get();

        return view('threads.index', compact('threads'));
    }

    public function show($id){
        $thread = Thread::find($id);

        return view('threads.show', compact('thread'));
    }

    protected function store(Request $request){

    	$this->validate($request, [
        	'title' => 'required|min:8|max:255',
        	'body' => 'required'
    	]);

        // test

    	Thread::create([
		 	'title' => $request->title,
		 	'body' => $request->body,
		 	'user_id' => auth()->id()
		 ]);

        return redirect('/threads');
    }

    protected function create(){
    	return view('threads.create');
    }
}