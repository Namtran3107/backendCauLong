<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [ProductController::class,'view_product_index'])->name('index');

Route::post('/product',[ProductController::class,'view_product']);
Route::get('/product',[ProductController::class,'view_product']);

Route::get('/recomend', function () {
    return view('batminton.recomend');
});
Route::get('/contact', [ContactController::class, 'view_contact_template']);

Route::get('/login', function () {
    if(Auth::guard('customers')->check()) {
        return redirect()->route('index');
    }
    else {
        return view('batminton.login');
    }
})->name('login');



Route::get('/register', function () {
    if(Auth::guard('customers')->check()) {
        return redirect()->route('index');
    }
    else {
        return view('batminton.register');
    }
});

Route::get('/cart', function () {
    return view('batminton.cart');
});

Route::get('/information', [CustomerController::class, 'view_customer']);

Route::put('/information_edit/{id}', [CustomerController::class, 'edit_customer']);

Route::get('/product_detail/{id?}-{slug?}', [ProductController::class,'product_detail']);

Route::get('/add_cart/{id?}', [CartController::class, 'add_cart']);

// Route::middleware(['guest'])->group(function () {
// });


Route::get('/check', function () {
    $sessionData = session()->all();
    dd($sessionData);
});
// Đăng nhập đăng kí logout
Route::post('/check_login', [CustomerController::class, 'check_login']);

Route::post('/register_customer', [CustomerController::class, 'create_customer']);

Route::get('/logout', [CustomerController::class, 'logout']);

// GỬi liên hệ
Route::post('/create_contact',[ContactController::class,'create_contact']);

// xoá sản phẩm trong giỏ hàng
Route::delete('/delete-cart-product/{id}', [CartController::class, 'delete_cart_product']);

// Đặt hàng

Route::post('/order-cart', [CartController::class, 'order_product']);



// Trang admin 
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [Admin::class,'view_total']);
    Route::get('/admin_cart', [OrderController::class,'view_order']);
    Route::get('/admin_member', [CustomerController::class,'admin_view_customer']);
    Route::get('/admin_product', [ProductController::class,'view_product_admin']);

    Route::get('/profile', function () {
        return view('admin.profile');
    });
    Route::get('/admin_contact',[ContactController::class,'view_contact']);
});


Route::get('/admin_login', function () {
    return view('admin.login');
})->name('admin_login');
// Route::get('/admin_register', function () {
    //     return view('admin.register');
    // });
    
Route::delete('/del_contact/{id}',[ContactController::class,'delete_contact']);
Route::delete('/del_member/{id}',[CustomerController::class,'delete_member']);
Route::post('/create_product',[ProductController::class,'create_product']);
Route::put('/edit_product/{id_product}',[ProductController::class,'edit_product']);
Route::delete('/delete_product/{id_product}',[ProductController::class,'delete_product']);
Route::delete('/delete_order/{id_order}',[OrderController::class,'delete_order']);

Route::post('/check_adminlogin', [Admin::class, 'check_login']);

Route::post('/admin_create_register', [Admin::class, 'create_user']);

Route::get('/admin_logout',[Admin::class, 'logout']);

