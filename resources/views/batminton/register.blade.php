@extends('batminton.layout')
@section('content')
            <link rel="stylesheet" href="./bmt/login.css">
            <link rel="stylesheet" href="./bmt/register.css">
            <div id="body-website-login">
                <div class="body-website-login-list">
                    <div class="body-website-login-item">
                        <div class="Notification-add">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                        <div class="table-login-list">
                            <div class="login-content-list">
                                <span class="login-content-header">Đăng ký</span>
                                <span class="decor"></span>
                            </div>
                            <div class="login-input-text-list">
                                <span class="login-input-text-item-text">Đã có tài khoản, đăng nhập</span>
                                <a href="/login" class="login-input-text-item">tại đây</a>
                            </div>
                            <div class="login-input-list">
                            <form action="/register_customer" method="Post">
                            @csrf
                                <input type="text" name="customer_fullname" id="name" class="login-input-item" placeholder="Nhập tên của bạn (*)">
                                <input type="emai" name="customer_email" id="email" class="login-input-item" placeholder="Nhập email của bạn (*)">
                                <input type="text" name="customer_phone" id="phone" class="login-input-item" placeholder="Số điện thoại">
                                <input type="password" name="password" id="password" class="login-input-item" placeholder="Mật khẩu">
                                <input type="password" name="" id="confirm-password" class="login-input-item" placeholder="Nhập lại mật khẩu">
                                <button type="submit" class="login-input-item login-input-item-buttom" onclick="start()">Đăng ký</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection