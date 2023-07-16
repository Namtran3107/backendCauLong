@extends('admin.layout-admin')
@section('content_admin')
    <style>
        .overview-item{
            height: 100%;
        }
        .modal-backdrop.show {
            opacity: 0;
        }
        .modal.show .modal-dialog {
            margin-top: 110px;
        }
    </style>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Dashboard</h2>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                @php
                                                $or = 0;
                                                @endphp
                                                @foreach($order as $order)
                                                @php
                                                $or++;
                                                @endphp
                                                @endforeach
                                                <h2>
                                                @php
                                                echo $or;
                                                @endphp
                                                </h2>
                                                <span>Đơn hàng</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                @php
                                                $pr = 0;
                                                @endphp
                                                @foreach($product as $product)
                                                @php
                                                $pr++;
                                                @endphp
                                                @endforeach
                                                <h2>
                                                @php
                                                echo $pr;
                                                @endphp
                                                </h2>
                                                <span>Tổng sản phẩm</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>
                                                    5
                                                </h2>
                                                <span>Member</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                @php
                                                $ct = 0;
                                                @endphp
                                                @foreach($contacts as $contacts)
                                                @php
                                                $ct++;
                                                @endphp
                                                @endforeach
                                                <h2>
                                                @php
                                                echo $ct;
                                                @endphp
                                                </h2>
                                                <span>Số người liên hệ</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
 @endsection