<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function users()
    {
        return $this->hasMany( 'App\Models\User');
    }

    public function subsidiary()
    {
        return $this->belongsTo('App\Models\Subsidiary');
    }

}
