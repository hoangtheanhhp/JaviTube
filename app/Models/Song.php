<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Song extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'youtube_id', 'user_id',
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
        $lyric = $this->lyrics->where('type', Lyric::JP)->first();
        if ($lyric) return $lyric->lyric;
        return null;
    }

    public function getVietnamLyricAttribute()
    {
        $lyric = $this->lyrics->where('type', Lyric::VI)->first();
        if ($lyric) return $lyric->lyric;
        return null;
    }
    public function be_liked()
    {
        return $this->belongsToMany(User::class);
    }
}
