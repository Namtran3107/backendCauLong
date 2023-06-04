@extends('logged.layout')
@section('content')
<link rel="stylesheet" href="./bmt/recomend.css">
<link rel="stylesheet" href="./bmt/index.css">
    <div class="container">
        <div class="bodywrap">
                <article class="article-main">
                    <div class="row">
                        <div class="left">
                            <div class="side-right-stick">
                                <div class="aside-content aside-content-blog">
                                    <div class="title-head">
                                        Danh mục tin tức
                                    </div>
                                    <nav class="nav-category">
                                        <ul class="nav navbar-pills">
                                            <li class="nav-item  relative">
                                                <a title="Thông Tin Tổng Hợp Cầu Lông" class="nav-link pr-5" href="tin-tuc.html">Thông Tin Tổng Hợp Cầu Lông</a>
                                            <li class="nav-item  relative">
                                                <a title="Câu Lạc Bộ - Nhóm Cầu Lông" class="nav-link pr-5" href="cau-lac-bo-nhom-cau-long.html">Câu Lạc Bộ - Nhóm Cầu Lông</a>
                                            </li>
                                            <li class="nav-item  relative">
                                                <a title="Thầy Dạy Đánh Cầu Lông" class="nav-link pr-5" href="thay-day-danh-cau-long.html">Thầy Dạy Đánh Cầu Lông</a>
                                            </li>
                                            <li class="nav-item  relative">
                                                <a title="Tin tức CLS1 Sports" class="nav-link pr-5" href="cty.html">Tin tức CLS1 Sports</a>                                           <li class="nav-item  relative">
                                                <a title="Chính sách" class="nav-link pr-5" href="chinh-sach.html">Chính sách</a>
                                            </li>
                                            <li class="nav-item  relative">
                                                <a title="Hướng dẫn" class="nav-link pr-5" href="huong-dan.html">Hướng dẫn</a>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                                <div class="aside-content aside-content-blog">
                                    <div class="title-head">
                                        Danh mục
                                    </div>
                                    <nav class="nav-category">
                                        <ul class="nav navbar-pills">
                                            <li class="nav-item  relative">
                                                <a title="Vợt Cầu Lông" class="nav-link pr-5" href="vot-cau-long.html">Vợt Cầu Lông</a>
                                                
                                            <li class="nav-item  relative">
                                                <a title="Giày Cầu Lông" class="nav-link pr-5" href="giay-cau-long.html">Giày Cầu Lông</a>
                                                
                                            <li class="nav-item  relative">
                                                <a title="Áo Cầu Lông" class="nav-link pr-5" href="ao-cau-long.html">Áo Cầu Lông</a>
                                               
                                            <li class="nav-item  relative">
                                                <a title="Váy cầu lông" class="nav-link pr-5" href="vay-cau-long.html">Váy cầu lông</a>
                                                
                                            <li class="nav-item  relative">
                                                <a title="Quần Cầu Lông" class="nav-link pr-5" href="quan-cau-long.html">Quần Cầu Lông</a>
                                                
                                            <li class="nav-item  relative">
                                                <a title="Túi Vợt Cầu Lông" class="nav-link pr-5" href="tui-vot-cau-long.html">Túi Vợt Cầu Lông</a>
                                                
                                            <li class="nav-item  relative">
                                                <a title="Balo Cầu Lông" class="nav-link pr-5" href="balo-cau-long.html">Balo Cầu Lông</a>
                                                
                                            <li class="nav-item  relative">
                                                <a title="Phụ Kiện Cầu Lông" class="nav-link pr-5" href="phu-kien-cau-long.html">Phụ Kiện Cầu Lông</a>
                                                
                                            <li class="nav-item  relative">
                                                <a title="Giày Running" class="nav-link pr-5" href="giay-running.html">Giày Running</a>
                                            </li>
                                            <li class="nav-item  relative">
                                                <a title="Máy Đan và Thảm Cầu Lông" class="nav-link pr-5" href="may-dan-va-tham-cau-long.html">Máy Đan và Thảm Cầu Lông</a>
                                                
                                            <li class="nav-item  relative">
                                                <a title="Ghế Massage" class="nav-link pr-5" href="ghe-massage.html">Ghế Massage</a>
                                                
                                            <li class="nav-item  relative">
                                                <a title="Máy Massage" class="nav-link pr-5" href="may-massage.html">Máy Massage</a>
                                            </li>
                                            <li class="nav-item  relative">
                                                <a title="Máy Chạy Bộ, Xe Đạp Tập" class="nav-link pr-5" href="may-chay-bo-xe-dap-tap.html">Máy Chạy Bộ, Xe Đạp Tập</a>
                                            </li>
                                            <li class="nav-item  relative">
                                                <a title="Mũ" class="nav-link pr-5" href="mu.html">Mũ</a>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="article-details clearfix">
                                <h1 class="article-title">GIỚI THIỆU</h1>
                                <div class="posts">
                                    <div class="time-post f">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path></svg>                                        29-02-2012 19:31:54 </div>
                                    <div class="time-post">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" class=""></path></svg>
                                        <span>CLS1Sports</span>
                                    </div>
                                </div>
                                <div class="rte">
                                    <h4><em>Bài viết được <a href="https://shopCLS1.com" target="_blank">ShopCLS1</a> - <a href="https://shopCLS1.com/he-thong-cua-hang" target="_blank">Hệ thống shop cầu lông</a> hàng đầu Việt Nam với hơn 53 chi nhánh trên toàn quốc kiểm duyệt và chia sẻ.</em></h4>
                                    <p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">Tháng 12/2011, Forum&nbsp;<a href="https://www.CLS1adminton.com/">https://www.CLS1adminton.com/</a> được thành lập, đây là&nbsp;website cung cấp những thông tin chuyên nghiệp về tin tức và diễn đàn cầu lông.&nbsp;</span>Nhận
                                        thấy sự phát triển của cầu lông trong nước, bên cạnh đó là mong muốn phục vụ tốt hơn cho thành viên và những bạn yêu mến cầu lông. Tháng 12/2012, Ban Quản Trị CLS1adminton đã mạnh dạn xây dựng Shop cầu lông CLS1 (
                                        <a href="https://shopCLS1.com/">https://shopCLS1.com/</a>) để có thể làm được vai trò này. Với kinh nghiệm nhiều năm hoạt động trong lĩnh vực cầu lông, đến với shopCLS1 bạn sẽ yên tâm về chất lượng sản phẩm, đội ngũ tư vấn sản phẩm chuyên nghiệp
                                            và giá cả hợp lý.</span>
                                    </p>
                                    <p><span style="font-size:16px">Bên cạnh một website chuyên nghiệp thì Shop CLS1 còn phát triển thêm 1 kênh fanpage <a href="https://www.facebook.com/caulongCLS1adminton/">https://www.facebook.com/caulongCLS1adminton/</a>&nbsp;để cung cấp thông tin nhanh hơn cho thành viên yêu mến cầu lông. Chính sự chuyên nghiệp này đã được tạo được uy tín rất lớn trong cộng đồng yêu mến cầu lông trong và ngoài nước.</span></p>

                                    <p><span style="font-size:16px">Hiện nay, Hệ thống cửa hàng cầu lông CLS1 đã có&nbsp;hơn 50 chi nhánh trải dài trên khắp mọi miền Đất nước. Với&nbsp;tiêu chí luôn đảm bảo cung cấp đầy đủ các mặt hàng chuyên dụng dành riêng cho bộ môn cầu lông như giày, vợt cầu lông, túi vợt, balo, quần áo, phụ kiện,... nổi trội với nhiều phân khúc giá trải dài từ thấp đến cao&nbsp;nên các lông thủ cần mua gì cứ đến ngay với ShopCLS1, chắc chắn sẽ làm các bạn vô cùng hài lòng.</span></p>

                                    <p><span style="font-size:16px">ShopCLS1 luôn là nơi cung cấp nhanh nhất các mặt hàng hot đến từ những&nbsp;thương hiệu top đầu thế giới như Yonex, Lining, Victor, Mizuno,... Không những vậy các sản phẩm đến từ các hãng tầm trung và giá rẻ như Adidas, Forza, Apacs, CLS1, Kamito,... Shop cầu lông CLS1 cũng luôn cung cấp đầy đủ và mẫu mã rất đa dạng.</span></p>

                                    <p><span style="font-size:16px">* Đặc biệt, ShopCLS1 là địa chỉ nổi tiếng căng vợt cầu lông chuẩn&nbsp;nhất ở Việt Nam. Tất cả các cửa hàng được trang bị máy đan vợt điện tử cao cấp cùng nhân viên ở shop&nbsp;luôn được trau dồi liên tục các kĩ thuật đan vợt hàng đầu trên thế giới.</span></p>

                                    <p style="text-align:center"><span style="font-size:16px"><strong>TẦM NHÌN, SỨ MỆNH VÀ GIÁ TRỊ CỐT LÕI</strong></span></p>

                                    <p><span style="font-size:16px"><strong>TẦM NHÌN</strong>: &nbsp;"Trở thành nhà phân phối và sản xuất thể thao lớn nhất Việt Nam"</span></p>

                                    <p><span style="font-size:16px">- Trở thành đơn vị dẫn đầu cả nước trong lĩnh vực thể thao, giúp nâng cao sức khỏe cộng đồng.</span></p>

                                    <p><span style="font-size:16px">- Tự lực sản xuất các sản phẩm chất lượng cao, phù hợp với nhu cầu của người Việt.</span></p>

                                    <p><span style="font-size:16px">- Xây dựng hệ thống cửa hàng rộng khắp 64 tỉnh thành.</span></p>

                                    <p><span style="font-size:16px"><strong>SỨ MỆNH</strong>: "CLS1 SPORTS cam kết mang đến những sản phẩm, dịch vụ chất lượng tốt nhất phục vụ cho người chơi thể thao để nâng cao sức khỏe của chính mình."</span></p>

                                    <p><span style="font-size:16px"><strong>Đối với thị trường</strong>: Trở thành Thương hiệu cầu lông của người Việt, cung cấp những sản phẩm cầu lông chất lượng tốt nhất, đáp ứng nhu cầu luyện tập cầu lông và chăm sóc sức khỏe của mọi người.</span></p>

                                    <p><span style="font-size:16px"><strong>Đối với đối tác</strong>: Đề cao tinh thần hợp tác cùng phát triển; cô gắng trở thành “Người đồng hành số 1” của các đối tác.</span></p>

                                    <p><span style="font-size:16px"><strong>Đối với nhân viên</strong>: Xây dựng môi trường làm việc chuyên nghiệp, năng động, sáng tạo và nhân văn; tạo điều kiện thu nhập cao và cơ hội phát triển công bằng cho tất cả nhân viên.</span></p>

                                    <p><span style="font-size:16px"><strong>Đối với xã hội</strong>: Hài hòa lợi ích doanh nghiệp với lợi ích xã hội; đóng góp tích cực vào các hoạt động hướng về cộng đồng, thể hiện tinh thần trách nhiệm công dân và niềm tự hào dân tộc.</span></p>

                                    <p><span style="font-size:16px"><strong>GIÁ TRỊ CỐT LÕI: TRUNG - TÍN - TÂM - TRÍ -NHÂN</strong></span></p>

                                    <p><span style="font-size:16px"><strong>TRUNG</strong>: Trung thực với Khách hàng - Đối tác - Nhân viên. Thực hiện đúng các chế độ ưu đãi, dịch vụ hậu mãi đã cam kết, đặt quyền lợi của người tiêu dùng lên trên hết, chân thành tiếp thu mọi ý kiến đóng góp.</span></p>

                                    <p><span style="font-size:16px"><strong>TÍN</strong>: CLS1 SPORTS đặt chữ TÍN lên hàng đầu, lấy chữ TÍN làm trọng tâm đối với Khách hàng - Đối tác - Nhân viên. CLS1 SPORTS luôn nổ lực hết mình để đảm bảo đúng và cao hơn các cam kết của mình đối với khách hàng, đối tác; đặc biệt là cam kết về chất lượng- sản phẩm - dịch vụ.</span></p>

                                    <p><span style="font-size:16px"><strong>TÂM</strong>: CLS1 SPORTS đặt chữ TÂM là một trong những nền tảng quan trọng của việc kinh doanh. Coi trọng khách hàng và luôn lấy khách hàng làm trung tâm, đặt lợi ích và mong muốn của khách hàng lên hàng đầu; nổ lực mang đến cho khách hàng những sản phẩm - dịch vụ tốt nhất; xem sự hài lòng của khách hàng là thước đo thành công.</span></p>

                                    <p><span style="font-size:16px"><strong>Trí</strong>: CLS1 SPORTS luôn đề cao sự sáng tạo, là đòn bẩy phát triển, nhằm tạo ra giá trị khác biệt và bản sắc riêng của sản phẩm. Chúng tôi đề cao tinh thần dám nghĩ, dám làm, khuyến khích tìm tòi, ứng dụng tiến bộ khoa học, kỹ thuật và công nghệ mới vào quản lý, sản xuất; luôn chủ động cải tiến, nâng cao chất lượng sản phẩm- dịch vụ.</span></p>

                                    <p><span style="font-size:16px"><strong>NHÂN</strong>: CLS1 SPORTS xây dựng các mối quan hệ với khách hàng, đối tác, đồng nghiệp và xã hội bằng sự thiện chí, tinh thần nhân văn. Chúng tôi luôn coi người lao động là tài sản quý giá nhất; xây dựng mội trường làm việc chuyên nghiệp, năng động, sáng tạo; tạo điều kiện thu nhập cao và cơ hội phát triển công bằng cho tất cả cán bộ nhân viên.</span></p>

                                    <p><span style="font-size:16px"><strong>Khẩu hiệu (slogan)</strong>: Together we can</span></p>

                                    <p><br>
                                        <span style="font-size:16px"><strong>TRIẾT LÝ KINH DOANH</strong></span></p>

                                    <p><span style="font-size:16px">CLS1 SPORTS mong muốn trở thành một công ty phân phối và sản xuất sản phẩm cầu lông chất lượng tốt nhất ở Việt Nam. Vì thế chúng tôi tâm niệm rằng chất lượng và sáng tạo là người bạn đồng hành của CLS1 SPORTS. Chúng tôi xem khách hàng là trung tâm và cam kết đáp ứng mọi nhu cầu của khách hàng.</span></p>

                                    <p><span style="font-size:16px"><strong>Chính sách chất lượng</strong></span></p>

                                    <p><span style="font-size:16px">Luôn thỏa mãn và có trách nhiệm với khách hàng bằng cách không ngừng cải tiến, đa dạng hóa sản phẩm và dịch vụ, đảm bảo chất lượng với giá cả cạnh tranh, tôn trọng đạo đức kinh doanh và tuân theo pháp luật.</span><br>
                                    </p>

                                    <p style="text-align:center"><span style="font-size:16px"><span style="color:rgb(255, 0, 0)"><strong>* ShopCLS1 cam kết bán hàng chính hãng, không bán hàng kém chất lượng làm ảnh hưởng đến thành viên. </strong></span></span>
                                    </p>

                                    <h3><span style="font-size:16px"><strong>Hệ Thống Cửa Hàng Shop Cầu Lông CLS1.</strong></span></h3>

                                    <p><span style="font-size:16px"><style>.cn_list {margin-left: 20px;}.cn_list p{margin-bottom: 5px;}</style>
</span></p><div><b class="ten_khu_vuc" style="text-transform:uppercase; padding: 10px 0; display: block;">* Khu vực TPHCM</b></div>
<ul class="cn_list">
<li>
    <p><a href="CLS1-quan-1"><strong>CLS1 Quận 1</strong></a> - <i class="fa fa-phone color-x" aria-hidden="true"></i> <a href="tel:0798684568">0798684568</a>
    </p>
    <p>Địa chỉ: <a href="javascript:;" data-url="CLS1-quan-1" data-ban_do="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15677.024577626078!2d106.6913443!3d10.7916835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2df7f6d49253b74c!2zU2hvcCBjYcyCzIB1IGxvzIJuZyBxdWHMo8yCbiAxIC0gVk5CIFNwb3J0cw!5e0!3m2!1svi!2s!4v1639715601589!5m2!1svi!2s" data-ten="CLS1 Quận 1" data-dia_chi="Số 6 Nguyễn Hữu Cầu Phường Tân Định Quận 1" data-so_dt="0798684568" class="map_cn">Số 6 Nguyễn Hữu Cầu Phường Tân Định Quận 1</a></p>
</li>
<li>
    <p><a href="CLS1-quan-2"><strong>CLS1 Quận 2</strong></a> - <i class="fa fa-phone color-x" aria-hidden="true"></i> <a href="tel:0937441822 / ...">0937441822 / ...</a>
    </p>
    <p>Địa chỉ: <a href="javascript:;" data-url="CLS1-quan-2" data-ban_do="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3919.2432813882606!2d106.745614!3d10.79267!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175279dbb0cf495%3A0x23279ac2ddb95086!2zU2hvcCBj4bqndSBsw7RuZyBxdeG6rW4gMiAtIFZOQiBTcG9ydHM!5e0!3m2!1svi!2sus!4v1663128874389!5m2!1svi!2sus" data-ten="CLS1 Quận 2" data-dia_chi="226 Nguyễn Hoàng, phường An Phú, quận 2, TP Hồ Chí Minh" data-so_dt="0937441822 / ..." class="map_cn">226 Nguyễn Hoàng, phường An Phú, quận 2, TP Hồ Chí Minh</a></p>
</li>
<li>
    <p><a href="CLS1-quan-3"><strong>CLS1 Quận 3</strong></a> - <i class="fa fa-phone color-x" aria-hidden="true"></i> <a href="tel:0936914920">0936914920</a>
    </p>
    <p>Địa chỉ: <a href="javascript:;" data-url="CLS1-quan-3" data-ban_do="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3919.5774593307137!2d106.677317!3d10.767012!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fd50304b68b%3A0x504526eb9c65b64f!2zU2hvcCBj4bqndSBsw7RuZyBxdeG6rW4gMyAtIFZOQiBTcG9ydHM!5e0!3m2!1svi!2sus!4v1663128928390!5m2!1svi!2sus" data-ten="CLS1 Quận 3" data-dia_chi="218 Lý Thái Tổ Phường 1, Quận 3" data-so_dt="0936914920" class="map_cn">218 Lý Thái Tổ Phường 1, Quận 3</a></p>
</li>
<li>
    <p><a href="CLS1-quan-4"><strong>CLS1 Quận 4</strong></a> - <i class="fa fa-phone color-x" aria-hidden="true"></i> <a href="tel:070 770 7886">070 770 7886</a>
    </p>
    <p>Địa chỉ: <a href="javascript:;" data-url="CLS1-quan-4" data-ban_do="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.674949542752!2d106.69699551525538!3d10.759515362446592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f07a9d57703%3A0xa8f828f1c1304b26!2zU2hvcCBj4bqndSBsw7RuZyBxdeG6rW4gNCAtIFZOQiBTcG9ydHM!5e0!3m2!1svi!2s!4v1639715704276!5m2!1svi!2s" data-ten="CLS1 Quận 4" data-dia_chi="số 105 Đường 45 Phường 6 Quận 4, thành phố Hồ Chí Minh" data-so_dt="070 770 7886" class="map_cn">số 105 Đường 45 Phường 6 Quận 4, thành phố Hồ Chí Minh</a></p>
</li>
</ul>
<p></p>
                                    <p style="text-align:center"><span style="font-size:16px"><span style="color:rgb(255, 0, 0)"><strong>Các bạn còn chờ gì nữa mà không liên lạc với chúng tôi để tìm được cho mình sản phẩm cầu lông ưng ý!</strong></span></span><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </article>
            </div>
        </div> 
@endsection
