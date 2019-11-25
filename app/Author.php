<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'author';

    public function book(){
        return $this->hasMany('App\Book', 'author_id', 'id');
    }
}
