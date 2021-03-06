<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multiplayer extends Model
{
    /**
     * The attributes that should be guided
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
