<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';

    public function book(){
        return $this->belongsTo('App\Book', 'book_id', 'id');
    }

    public function order(){
        return $this->belongsTo('App\Order', 'order_id', 'id');
    }
}
