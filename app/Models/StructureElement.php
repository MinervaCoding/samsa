<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StructureElement extends Model
{
    public function parent()
    {
        return $this->hasOne( 'App\Models\StructureElement', 'id', 'parent_id' );
    }

    public function children(){
        return $this->hasMany( 'App\Models\StructureElement', 'parent_id', 'id' );
    }

    public function structure_element_type()
    {
        return $this->belongsTo('App\Models\StructureElementType');
    }

    public function country_of_execution()
    {
        return $this->belongsTo('App\Models\Country');
    }
    public function accounting_information()
    {
        return $this->belongsTo('App\Models\AccountingInformation');
    }

    public function activities()
    {
        return $this->hasMany( 'App\Models\Activities');
    }

    public function scopeMaxStatus()
    {
        //return $this->activities()->max('activity_status')
        //return $this->;
    }

    public function scopeResponsible()
    {
        //return $this->activities()->where(activity->process_element->process_element_type, 1)->responsible();
        return null;
    }
    //
}
