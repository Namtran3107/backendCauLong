@extends('batminton.layout')
@section('content')
            <link rel="stylesheet" href="./bmt/product.css">
            <link rel="stylesheet" href="./bmt/cart.css">
            <div id="body-carg-all">
                <div class="header-menu-website-bottom-background"></div>
                <div id="body-cart-list">
                    <div class="content-header-cart-list">
                        <span class="content-header-cart-item">GIỎ HÀNG CỦA BẠN</span>
                    </div>
                    <div class="body-cart-product-list">
                        <div class="body-cart-product-item"></div>
                        <div class="body-cart-logo-item">
                            <div class="ti-shopping-cart ti-shopping-cart-big"></div>
                            <span class="cart-item-img-text">Không có sản phẩm nào trong giỏ hàng của bạn</span>
                        </div>
                    </div>
                </div>
            </div>
@endsection