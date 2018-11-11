<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Song extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'youtube_id', 'user_id', 'approver_id'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function singer()
    {
        return $this->belongsTo(Song::class);
    }

    public function lyrics()
    {
        return $this->hasMany(Lyric::class);
    }

    public function getOriginalLyricAttribute()
    {
        return $this->lyrics->where('type', Lyric::JP)->first();
    }

    public function getRomajiLyricAttribute()
    {
        return $this->lyrics->where('type', Lyric::RJ)->first();
    }
    public function be_liked()
    {
        return $this->belongsToMany(User::class);
    }
}
