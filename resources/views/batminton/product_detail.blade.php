@extends('batminton.layout')
@section('content')
<link rel="stylesheet" href="/bmt/product.css">
<link rel="stylesheet" href="/bmt/product-detail.css">


<div class="body-product-detail-all">
    <div class="header-menu-website-bottom-background"></div>
    <div class="body-product-detail-list">
        <div class="body-product-detail-item">
            <div class="detail-img">
                <img class = "detail-img-set" src="{{ asset('storage/public_img/' . $product->img_product) }}" alt="">
            </div>
            <div class="detail-all">
                <div class="product-detail-content">{{$product->name_product}}</div>
                <div class="product-detail-code">Mã:
                    <p>CLS1<p style = "margin-left: 0;">{{$product->id}}</p></p>
                </div>
                <div class="product-detail-brand">Thương hiệu:
                    <a href="">{{$product->brand_product}}</a>
                </div>
                <div class="product-detail-prices">{{number_format("$product->prices_product",0,",",".")}}<p style = "margin-left:5px">đ</p></div>
                <fieldset class="pro-discount uu_dai">
				<div class="product-promotions-list-content">
				<p>✔ Tặng 2 Quấn cán vợt Cầu Lông: <a href="https://shopvnb.com/quan-can-vot-cau-long-vnb.html">VNB 001</a>, <a href="https://shopvnb.com/quan-can-vot-cau-long-vs1.html">VS002</a> hoặc <a href="https://shopvnb.com/quan-can-joto.html">Joto 001</a></p>

                <p>✔ Sản phẩm cam kết chính hãng</p>

                <p>✔ Tặng bao đơn hoặc bao nhung bảo vệ vợt</p>

                <p>✔ Thanh toán sau khi kiểm tra và nhận hàng (Giao khung vợt)</p>

                <p>✔ Bảo hành chính hãng theo nhà sản xuất (Trừ hàng nội địa, xách tay)</p>										</div>
				</fieldset>
                <div class="product-detail-number-of">
                    <form action="/add_cart/{{$product->id}}">
                        <!-- <input type="hidden" value = "1" name = "id_product"> -->
                        <button type="button" class="dau-tru hai-dau" onclick="minus()">-</button>
                        <input type="text" class="number-of" value="1"> 
                        <button class="dau-cong hai-dau" onclick="plus()">+</button>
                        <button type="submit" class="product-detail-add">THÊM VÀO GIỎ HÀNG</button>
                    </form>
                </div>
                
            </div>
        </div>
        <div class="body-product-recommend-all">
            <div class="product-describe">
                <div class="product-description">MÔ TẢ SẢN PHẨM</div>
                <div class="product-content">1. Giới thiệu vợt cầu lông VS ARMOR POWER 7100 Chính Hãng</div>
                <div class="product-recommend">Vợt cầu lông VS ARMOR POWER 7100 Chính Hãng là mẫu vợt thuộc phân khúc giá rẻ của hãng Venson dành cho người chơi đang tìm kiếm cho mình một cây vợt giá thành mềm nhưng vẫn đảm bảo các yêu cầu cần thiết cơ bản của một cây vợt cầu lông tiêu chuẩn.

Tuy giá thành thấp nhưng VENSON luôn chú trọng tới thiết kế bên ngoài của cây vợt khi. Khả năng chống rung của VS ARMOR POWER 7100 khi tung ra mỗi cú đánh cũng được hãng làm rất tốt.</div>
            </div>
        </div>
    </div>
</div>
<script src="./js/edit.js"></script>
@endsection