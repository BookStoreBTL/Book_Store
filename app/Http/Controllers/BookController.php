<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Order;
use App\Payment;
use App\OrderDetail;

class BookController extends Controller
{
    public function getList(){
        $od = OrderDetail::where('order_id', 1)->get();
        foreach($od as $odtail){
            echo $odtail->book->name.'------'.$odtail->order->user->user_name;
            echo "<br>";
        }

        // $contact = Contact::find(1);
        // echo $contact->user->user_name;

        // $review = Review::find(1);
        // echo $review->user->user_name;

        // $payment = Payment::find(1);
        // echo $payment->user->user_name;

        // $order = Order::find(1);
        // echo $order->user->user_name;

        // return view('admin.book.list', ['book'=>$book]);
    }
}
