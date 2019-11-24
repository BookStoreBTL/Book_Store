<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
