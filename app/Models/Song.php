<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'code'
    ];

    protected $dates = [
        'deleted_at'
    ];
}
