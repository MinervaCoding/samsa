<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Department extends Model
{

    protected $fillable = ['description', 'costcenter_number', 'subsidiary_id'];

    public function users()
    {
        return $this->hasMany( 'App\Models\User');
    }

    public function subsidiary()
    {
        return $this->belongsTo('App\Models\Subsidiary');
    }

}
