<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Book extends Model
{
    protected $table = 'book';

    public function language(){
        return $this->belongsTo('App\Language', 'language_id', 'id');
    }

    public function publisher(){
        return $this->belongsTo('App\Publisher', 'publisher_id', 'id');
    }

    public function author(){
        return $this->belongsTo('App\Author', 'author_id', 'id');
    }

    public function category(){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function review(){
        return $this->hasMany('App\Review', 'book_id', 'id');
    }

    public function orderDetail(){
        return $this->hasMany('App\OrderDetail', 'book_id', 'id');
    }
}
