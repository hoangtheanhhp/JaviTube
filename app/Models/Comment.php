<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'content', 'user_id', 'song_id'
  	];

  	function song() {
  		return $this->belongsTo(Song::class);
  	}

  	function user() {
  		return $this->belongsTo(User::class);
  	}
}
