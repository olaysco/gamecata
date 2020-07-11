<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Player extends Model
{
    protected $appends = ['gameplaysLink'];
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

    public function gameplays()
    {
        return $this->hasMany('App\Gameplay');
    }

    public function getGameplaysLinkAttribute()
    {
        return $this->attributes['gameplaysLink'] =  URL::to('/api/player/' . $this->id);
    }
}
