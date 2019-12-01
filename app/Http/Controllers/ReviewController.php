<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use App\Book;
use App\Category;
use App\Contact;
use App\Language;
use App\Order;
use App\Payment;
use App\OrderDetail;
use App\Publisher;
use App\Review;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ReviewController extends Controller
{
    public function getList(){
        $review = Review::all();
        return view('admin.review.list', ['review'=>$review]);
    }

    public function getDelete($id){
        $review = Review::find($id);
        $review->delete();

        return redirect('admin/review/list')->with('thongbao', 'You deleted a category successly!');
    }
}


