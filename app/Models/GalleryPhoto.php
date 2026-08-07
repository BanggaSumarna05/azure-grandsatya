<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryPhoto extends Model
{
    protected $fillable = ['photo', 'caption', 'category', 'order'];

    protected $casts = [
        'order' => 'integer',
    ];
}
