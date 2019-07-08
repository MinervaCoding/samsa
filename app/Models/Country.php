<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function subsidiaries()
    {
        return $this->hasMany('App\Subsidiary');
    }

    public function structure_elements()
    {
        return $this->hasMany('App\Models\StructureElement');
    }

}
