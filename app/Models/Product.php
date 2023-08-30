<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 
use DB;

class Product extends Model
{
    protected $table = 'product';
    const UPDATED_AT = null;
    const CREATED_AT = NULL;


    function getAllProduct($brand, $prices, $weight){
        $product = DB::table($this->table);

        if (!empty($brand)) {
            $product = $product->whereIn('brand_product', $brand);
        }
        if (!empty($prices)) {
            $pricesRange = [];
            foreach($prices as $prices){
                $priceArr = explode('~', $prices);
                $minPrice = (int) $priceArr[0];
                $maxPrice = (int) $priceArr[1];
                if($maxPrice === 0){
                    $maxPrice = 100000000;
                }
                $priceRanges[] = [$minPrice, $maxPrice];
            }
            foreach ($priceRanges as $range) {
                $minPrice = $range[0];
                $maxPrice = $range[1];
                $product = $product->whereBetween('prices_product', [$minPrice, $maxPrice]);
            }
            $product = $product;
        }
        if (!empty($weight)) {
            $product = $product->whereIn('weight_name', $weight);
        }
        
        // dd($product);
        return $product->paginate(12);
    }

    use HasFactory;
}
