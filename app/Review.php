<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function book(){
        return $this->belongsTo('App\Book', 'book_id', 'id');
    }
}
