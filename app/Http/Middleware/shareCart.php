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
        $id_customer = session('login_customers_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $cart = DB::select('select * from cart where id_customer = ?', [$id_customer]);
        foreach ($cart as $cart_item) { 
            $cart_customer[] = [
                'id_product' => $cart_item->id_product,
                'id_cart' => $cart_item->id,
            ];
            
        }
        $cart_customer = [];
        foreach ($cart_customer as $item) {
            $product = Product::find($item['id_product']);
            $cart_product[] = $product;
        }
        $customer = Customer::find($id_customer);
        view()->share('view_cart', $cart_customer);
        return $next($request);
    }
    
}
