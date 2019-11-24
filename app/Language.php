<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'language';

    public function book(){
        return $this->hasMany('App\Book', 'language_id', 'id');
    }
}