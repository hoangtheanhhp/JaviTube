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
    public function song()
    {
        return $this->hasOne(Song::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
