<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lyric extends Model
{
  use SoftDeletes;
  const JP = 1,
        VI = 2;
  protected $dates = [
      'deleted_at'
  ];
  protected $fillable = [
      'lyric', 'user_id', 'type', 'song_id'
  ];

}
