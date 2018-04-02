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
    protected $table='tbl_user';
    public $timestamps = false;
    // public $timestamps = [ "created_at" ];
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function getTest($at) {
        return $at . "\n has done";
    }
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
