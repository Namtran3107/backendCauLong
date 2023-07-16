<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order_product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function add_cart($id = null){
        if(!Auth::guard('customers')->check()) {
            return redirect()->route('login');
        }else{
            $id_customer = session('login_customers_59ba36addc2b2f9401580f014c7f58ea4e30989d');
            $cart = new cart();
            $cart->id_customer = $id_customer;
            $cart->id_product = $id;
            $cart->save();
            return back();
        }
    }
    public function delete_cart_product($id = null){
        $cart = Cart::find($id);
        $cart->delete();
        return back();
    }
    public function order_product(Request $request){
        $order = new Order_product();
        $order->id_customer = $request['id_customer'];
        $order->prices_customer_order = $request['prices'];
        $order->email_customer_order = $request['email'];
        $order->phone_customer_order = $request['phone'];
        $order->address_customer_order = $request['address'];
        $order->id_product = $request['total_id_product'];

        if ($order->id_product != "") {
            // Lưu thành công
            $order->save();
            $cart = Cart::where('id_customer', $request['id_customer'])->delete();
            return back()->with('success', 'Order saved successfully!');
        } else {
            // Lưu thất bại
            return back()->with('error', 'Failed to save order.');
        }
    }
    
}
