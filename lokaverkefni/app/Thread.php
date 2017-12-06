<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $guarded = [];

   	function comments(){
   		return $this->hasMany('App\Comment');
   	}
}
