<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use App\Book;
use App\Category;
use App\Language;
use App\Order;
use App\Payment;
use App\OrderDetail;
use App\Publisher;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class OrderController extends Controller
{
    public function getList(){
        $order = Order::all();
        $order_detail = OrderDetail::all();
        $payment = Payment::all();
        return view('admin.order.list', ['order'=>$order, 'order_detail'=>$order_detail, 'payment'=>$payment]);
    }
}

