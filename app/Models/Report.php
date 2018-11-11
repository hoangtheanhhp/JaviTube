<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id', 'song_id', 'content'
    ];
    protected $dates = [
        'deleted_at'
    ];
    protected $hidden = [
        'seen'
    ];
    public function seen(){
        $this->seen = true;
    }
    public function songs()
    {
        return $this->hasMany(Song::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
