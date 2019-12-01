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

class LanguageController extends Controller
{
    public function getList(){
        $language = Language::all();
        return view('admin.language.list', ['language'=>$language]);
    }

    public function getAdd(){
        return view('admin.language.add');
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
        $language = new Language;
        $language->name = $request->name;   
        
        $language->save();

        return redirect('admin/language/add')->with('thongbao', 'You added a category successly!');
    }

    public function getEdit($id){
        $language = Language::find($id);
        return view('admin.language.edit', ['language'=>$language]);
    }

    public function postEdit(Request $request, $id){
        $language = Language::find($id);

        $this->validate($request, 
        [
            'name'=>'required|min:3|max:100'
        ], 
        [
            'name.required' => 'Ban chua nhap ten the loai',
            'name.min' => 'Do dai ten the loai phai tu 3 den 100 ki tu',
            'name.max' => 'Do dai ten the loai phai tu 3 den 100 ki tu'
        ]);

        $language->name = $request->name;

        $language->save();

        return redirect('admin/language/edit/'.$id)->with('thongbao', 'You edited a category successly!');
    }

    public function getDelete($id){
        $language = Language::find($id);
        $language->delete();

        return redirect('admin/language/list')->with('thongbao', 'You deleted a category successly!');
    }
}

