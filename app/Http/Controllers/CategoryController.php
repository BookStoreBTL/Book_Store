<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getList(){
        $category = Category::all();
        return view('admin.category.list', ['category'=>$category]);
    }

    public function getAdd(){
        return view('admin.category.add');
    }

    public function postAdd(Request $request){
        $this->validate($request, 
        [
            'name'=>'required|min:3|max:100|unique:category,name'
        ], 
        [
            'name.required' => 'Ban chua nhap ten the loai',
            'name.min' => 'Do dai ten the loai phai tu 3 den 100 ki tu',
            'name.max' => 'Do dai ten the loai phai tu 3 den 100 ki tu',
            'name.unique' => 'Ten the loai da ton tai'
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->save();

        return redirect('admin/category/add')->with('thongbao', 'You added a category successly!');
    }

    public function getEdit($id){
        $category = Category::find($id);
        return view('admin.category.edit', ['category'=>$category]);
    }

    public function postEdit(Request $request, $id){
        $category = Category::find($id);

        $this->validate($request, 
        [
            'name'=>'required|min:3|max:100'
        ], 
        [
            'name.required' => 'Ban chua nhap ten the loai',
            'name.min' => 'Do dai ten the loai phai tu 3 den 100 ki tu',
            'name.max' => 'Do dai ten the loai phai tu 3 den 100 ki tu'
        ]);

        $category->name = $request->name;
        $category->save();

        return redirect('admin/category/edit/'.$id)->with('thongbao', 'You edited a category successly!');
    }

    public function getDelete($id){
        $category = Category::find($id);
        $category->delete();

        return redirect('admin/category/list')->with('thongbao', 'You deleted a category successly!');
    }
}
