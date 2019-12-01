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

class AuthorController extends Controller
{
    public function getList(){
        $author = Author::all();
        return view('admin.author.list', ['author'=>$author]);
    }

    public function getAdd(){
        return view('admin.author.add');
    }

    public function postAdd(Request $request){
        $this->validate($request, 
        [
            'name'=>'required|min:3|max:100|unique:author,name'          
        ], 
        [
            'name.required' => 'Ban chua nhap ten tac gia',
            'name.min' => 'Do dai ten tac gia phai tu 3 den 100 ki tu',
            'name.max' => 'Do dai ten tac gia phai tu 3 den 100 ki tu',
            'name.unique' => 'Ten tac gia da ton tai'
        ]);

        $author = new Author;
        $author->name = $request->name;
        $author->description = $request->description;

        if($request->hasFile('img')){ 
            $file = $request->file('img');
            $duoi = $file->getClientOriginalExtension();
            if($duoi!='jpg' && $duoi!='png' && $duoi !='jpeg'){
                return redirect('admin/author/add')->with('loi', 'Bạn phải chọn file ảnh có đuôi là lpg, png, jpeg');

            }
            $name = $file->getClientOriginalName();
            $image = Str::random(5)."_".$name;

            while(\file_exists("img".$image)){
                $image = Str::random(5)."_".$name;
            }

            $file->move('img', $image);
            $author->img = $image;
        }else{
            $author->img = "";
        }
        
        $author->save();

        return redirect('admin/author/add')->with('thongbao', 'You added a category successly!');
    }

    public function getEdit($id){
        $author = Author::find($id);
        return view('admin.author.edit', ['author'=>$author]);
    }

    public function postEdit(Request $request, $id){
        $author = Author::find($id);

        $this->validate($request, 
        [
            'name'=>'required|min:3|max:100'

        ], 
        [
            'name.required' => 'Ban chua nhap ten tac gia',
            'name.min' => 'Do dai ten tac gia phai tu 3 den 100 ki tu',
            'name.max' => 'Do dai ten tac gia phai tu 3 den 100 ki tu'
        ]);

        $author->name = $request->name;
        $author->description = $request->description;

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
            $file_path = "img/".$author->img;
            File::delete($file_path); //xoa file anh cu
            $author->img = $image;
        }

        $author->save();

        return redirect('admin/author/edit/'.$id)->with('thongbao', 'You edited a category successly!');
    }

    public function getDelete($id){
        $author = Author::find($id);
        $author->delete();

        return redirect('admin/author/list')->with('thongbao', 'You deleted a category successly!');
    }
}
