<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fleet extends Model
{
    protected $fillable = ['name', 'class', 'capacity', 'photo', 'description'];

    protected $casts = [
        'capacity' => 'integer',
    ];
}
