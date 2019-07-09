<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'first_name', 'last_name', 'department_id', 'daily_working_hours', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function absencedays(){
        return $this->hasMany( 'App\Models\Absenceday', 'user_id', 'id' );
    }

    public function latestabsenceday(){
        return $this->hasOne( 'App\Models\Absenceday', 'user_id', 'id' )->latest();
    }
    public function absencedays30(){
        return $this->hasMany( 'App\Models\Absenceday', 'user_id', 'id' )->where('');
    }
}
