<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    protected function store(Request $request, $id){

    	$this->validate($request, [
        	'body' => 'required|min:2'
    	]);

        // test

    	Comment::create([
		 	'body' => $request->body,
		 	'user_id' => auth()->id(),
		 	'thread_id' => $id
		 ]);

        return redirect("/threads/{$id}");
    }
}
