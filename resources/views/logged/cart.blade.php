@extends('logged.layout')
@section('content')
            <link rel="stylesheet" href="./bmt/product.css">
            <link rel="stylesheet" href="./bmt/cart.css">
            <div id="body-carg-all">
                <div class="header-menu-website-bottom-background"></div>
                <div id="body-cart-list">
                    <div class="Notification-add">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @else
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                        @endif
                    </div>
                    <div class="content-header-cart-list">
                        <span class="content-header-cart-item">GIỎ HÀNG CỦA BẠN</span>
                    </div>
                    <div class="body-cart-product-list">
                        <div class="body-cart-product-item">
                            <div class="body-cart-content-cart">GIỎ HÀNG</div>
                            <ul class="body-product-img-name-prices">
                                @foreach($view_cart as $item)
                                <form action="/delete-cart-product/{{ $item['id_cart'] }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class ="click-delete-cart" type="submit"><div class="ti-close"></div></button>
                                    <li class="body-product-img-name-prices-all">
                                        <input type="hidden" class = "body-product-id-son" value = "{{ $item['id_product'] }}">
                                        <img src= "/img/sell-product/item1.jpg" class="body-product-img-son">
                                        <div class="body-product-son">{{ $item['name_product'] }}</div>
                                        <div class="body-product-prices-son"><p class = "get-money-cart">{{number_format($item['prices_product'],0,",",".")}}<p style = "margin-left: 5px;">đ</p></p></div>
                                    </li>
                                </form>
                                @endforeach
                            </ul>
                        </div>
                        <div class="body-cart-logo-item">
                            <div class="cart-total-content-prices">
                                <div class="cart-total-content">Tổng tiền:</div>
                                <div class="cart-total-prices-all">
                                    <div class="cart-total-prices-cart">2.665.000</div>
                                    <p style = "margin-left: 5px; margin-bottom: 0">đ</p>
                                </div>
                            </div>
                            <form action="/order-cart" method = "POST">
                                @csrf
                                <input name = "id_customer" type="hidden" value = "{{ session('login_customers_59ba36addc2b2f9401580f014c7f58ea4e30989d') }}" class = "id-customer-buy">
                                <input name = "email" type="hidden" value = "{{ $view_customer->customer_email }}" class = "email-customer-buy">
                                <input name = "phone" type="hidden" value = "{{ $view_customer->customer_phone }}" class = "phone-customer-buy">
                                <input name = "address" type="hidden" value = "{{ $view_customer->customer_address }}" class = "address-customer-buy">
                                <input name = "prices" type="hidden" value = "" class = "prices-customer-buy">
                                <input name = "total_id_product" type="hidden" value = "" class = "total-id-product">
                                <div class="cart-buy" style = "padding: 0;"><button type = "submit">Đặt hàng</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function totalMoney(){
                    let totalProduct = 0;
                    const arrayMoney = [];
                    const getMoney = document.querySelectorAll(".get-money");
                    getMoney.forEach(element => {
                        const moneyItem = element.textContent;
                        arrayMoney.push(parseInt(moneyItem.replace(/\./g, '')));
                    });
                    let total = 0;
                    arrayMoney.forEach(item => {
                        total += item;
                    });
                    document.querySelector(".prices-customer-buy").value = total;
                    document.querySelector(".cart-total-prices-cart").innerHTML = total.toLocaleString('vi-VN');
                }
                totalMoney();

                function concatProduct(){
                    const getIdProduct = document.querySelectorAll(".body-product-id-son");
                    const totalProduct = [];
                    getIdProduct.forEach(item => {
                        totalProduct.push(item.value);
                    });
                    const result = totalProduct.join('-');
                    document.querySelector(".total-id-product").value = result;
                }
                concatProduct();
            </script>
@endsection