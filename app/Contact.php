<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
