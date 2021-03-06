<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    function user(){
    	return $this->belongsTo('App\User');
    }

    function thread(){
    	return $this->belongsTo('App\Thread');
    }
}
