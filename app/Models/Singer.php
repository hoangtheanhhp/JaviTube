<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Singer extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'birthday', 'description'
    ];

    protected $dates = [
        'deleted_at', 'birthday'
    ];

    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    public static function search($request) {
        return Singer::where("name","LIKE","%$request%")->get();
    }
    public function like()
    {
        return $this->belongsToMany(User::class,'likeSinger');
    }
    public function isLike()
    {   $userid = Auth::user();
        if (!$userid) return false;  
        return $this->like->contains($userid);
    }
}
