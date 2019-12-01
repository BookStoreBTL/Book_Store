<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Redirect;


class UserController extends Controller
{
    public function getList(){
        $user = User::all();
        return view('admin.user.list', ['user'=>$user]);
    }
    
    public function getEdit($id){
        $user = User::find($id);
        return view('admin.user.edit', ['user'=>$user]);
    }
    
    public function postEdit(Request $request, $id){
        $user = User::find($id);
    
        $user->level = $request->level;
    
        $user->save();
    
        return redirect('admin/user/edit/'.$id)->with('thongbao', 'You edited a category successly!');
    }
    
    public function getDelete($id){
        $book = Book::find($id);
        $book->delete();
    
        return redirect('admin/book/list')->with('thongbao', 'You deleted a category successly!');
    }

    public function getLoginAdmin(){
        return view('admin.login');
    }

    public function postLoginAdmin(Request $request){
        $this->validate($request, 
        [
            'email'=>'required',
            'password'=>'required'
        ], 
        [
            'email.required' => 'Ban chua nhap email',
            'password.required'=>'Ban chua nhap password'
        ]);
        
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect('admin/book/list');
        }else{
            return redirect('admin/login')->with('thongbao', 'Dang nhap khong thanh cong');
        }

    }

    public function getLogoutAdmin(){
        Auth::logout();
        return redirect('admin/login');
    }

    public function getChangePassword(){
        return view('admin/changePassword');
    }

    public function postChangePassword(Request $request, $id){
        $user = User::find($id);

        $this->validate($request, 
        [
            'old_password'=>['required', function ($attribute, $value, $fail) {
                if (!\Hash::check($value, Auth::user()->password)) {
                    return $fail(__('The current password is incorrect.'));
                }
            }],
            'new_password'=>'required|min:3|max:32',
            'cf_password'=>'required|same:new_password'
        ], 
        [
            'old_password.required'=>'Ban chua nhap password',
            'new_password.required'=>'Ban chua nhap password',
            'new_password.min'=>'Do dai ten phai lon hon 3 ki tu',
            'new_password.max'=>'Do dai ten phai toi da 32 ki tu',
            'cf_password.required'=>'Ban chua nhap lai password',
            'cf_password-again.same'=>'Nhap lai mat khau chua khop',
        ]);
        
        $user->password = bcrypt($request->new_password);
        $user->save();

        return redirect('admin.login')->with('thongbao', 'Changed Password susscessly!');

    }
}