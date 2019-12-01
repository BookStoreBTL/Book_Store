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

class PublisherController extends Controller
{
    public function getList(){
        $publisher = Publisher::all();
        return view('admin.publisher.list', ['publisher'=>$publisher]);
    }

    public function getAdd(){
        return view('admin.publisher.add');
    }

    public function postAdd(Request $request){
        $this->validate($request, 
        [
            'name'=>'required|min:3|max:100|unique:language,name'
        ], 
        [
            'name.required' => 'Ban chua nhap ten the loai',
            'name.min' => 'Do dai ten the loai phai tu 3 den 100 ki tu',
            'name.max' => 'Do dai ten the loai phai tu 3 den 100 ki tu',
            'name.unique' => 'Ten the loai da ton tai'
        ]);
        $publisher = new Publisher();
        $publisher->name = $request->name;   
        
        $publisher->save();

        return redirect('admin/publisher/add')->with('thongbao', 'You added a category successly!');
    }

    public function getEdit($id){
        $publisher = Publisher::find($id);
        return view('admin.publisher.edit', ['publisher'=>$publisher]);
    }

    public function postEdit(Request $request, $id){
        $publisher = Publisher::find($id);

        $this->validate($request, 
        [
            'name'=>'required|min:3|max:100'
        ], 
        [
            'name.required' => 'Ban chua nhap ten the loai',
            'name.min' => 'Do dai ten the loai phai tu 3 den 100 ki tu',
            'name.max' => 'Do dai ten the loai phai tu 3 den 100 ki tu'
        ]);

        $publisher->name = $request->name;

        $publisher->save();

        return redirect('admin/publisher/edit/'.$id)->with('thongbao', 'You edited a category successly!');
    }

    public function getDelete($id){
        $publisher = Publisher::find($id);
        $publisher->delete();

        return redirect('admin/publisher/list')->with('thongbao', 'You deleted a category successly!');
    }
}

