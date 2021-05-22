<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password', 'admin', 'center_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function bloods()
    {
        return $this->hasMany('App\Blood' , 'user_id');
    }

    public function setNameAttribute($value){
        $this->attributes['name'] = ucfirst($value);
    }

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    //public function getNameAttribute($value){
    //    return 'User:' . $value;
    //    return strtoupper($value);
    //}

    //public function getEmailAttribute($value){
    //    return strtok($value, '@');
    //}
}
