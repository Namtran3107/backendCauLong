<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\brand;
use App\Models\Weight;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->product = new product; // Tiêm Model Product vào thuộc tính $product
    }
    public function view_product_admin(){
        $product = product::all();

        return view('admin.product-post')->with('product', $product);
    }

    public function view_product(Request $request)
    {
        $brand = $request->input('name_brand');
        $prices = $request->input('price');
        $weight = $request->input('weight');
        
        $product = $this->product->getAllProduct($brand, $prices, $weight);
        
        $brand = brand::all();
        $weight = Weight::all();
        // dd( $prices);
        // Trả về kết quả cho view
        return view('batminton.product', ['product' => $product, 'brand' => $brand, 'weight' => $weight]);
    }
    
    public function view_product_index(){
        $product = product::all();
            return view('batminton.index',['product'=>$product]);
    }

    public function product_detail($id = null, $slug = null){
        $product = product::find($id);
        return view('batminton.product_detail',['product'=>$product]);
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
        return view('batminton.index',['product_dt'=>$product_detail]);
    }
}
