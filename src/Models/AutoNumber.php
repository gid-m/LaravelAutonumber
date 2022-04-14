<?php

namespace Gid\AutoNumber\Models;

use Illuminate\Database\Eloquent\Model;

class AutoNumber extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'number',
    ];
}
