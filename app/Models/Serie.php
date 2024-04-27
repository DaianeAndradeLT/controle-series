<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = ['nome'];

    protected $casts = [

        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
