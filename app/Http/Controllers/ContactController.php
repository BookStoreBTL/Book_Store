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
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ContactController extends Controller
{
    public function getList(){
        $contact = Contact::all();
        return view('admin.contact.list', ['contact'=>$contact]);
    }

    public function getEdit($id){
        $contact = Contact::find($id);
        return view('admin.contact.edit', ['contact'=>$contact]);
    }

    public function postEdit(Request $request, $id){
        $contact = Contact::find($id);

        $contact->status = $request->status;

        $contact->save();

        return redirect('admin/contact/edit/'.$id)->with('thongbao', 'You edited a category successly!');
    }

    public function getDelete($id){
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('admin/contact/list')->with('thongbao', 'You deleted a category successly!');
    }
}

