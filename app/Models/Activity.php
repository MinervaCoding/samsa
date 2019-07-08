<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function complexity()
    {
        return $this->belongsTo('App\Models\Complexity');
    }

    public function process_element()
    {
        return $this->belongsTo('App\Models\ProcessElement');
    }

    public function structure_element()
    {
        return $this->belongsTo('App\Models\StructureElement');
    }

    public function latestStatus()
    {
        return $this->hasOne( 'App\Models\ActivityStatus')->latest();
    }

    public function statuses()
    {
        return $this->hasMany( 'App\Models\ActivityStatus');
    }

}
