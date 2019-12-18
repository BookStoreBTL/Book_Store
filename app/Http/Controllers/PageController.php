<?php

namespace App\Http\Controllers;
use App\Book;
use App\User;
use App\Cart;
use App\Author;
use App\Language;
use App\Category;
use App\Order;
use App\OrderDetail;
use Session;
use Hash;
use Auth;
use Input;
use Carbon\Carbon;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        $book = Book::paginate(8);
        $book_month = Book::where('author_id',1)->get();
        return view('main.home', compact('book','book_month')); 
    }

    public function getBooks() {
        $books = Book::paginate(8);
        $authors = Author::all();
        $language = Language::all();
        $category = Category::all();
        return view('main.book', compact('books','authors','language','category'));
    }

    public function getBookDetails(Request $req) {
        $book_detail = Book::where('id', $req->id)->first();
        $books_relate = Book::where('category_id', $book_detail->category_id)->paginate(6);
        return view('main.book-detail',compact('book_detail','books_relate'));
    }

    public function getAddCart(Cart $cart, $id) {
        $book = Book::find($id);
        $cart->add($book);
        return redirect()->back()->with('success','thanh cong');
    }

    public function getRemoveCart(Cart $cart, $id) {
        $cart->remove($id);
        return redirect()->back();
    }

    public function getUpdateCart(Cart $cart, $id) {
        $quantity = request()->quantity ? request()->quantity : 1; 
        $cart->update($id, $quantity);
        return redirect()->back();
    }

    public function getClearCart(Cart $cart) {
        $cart->clear();
        return redirect()->back();
    }

    public function getViewCart() {
        return view('main.cart');
    }


    // public function getAddCart(Request $req, $id) {
    //     $book = Book::find($id);
    //     $oldCart = Session('cart')?Session::get('cart'):null;
    //     $cart = new Cart($oldCart);
    //     $cart->add($book, $id);
    //     $req->session()->put('cart',$cart);
    //     return redirect()->back()->with('success','thanh cong');
    // }

    // public function getCart() {
    //     return view('main.cart');
    // }


    // public function getDelCart($id) {
    //     $oldCart = Session::has('cart')?Session::get('cart'):null;
    //     $cart = new Cart($oldCart);
    //     $cart->delete($id);
    //     if(count($cart->items)>0) {
    //         Session::put('cart', $cart);
    //     } else {
    //         Session::forget('cart');
    //     }
        
    //     return redirect()->back();
    // }
    

    public function getRegister() {
        return view('main.register');
    }

    public function postRegister(Request $req) {
        $this->validate($req,
            [
                'name'=>'required',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'repassword'=>'required|same:password'
            ],
            [
                'name.required'=>'Vui lòng nhập tên',
                'email.required'=>"Vui lòng nhập email",
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'repassword.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu không quá 20 kí tự'
            ]
            );
        $user = new User();
        $user->user_name = $req->name;
        $user->password = Hash::make($req->password);
        $user->phone_number = $req->phone;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->save();
        return redirect()->back()->with('thanhcong','Register success');
    
    }

    public function getLogin() {
        return view('main.login');
    }

    public function postLogin(Request $req) {
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu có ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu có không quá 20 kí tự'
            ]);
            $credentials = array('email'=>$req->email,'password'=>$req->password);
            if(Auth::attempt($credentials)) {
                return redirect()->back()->with('thanhcong','Đăng nhập thành công');
            } else {
                return redirect()->back()->with('kthanhcong','Đăng nhập không thành công');
            }
    }

    public function postCheckout(Request $req) {
        $ship_date = Carbon::now();
        $ship_date->day = Carbon::now()->day + 5;
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->order_date = Carbon::now();
        $order->shipped_date = $ship_date;
        $order->status = "Shipping";
        $order->save();

        $cart = Session::get('cart');
        foreach($cart as $item) {
            $order_detail = new OrderDetail();
            $order_detail->order_id = $order->id;
            $order_detail->book_id = $item['id'];
            $order_detail->quantity_order = $item['quantity'];
        }

        $order_detail->save();
        return view('main.checkout');
    }

    public function getLogout() {
        Auth::logout();
        return redirect()->route('home');
    }


    public function getSearch(Request $req) {
        $product = Book::where('name', 'like','%'.$req->search.'%')->orWhere('price',$req->search)->paginate(4);
        return view('main.search-result', compact('product'));
    }

    public function postTest() {
        return view(main.home);
    }
}
