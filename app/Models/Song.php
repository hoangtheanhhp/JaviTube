<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Song extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'code'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function singer()
    {
        return $this->belongsTo(Song::class);
    }
}
