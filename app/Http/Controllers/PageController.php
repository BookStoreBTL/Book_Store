<?php

namespace App\Http\Controllers;
use App\Book;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        $book = Book::paginate(8);
        return view('main.home', compact('book')); 
    }

    public function getBookDetails(Request $req) {
        $book_detail = Book::where('id', $req->id)->first();
        return view('main.book-detail',compact('book_detail'));
    }
   
}
