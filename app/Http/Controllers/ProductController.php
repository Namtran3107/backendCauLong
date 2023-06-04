<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function view_product_admin(){
        $product = product::all();
        return view('admin.product-post')->with('product', $product);
    }

    public function view_product(){
        $product = product::all();
        
        if(Auth::guard('customers')->check()) {
            return view('logged.product',['product'=>$product]);
        }
        else {
            return view('batminton.product',['product'=>$product]);
        }
        
    }
    public function view_product_index(){
        $product = product::all();
        
        if(Auth::guard('customers')->check()) {
            return view('logged.index',['product'=>$product]);
        }
        else {
            return view('batminton.index',['product'=>$product]);
        }
        
    }

    public function product_detail($id = null, $slug = null){
        
        if(Auth::guard('customers')->check()) {
            $product = product::find($id);
            return view('logged.product_detail',['product'=>$product]);
        }
        else {
            $product = product::find($id);
            return view('batminton.product_detail',['product'=>$product]);
        }
        
    }

    public function create_product(Request $request){
        
        $product = new product;
        $product->name_product=$request['name_product'];
        $product->prices_product=$request['prices_product'];
        $product->quantity_product=$request['quantity_product'];
        $product->brand_product=$request['brand_product'];
        $product->summary_product=$request['summary_product'];

        // img
        $img_temp = pathinfo($request->img_product->getClientOriginalName());
        $request->img_product->storeAs('public/public_img/',time().$img_temp['basename']);
        $product->img_product =time().$img_temp['basename'];

        $product->save();
        $success = 'Product created successfully.';
        return redirect('/admin_product')->with('success',$success);
        
    }

    public function edit_product(Request $request, $id){

        $product = product::find($id);
        $product->name_product=$request['name_product'];
        $product->prices_product=$request['prices_product'];
        $product->quantity_product=$request['quantity_product'];
        $product->brand_product=$request['brand_product'];
        $product->summary_product=$request['summary_product'];

        $product->save();
        return redirect('/admin_product');
    }

    public function delete_product($id){

        $product = product::find($id);
        $product->img_product!=""?Storage::delete('public/public_img/'.$product->img_product):"";
        $product->delete();
        $success = 'Delete successfully.';
        return redirect('/admin_product')->with('success',$success);
    }   
    public function view_product_detail($id)
    {
        $product_detail = Product::find($id);
        return view('employee.index',['product_dt'=>$product_detail]);
    }
}
