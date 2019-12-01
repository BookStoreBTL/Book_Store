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

class BookController extends Controller
{
    public function getList(){
        $book = Book::all();
        return view('admin.book.list', ['book'=>$book]);
    }

    public function getAdd(){
        $author = Author::orderby('name', 'ASC')->get();
        $category = Category::orderby('name', 'ASC')->get(); 
        $language = Language::orderby('name', 'ASC')->get(); 
        $publisher = Publisher::orderby('name', 'ASC')->get(); 

        return view('admin.book.add', ['author'=>$author, 'category'=>$category, 'language'=>$language, 'publisher'=>$publisher]);
    }

    public function postAdd(Request $request){
        $this->validate($request, 
        [
            'name'=>'required|min:3|max:100|unique:book,name',
            'description'=>'required',
            'price'=>'required',
            'quantity_in_stock'=>'required'
        ], 
        [
            'name.required' => 'Ban chua nhap ten the loai',
            'name.min' => 'Do dai ten the loai phai tu 3 den 100 ki tu',
            'name.max' => 'Do dai ten the loai phai tu 3 den 100 ki tu',
            'name.unique' => 'Ten the loai da ton tai',
            'description.required' => 'Ban chua nhap mo ta',
            'price.required' => 'Ban chua nhap gia',
            'quantity_in_stock.required' => 'Ban chua nhap so luong sach trong kho',
        ]);
        $book = new Book;
        $book->name = $request->name;
        $book->author_id = $request->author;
        $book->category_id = $request->category;
        $book->language_id = $request->language;
        $book->publisher_id = $request->publisher; 
        $book->description = $request->description;
        $book->release_year = $request->release_year;
        $book->page = $request->page;
        $book->price = $request->price;
        $book->quantity_in_stock = $request->quantity_in_stock;

        if($request->hasFile('img')){ 
            $file = $request->file('img');
            $duoi = $file->getClientOriginalExtension();
            if($duoi!='jpg' && $duoi!='png' && $duoi !='jpeg'){
                return redirect('admin/book/add')->with('loi', 'Bạn phải chọn file ảnh có đuôi là lpg, png, jpeg');

            }
            $name = $file->getClientOriginalName();
            $image = Str::random(5)."_".$name;

            while(\file_exists("img".$image)){
                $image = Str::random(5)."_".$name;
            }

            $file->move('img', $image);
            $book->img = $image;
        }else{
            $book->img = "";
        }
        
        $book->save();

        return redirect('admin/book/add')->with('thongbao', 'You added a category successly!');
    }

    public function getEdit($id){
        $book = Book::find($id);
        $author = Author::orderby('name', 'ASC')->get();
        $category = Category::orderby('name', 'ASC')->get(); 
        $language = Language::orderby('name', 'ASC')->get(); 
        $publisher = Publisher::orderby('name', 'ASC')->get(); 
        return view('admin.book.edit', ['book'=>$book, 'author'=>$author, 'category'=>$category, 'language'=>$language, 'publisher'=>$publisher]);
    }

    public function postEdit(Request $request, $id){
        $book = Book::find($id);

        $this->validate($request, 
        [
            'name'=>'required|min:3|max:100',
            'description'=>'required',
            'price'=>'required',
            'quantity_in_stock'=>'required'
        ], 
        [
            'name.required' => 'Ban chua nhap ten the loai',
            'name.min' => 'Do dai ten the loai phai tu 3 den 100 ki tu',
            'name.max' => 'Do dai ten the loai phai tu 3 den 100 ki tu',
            'description.required' => 'Ban chua nhap mo ta',
            'price.required' => 'Ban chua nhap gia',
            'quantity_in_stock.required' => 'Ban chua nhap so luong sach trong kho',
        ]);

        $book->name = $request->name;
        $book->author_id = $request->author;
        $book->category_id = $request->category;
        $book->language_id = $request->language;
        $book->publisher_id = $request->publisher; 
        $book->description = $request->description;
        $book->release_year = $request->release_year;
        $book->page = $request->page;
        $book->price = $request->price;
        $book->quantity_in_stock = $request->quantity_in_stock;

        if($request->hasFile('img')){ 
            $file = $request->file('img');
            $duoi = $file->getClientOriginalExtension();
            if($duoi!='jpg' && $duoi!='png' && $duoi !='jpeg'){
                return redirect('admin/book/edit/{{$book->id}}')->with('loi', 'Bạn phải chọn file ảnh có đuôi là lpg, png, jpeg');

            }
            $name = $file->getClientOriginalName();
            $image = Str::random(5)."_".$name;

            while(\file_exists("img".$image)){
                $image = Str::random(5)."_".$name;
            }

            $file->move('img', $image);
            $file_path = "img/".$book->img;
            File::delete($file_path); //xoa file anh cu
            $book->img = $image;
        }

        $book->save();

        return redirect('admin/book/edit/'.$id)->with('thongbao', 'You edited a category successly!');
    }

    public function getDelete($id){
        $book = Book::find($id);
        $book->delete();

        return redirect('admin/book/list')->with('thongbao', 'You deleted a category successly!');
    }
}
