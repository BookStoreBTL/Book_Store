<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'author';

    public function author(){
        return $this->hasMany('App\Author', 'author_id', 'id');
    }
}
