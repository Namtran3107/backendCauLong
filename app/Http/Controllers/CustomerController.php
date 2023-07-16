<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order_product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function create_customer(Request $request){
        //Kiểm tra thông tin username và password
    	$data = $request->validate([
            'customer_fullname'=>'required',
            'customer_email'=>'required',
            'password'=>'required',
            'customer_address'=> "string",
            'customer_phone'=>'required'
        ]);

    	//Mã hoá password
        $data['customer_address'] = 'Không có';
    	$data['password'] = bcrypt($data['password']);
        if($request->filled('password', 'customer_fullname', 'customer_email', 'customer_phone')){
            Customer::create($data);
            return redirect('/login')->with('success','Create new user successfully!');
        }else{
            return redirect('/register')->with('error','Failed to create account.');
        }
    	
    }

    public function check_login(Request $request){
        // Kiểm tra thông tin email và password nhập hợp lệ
        $data = $request->validate([
            'customer_email' => 'required',
            'customer_password' => 'required'
        ]);
    
        // Kiểm tra thông tin email và password trong database
        if (auth::guard('customers')->attempt([
            'customer_email' => $data['customer_email'],
            'password' => $data['customer_password']
        ])) {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'Login successfully!');
        } else {
            return back()->with('error', 'Login failure.');
        }
    }
    public function logout(Request $request){
        Session::forget('login_customers_59ba36addc2b2f9401580f014c7f58ea4e30989d');
    	return redirect('/login')->with('success','You are now logged out.');
    }
    public function view_customer(){
        if(auth::guard('customers')->check()) {
            $id_customer = session('login_customers_59ba36addc2b2f9401580f014c7f58ea4e30989d');
            $customer = Customer::find($id_customer);

            $order = Order_product::where('id_customer', $id_customer)->get();

            return view('batminton.information')->with('customer', $customer)->with('order', $order);
        }
        else {
            return redirect()->route('login');
        }
    }
    public function admin_view_customer(){
        $customer = Customer::all();
        return view('admin.member')->with('customer', $customer);
    }
    public function delete_member($id){
        $member = Customer::find($id);
        $member->delete();
        $success = 'Delete contact successfully.';
        return redirect('/admin_member')->with('success',$success);
    }
    public function edit_customer(Request $request, $id){
        $customer = Customer::find($id);
        $customer->customer_fullname = $request['fullname'];
        $customer->customer_phone = $request['phone'];
        $customer->customer_address = $request['address'];
        $customer->save();
        return redirect('/information')->with('success', 'Change information sucess');
    }
}
