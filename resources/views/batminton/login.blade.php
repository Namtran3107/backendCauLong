@extends('batminton.layout')
@section('content')
            <link rel="stylesheet" href="./bmt/login.css">
            <div id="body-website-login">
                <div class="body-website-login-list">
                    <div class="body-website-login-item">
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
                        <div class="table-login-list">
                            <div class="login-content-list">
                                <span class="login-content-header">ĐĂNG NHẬP</span>
                            </div>
                            <form action="/check_login" method="POST">
                                @csrf
                                <div class="login-input-list">
                                    <input name="customer_email" type="text" class="login-input-item" placeholder="Email/Số ĐT">
                                    <input name="customer_password" type="password" class="login-input-item" placeholder="Mật khẩu">
                                    <button type="submit" class="login-input-item login-input-item-buttom">Đăng nhập</button>
                                </div>
                            </form>
                            <div class="login-input-text-list">
                                <a href="./register" class="login-input-text-item">Đăng ký tại đây</a>
                                <a href="" class="login-input-text-item">Quên mật khẩu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection