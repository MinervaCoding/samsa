<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subsidiary extends Model
{
    public function departments()
    {
        return $this->hasMany( 'App\Models\Department');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

}
