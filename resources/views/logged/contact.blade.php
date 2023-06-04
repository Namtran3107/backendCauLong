@extends('logged.layout')
@section('content')
            <link rel="stylesheet" href="./bmt/product.css">
            <link rel="stylesheet" href="./bmt/contact.css">
            <div id="body-contact-all">
                <div class="header-menu-website-bottom-background"></div>
                <div class="body-contact-list">
                    <div class="body-contact-item">
                        <div class="body-input-contact">
                            <div class="header-content-contact">NƠI GIẢI ĐÁP TOÀN BỘ MỌI THẮC MẮC CỦA BẠN?</div>
                            <div class="contact-phone-and-email">
                                <span class="contact-phone-email-text">Hotline: </span>
                                <a href="" class="contact-phone-email-link">123456789</a>
                            </div>
                            <div class="contact-phone-and-email contact-phone-and-email-margin">
                                <span class="contact-phone-email-text">Email: </span>
                                <a href="" class="contact-phone-email-link">info@shopCLS1.com</a>
                            </div>
                            <div class="header-content-contact">LIÊN HỆ VỚI CHÚNG TÔI</div>
                            <div class="contact-input-all">
                                <form action="/create_contact" method="Post">
                                    @csrf
                                <div class="contact-input-name-and-email-all">
                                    <input type="text" name="name" class="contact-input-name-and-email" placeholder="Họ và tên">
                                    <input type="text" name="email" class="contact-input-name-and-email" placeholder="Email">
                                </div>
                                <input type="text" name="phone" class="contact-input-number" placeholder="Điện thoại">
                                <textarea name="message" id="" cols="75" rows="5" placeholder="Nội dung" class="contact-input-text"></textarea>
                                <button type="submit" class="contact-submit" >Gửi thông tin</button>
                                </form>
                            </div>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6051333772075!2d106.67120151474893!3d10.764884492329365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee10a99ee19%3A0xa24c4b785ce479b!2zMzMgVsSpbmggVmnhu4VuLCBQaMaw4budbmcgMiwgUXXhuq1uIDEwLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1670655323441!5m2!1svi!2s" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="body-contact-item">
                        <div class="contact-location-tiem">
                            <a href="" class="contact-logo">
                                <img src="./img/pngtree-badminton-fitness-little-boy-image_1289549.png" alt="" class="contact-logo-img">
                            </a>
                            <ul class="contact-location-list">
                                <li class="contact-location-item">
                                    <div class="contact-location-name-number">
                                        <a href="" class="contact-location-name">CLS1 Quận 1</a> - 
                                        <a href="tel:123-456-7890" class="contact-location-number">1234567890</a>
                                    </div>
                                    <a href="" class="contact-location-where">Số 6 Nguyễn Hữu Cầu Phường Tân Định Quận 1</a>
                                </li>
                                <li class="contact-location-item">
                                    <div class="contact-location-name-number">
                                        <a href="" class="contact-location-name">CLS1 Quận 1</a> - 
                                        <a href="tel:123-456-7890" class="contact-location-number">1234567890</a>
                                    </div>
                                    <a href="" class="contact-location-where">Số 6 Nguyễn Hữu Cầu Phường Tân Định Quận 1</a>
                                </li>
                                <li class="contact-location-item">
                                    <div class="contact-location-name-number">
                                        <a href="" class="contact-location-name">CLS1 Quận 1</a> - 
                                        <a href="tel:123-456-7890" class="contact-location-number">1234567890</a>
                                    </div>
                                    <a href="" class="contact-location-where">Số 6 Nguyễn Hữu Cầu Phường Tân Định Quận 1</a>
                                </li>
                                <li class="contact-location-item">
                                    <div class="contact-location-name-number">
                                        <a href="" class="contact-location-name">CLS1 Quận 1</a> - 
                                        <a href="tel:123-456-7890" class="contact-location-number">1234567890</a>
                                    </div>
                                    <a href="" class="contact-location-where">Số 6 Nguyễn Hữu Cầu Phường Tân Định Quận 1</a>
                                </li>
                                <li class="contact-location-item">
                                    <div class="contact-location-name-number">
                                        <a href="" class="contact-location-name">CLS1 Quận 1</a> - 
                                        <a href="tel:123-456-7890" class="contact-location-number">1234567890</a>
                                    </div>
                                    <a href="" class="contact-location-where">Số 6 Nguyễn Hữu Cầu Phường Tân Định Quận 1</a>
                                </li>
                                <li class="contact-location-item">
                                    <div class="contact-location-name-number">
                                        <a href="" class="contact-location-name">CLS1 Quận 1</a> - 
                                        <a href="tel:123-456-7890" class="contact-location-number">1234567890</a>
                                    </div>
                                    <a href="" class="contact-location-where">Số 6 Nguyễn Hữu Cầu Phường Tân Định Quận 1</a>
                                </li>
                            </ul>  
                        </div>
                    </div>
                </div>
            </div>
@endsection