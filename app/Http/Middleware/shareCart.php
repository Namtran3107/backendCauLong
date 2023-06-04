<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class shareCart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $cart_customer = [];
        $id_customer = session('login_customers_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $cart = Cart::all();
        foreach ($cart as $cart_item) {  
            if($cart_item->id_customer == $id_customer){
                $cart_customer[] = [
                    'id_product' => $cart_item->id_product,
                    'id_cart' => $cart_item->id,
                ];
            }
        }
        $cart_product = [];
        $product = Product::all();
        foreach ($cart_customer as $item) {
            foreach ($product as $productItem) {
                if($item['id_product'] == $productItem->id){
                    $cart_product[] = [
                        'id_cart' => $item['id_cart'],
                        'id_product' => $productItem->id,
                        'name_product' => $productItem->name_product,
                        'prices_product' => $productItem->prices_product,
                        'img_product' => $productItem->img_product,
                        'quantity_product' => $productItem->quantity_product,
                        'brand_product' => $productItem->brand_product,
                        'summary_product' => $productItem->summary_product,
                    ];
                }
            }
        }
        $id_customer = session('login_customers_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $customer = Customer::find($id_customer);
        // Session::forget('result');
        // Session::put('result', $cart_customer);
        view()->share('view_cart', $cart_product);
        view()->share('view_customer', $customer);
        return $next($request);
    }
    
}
