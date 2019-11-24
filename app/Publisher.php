<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $table = 'publisher';

    public function book(){
        return $this->hasMany('App\Book', 'publisher_id', 'id');
    }
}
