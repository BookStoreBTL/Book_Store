<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    protected $table = 'users';

    public function contact(){
        return $this->hasMany('App\Contact', 'user_id', 'id');
    }

    public function review(){
        return $this->hasMany('App\Review', 'user_id', 'id');
    }

    public function order(){
        return $this->hasMany('App\Order', 'user_id', 'id');
    }

    public function payment(){
        return $this->hasMany('App\Payment', 'user_id', 'id');
    }
}
