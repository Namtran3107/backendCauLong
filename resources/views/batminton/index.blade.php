@extends('batminton.layout')
@section('content')
            <div id="header-slide-all">
                <div id="carouselId" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselId" data-slide-to="1"></li>
                        <li data-target="#carouselId" data-slide-to="2"></li>
                        <li data-target="#carouselId" data-slide-to="3"></li>
                    </ul>
                    <div class="carousel-inner" role="listbox">
                        <a href="" class="carousel-item active">
                            <img src="./img/Capture.PNG" alt="First slide">
                        </a>
                        <a href="" class="carousel-item">
                            <img src="./img/Capture2.PNG" alt="Second slide">
                        </a>
                        <a href="" class="carousel-item">
                            <img src="./img/Capture3.PNG" alt="Third slide">
                        </a>
                        <a href="" class="carousel-item">
                            <img src="./img/Capture3.PNG" alt="Third slide">
                        </a>
                    </div>
                    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div id="body-product">
                <div id="body-product-trailer-new">
                    <div class="content-new-product">
                        <a href="" class="name-content-news">Sản phẩm mới</a>
                    </div>
                    <div class="product-trailer-new">
                        <div class="product-trailer-new-background">
                            <div class="product-trailer-new-list-all">
                                <ul class="product-trailer-new-list">
                                    @php
                                    $num = 0;
                                    @endphp
                                    @foreach($product as $prd)
                                    @php
                                    if($num == 8){
                                        break;
                                    }
                                    $string = str_replace(' ', '-', $prd->name_product);
                                    @endphp
                                    <li class="product-trailer-new-item">
                                        <div class="product-new-item-box">
                                            <a href="/product_detail/{{$prd->id}}-{{$string}}" class="product-new-item-box-img">
                                                <img src="storage/public_img/{{$prd->img_product}}" alt="" class="product-new-item-img-item">
                                            </a>
                                            <a href="/product_detail/{{$prd->id}}-{{$string}}" class="product-new-item-box-name">{{$prd->name_product}}</a>
                                            <div class="product-new-item-box-prices">{{number_format($prd->prices_product,0,",",".")}} <p style = "margin-left: 5px;">đ</p></div>
                                        </div>
                                    </li>
                                    @php
                                    $num++;
                                    @endphp
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="body-product-list-all">
                    <div class="product-list-link">
                        <ul class="product-link-list-item">
                            <li class="product-link-item">
                                <div class="product-link-box">
                                    <a href="" class="product-link-box-background">
                                        <img src="./img/list-product/product-item1.PNG" alt="" class="product-link-box-img">
                                        <span class="product-link-content-box">
                                            <span class="product-link-content">Vợt Cầu Lông</span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="product-link-item">
                                <div class="product-link-box">
                                    <a href="" class="product-link-box-background">
                                        <img src="./img/list-product/product-item2.png" alt="" class="product-link-box-img">
                                        <span class="product-link-content-box">
                                            <span class="product-link-content">Giày Cầu Lông</span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="product-link-item">
                                <div class="product-link-box">
                                    <a href="" class="product-link-box-background">
                                        <img src="./img/list-product/product-item3.png" alt="" class="product-link-box-img">
                                        <span class="product-link-content-box">
                                            <span class="product-link-content">Áo Cầu Lông</span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="product-link-item">
                                <div class="product-link-box">
                                    <a href="" class="product-link-box-background">
                                        <img src="./img/list-product/product-item4.png" alt="" class="product-link-box-img">
                                        <span class="product-link-content-box">
                                            <span class="product-link-content">Váy Cầu Lông</span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="product-link-item">
                                <div class="product-link-box">
                                    <a href="" class="product-link-box-background">
                                        <img src="./img/list-product/product-item5.png" alt="" class="product-link-box-img">
                                        <span class="product-link-content-box">
                                            <span class="product-link-content">Quần Cầu Lông</span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="product-link-item">
                                <div class="product-link-box">
                                    <a href="" class="product-link-box-background">
                                        <img src="./img/list-product/product-item6.png" alt="" class="product-link-box-img">
                                        <span class="product-link-content-box">
                                            <span class="product-link-content">Túi Vợt Cầu Lông</span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="product-link-item">
                                <div class="product-link-box">
                                    <a href="" class="product-link-box-background">
                                        <img src="./img/list-product/product-item7.png" alt="" class="product-link-box-img">
                                        <span class="product-link-content-box">
                                            <span class="product-link-content">Balo Cầu Lông</span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="product-link-item">
                                <div class="product-link-box">
                                    <a href="" class="product-link-box-background">
                                        <img src="./img/list-product/product-item8.png" alt="" class="product-link-box-img">
                                        <span class="product-link-content-box">
                                            <span class="product-link-content">Phụ Kiện Cầu Lông</span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div id="body-product-sale-off">
                    <div class="product-sale-off-content">
                        <a href="" class="sale-off-name-content">Sale off</a>
                    </div>
                    <div class="product-sale-off-list-all">
                        <div class="product-sale-off-list">
                            <a href="" class="product-sale-off-item">
                                <img src="./img/sale-off/sale-off1.PNG" alt="" class="product-sale-off-img">
                            </a>
                            <a href="" class="product-sale-off-item">
                                <img src="./img/sale-off/sale-off2.png" alt="" class="product-sale-off-img">
                            </a>
                            <a href="" class="product-sale-off-item">
                                <img src="./img/sale-off/sale-off3.png" alt="" class="product-sale-off-img">
                            </a>
                        </div>
                    </div>
                </div>
                <div id="body-news-paper">
                    <div class="news-paper-content">
                        <a href="" class="news-paper-name-content">Tin tức mới</a>
                    </div>
                    <div class="news-paper-list-all">
                        <div class="news-paper-list-all-son">
                            <div class="news-paper-list">
                                <a href="" class="news-paper-item">
                                    <img src="./img/news-paper/news-paper1.PNG" alt="" class="news-paper-img">
                                </a>
                                <div class="news-paper-recommend">
                                    <div class="news-paper-recommend-son">
                                        <a href="" class="news-paper-recommend-header">Những mẫu vợt cầu lông công thủ toàn diện tốt đến từ thương hiệu Mizuno</a>
                                        <span class="news-paper-recommend-day-time">11-11-2022 19:27:42</span>
                                        <div class="news-paper-recommend-text">Ngoài những cây vợt chuyên công nổi tiếng như 11 Power, JPX RESERVE EDITION,... thì Mizuno cũng sản ...		</div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-paper-list">
                                <a href="" class="news-paper-item">
                                    <img src="./img/news-paper/news-paper2.jpg" alt="" class="news-paper-img">
                                </a>
                                <div class="news-paper-recommend">
                                    <div class="news-paper-recommend-son">
                                        <a href="" class="news-paper-recommend-header">Top vợt cầu lông thiên về công trọng lượng 3U - Cho uy lực tấn công áp đảo</a>
                                        <span class="news-paper-recommend-day-time">10-11-2022 18:45:11</span>
                                        <div class="news-paper-recommend-text">Một cây vợt cầu lông nặng đầu - thân cứng - trọng lượng 3U chắc chắn sẽ là một siêu phẩm thiên công ...		</div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-paper-list">
                                <a href="" class="news-paper-item">
                                    <img src="./img/news-paper/news-paper3.jpg" alt="" class="news-paper-img">
                                </a>
                                <div class="news-paper-recommend">
                                    <div class="news-paper-recommend-son">
                                        <a href="" class="news-paper-recommend-header">Vợt cầu lông công thủ toàn diện tốt trên thị trường</a>
                                        <span class="news-paper-recommend-day-time">09-11-2022 16:23:33</span>
                                        <div class="news-paper-recommend-text">Lối đánh công thủ toàn diện là một lối đánh hiện quả. Vừa có thể tấn công đập cầu hiểm hóc, vừa có t...		</div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-paper-list">
                                <a href="" class="news-paper-item">
                                    <img src="./img/news-paper/news-paper4.jpg" alt="" class="news-paper-img">
                                </a>
                                <div class="news-paper-recommend">
                                    <div class="news-paper-recommend-son">
                                        <a href="" class="news-paper-recommend-header">Giày cầu lông giá rẻ dưới 500k đáng cân nhắc</a>
                                        <span class="news-paper-recommend-day-time">09-11-2022 15:02:49</span>
                                        <div class="news-paper-recommend-text">Chỉ với chưa đến 500k bạn hoàn toàn có thể sở hữu một đôi giày cầu lông chất lượng, đảm bảo độ bền, ...		</div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-paper-list">
                                <a href="" class="news-paper-item">
                                    <img src="./img/news-paper/news-paper1.PNG" alt="" class="news-paper-img">
                                </a>
                                <div class="news-paper-recommend">
                                    <div class="news-paper-recommend-son">
                                        <a href="" class="news-paper-recommend-header">Giày cầu lông giá rẻ dưới 500k đáng cân nhắc</a>
                                        <span class="news-paper-recommend-day-time">09-11-2022 16:23:33</span>
                                        <div class="news-paper-recommend-text">Ngoài những cây vợt chuyên công nổi tiếng như 11 Power, JPX RESERVE EDITION,... thì Mizuno cũng sản ...		</div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-paper-list">
                                <a href="" class="news-paper-item">
                                    <img src="./img/news-paper/news-paper1.PNG" alt="" class="news-paper-img">
                                </a>
                                <div class="news-paper-recommend">
                                    <div class="news-paper-recommend-son">
                                        <a href="" class="news-paper-recommend-header">Những mẫu vợt cầu lông công thủ toàn diện tốt đến từ thương hiệu Mizuno</a>
                                        <span class="news-paper-recommend-day-time">11-11-2022 19:27:42</span>
                                        <div class="news-paper-recommend-text">Ngoài những cây vợt chuyên công nổi tiếng như 11 Power, JPX RESERVE EDITION,... thì Mizuno cũng sản ...		</div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-paper-list">
                                <a href="" class="news-paper-item">
                                    <img src="./img/news-paper/news-paper1.PNG" alt="" class="news-paper-img">
                                </a>
                                <div class="news-paper-recommend">
                                    <div class="news-paper-recommend-son">
                                        <a href="" class="news-paper-recommend-header">Những mẫu vợt cầu lông công thủ toàn diện tốt đến từ thương hiệu Mizuno</a>
                                        <span class="news-paper-recommend-day-time">11-11-2022 19:27:42</span>
                                        <div class="news-paper-recommend-text">Ngoài những cây vợt chuyên công nổi tiếng như 11 Power, JPX RESERVE EDITION,... thì Mizuno cũng sản ...		</div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-paper-list">
                                <a href="" class="news-paper-item">
                                    <img src="./img/news-paper/news-paper1.PNG" alt="" class="news-paper-img">
                                </a>
                                <div class="news-paper-recommend">
                                    <div class="news-paper-recommend-son">
                                        <a href="" class="news-paper-recommend-header">Những mẫu vợt cầu lông công thủ toàn diện tốt đến từ thương hiệu Mizuno</a>
                                        <span class="news-paper-recommend-day-time">11-11-2022 19:27:42</span>
                                        <div class="news-paper-recommend-text">Ngoài những cây vợt chuyên công nổi tiếng như 11 Power, JPX RESERVE EDITION,... thì Mizuno cũng sản ...		</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection