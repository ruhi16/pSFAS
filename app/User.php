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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin(){
        return $this->role->name == "Admin";
    }
    public function getRole(){
        return $this->role->name;
    }


    public function getModelName(){
        // return ((new self)->getTable());
        return class_basename($this);
        // return $this->getTable();
    }




    public function role(){
        return $this->belongsTo('App\Role');
    }
}
