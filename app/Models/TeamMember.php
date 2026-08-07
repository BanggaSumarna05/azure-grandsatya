<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = ['name', 'role', 'bio', 'photo'];

    protected $casts = [];

    /**
     * photo bisa null jika belum upload foto
     */
}
