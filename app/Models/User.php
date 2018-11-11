<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'birthday', 'provider', 'provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'deleted_at', 'birthday'
    ];

    public function following()
    {
        return $this->belongsToMany(User::class, 'following', 'following_id');
    }

    public function followed()
    {
        return $this->belongsToMany(User::class, 'following', 'followed_id');
    }
    
    public function like()
    {
        return $this->belongsToMany(Song::class,'like');
    }

    public function isOwn()
    {
        return $this->id === Auth::user()->id;
    }
    public function liked($id)
    {
        return !is_null(
            \DB::table('like')->where('user_id',$this->id)->where('song_id',$id)->first()
        );
    }
    public function isAdmin()
    {
        return $this->type===2;
    }
}
