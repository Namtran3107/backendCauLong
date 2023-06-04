<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order_product;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function view_order(){
        $order = Order_product::all();
        $product = Product::all();
        $array_product = [];
        foreach($order as $order){
            $array_id = preg_split("/-/", $order->id_product);
            foreach($product as $productItem){
                foreach($array_id as $id){
                    if($id == $productItem->id){
                        $array_product[] = [
                            'id_order' => $order->id,
                            'prices_customer' => $order->prices_customer_order,
                            'id_customer' => $order->id_customer,
                            'name_product' => $productItem->name_product,
                            'prices_product' => $productItem->prices_product
                        ];
                    }
                }
            }
        }
        $order = Order_product::all();
        // Session::forget('result');
        Session::put('result', $array_product);
        return view('admin.donhang')->with('order', $order)->with('array_product', $array_product);
    }
    public function delete_order($id){
        $order = Order_product::find($id);
        $order->delete();
        $success = 'Delete successfully.';
        return redirect('/admin_cart')->with('success',$success);
    }
}
