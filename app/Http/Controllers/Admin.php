<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Order_product;
use App\Models\contact;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


class Admin extends Controller
{
	// public function view_admin(){
	// 	$admin = admin::all();
	// 	return view('admin.index',['admin'=>$admin]);
	// }
    public function create_user(Request $request){
    	//Kiểm tra thông tin username và password
    	$data = $request->validate(['user_name'=>'required','user_email'=>'required','password'=>'required']);

    	//Mã hoá password
    	$data['password'] = bcrypt($data['password']);
    	User::create($data);
    	return redirect('/admin_login')->with('success','Create new user successfully!');
    }
    public function check_login(Request $request){
    	//Kiểm tra thông tin username và password nhập hợp lệ
    	$data = $request->validate(['user_email'=>'required','password'=>'required']);

    	//Kiểm tra thông tin username và password trong database
    	if(auth()->attempt(['user_email'=>$data['user_email'],
                            'password'=>$data['password']])){
    		$request->session()->regenerate();
    		return redirect('/admin')->with('success','Login successfully!');
    	}else {
    		return redirect()->route('/admin_login')->with('failure','Login failure.');
    	}
    }
    public function logout(){
    	auth()->logout();
    	return redirect('/admin_login')->with('success','You are now logged out.');
    }

	public function view_total(){
		$order = Order_product::all();
		$product = product::all();
		$contacts = contact::all();
		return view('admin.index')->with('order', $order)->with('product', $product)->with('contacts', $contacts);
	}
    
}
