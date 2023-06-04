
@extends('admin.layout-admin')
@section('content_admin')
    <style type="text/css">
        .panel-body {
            width: 100%;
        }
        .modal.show .modal-dialog{
            margin-top: 75px;
        }
        td {
            width: calc(100% / 6);
        }
        .blog_post_id_random{
            width: 50px;
        }
        .blog_name_owner{
            width: 170px !important;
        }
        .change_color{
            color: #4272d7;
        }
        .avatar_image_topic{
            display: flex;
            justify-content: center;
        }
        .blog_avatar_image_topic{
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        td {
            width: calc(100% / 5);
        }
    </style>

@if(session('success'))
<div class="alert alert-success text-center">
    {{session('success')}}
</div>
@endif
    
            
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <!-- MODAL ADD -->
                        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="/create_product" method="POST" name="frm_edit" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Create Product</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="">
                                                <label>Name product</label>
                                                <input class="form-control" name="name_product" id="name_product">
                                            </div>
                                            <div class="">
                                                <label>Price</label>
                                                <input class="form-control" name="prices_product" id="prices_product">
                                            </div>
                                            <div class="">
                                                <label>Brand</label>
                                                <input class="form-control" name="brand_product" id="brand_product">
                                            </div>
                                            <div class="">
                                                <label>Quantity</label>
                                                <input class="form-control" name="quantity_product" id="quantity_product">
                                            </div>
                                            <div class="img_product">
                                                <label>Image</label>
                                                <input type="file" class="form-control" name="img_product" id="img_product">
                                            </div>
                                            <div>
                                                <label>Summary</label>
                                                <input class="form-control" name="summary_product" id="summary_product">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="hidden" name="frm" value="add">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end Modal -->
                        <div class="panel-heading">
                                <button class="btn btn-warning" data-toggle="modal" data-target="#addModal">Thêm</button>
                                <a href=""></a>
                        </div>
                        <div class="row">
                            
                            <div class="panel-body">
                            <div class="table-responsive">  
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Brand</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach($product as $sp)
                                        <tr class="success">
                                            <td>{{$sp->name_product}}</td>
                                            <td style = "display: flex;">{{number_format($sp->prices_product,0,",",".")}} <p style = "margin-left: 5px;">đ</p></td>
                                            <td>{{$sp->brand_product}}</td>
                                            <td>{{$sp->quantity_product}}</td>
                                            <td>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#Edit{{$sp->id}}">Sửa</button>                                         
                                                <button class="btn" data-toggle="modal" data-target="#See{{$sp->id}}" style="background-color: #ccc;">Xem</button>
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#Delete{{$sp->id}}">Xoá</button>
                                            </td>
                                        </tr>
                                    
                                        <!-- modal  Delete-->
                                        <div class="modal fade" id="Delete{{$sp->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="/delete_product/{{$sp->id}}" method="POST" name="frm_delete">
                                                        @csrf
                                                        @method('Delete')
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Delete product</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <input type="hidden" class="form-control" name="id_product" id="id_product" value="">
                                                        </div>
                                                        <p style="margin: 0 auto;">Are you sure you want delete this product?</p>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="frm" value="delete">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Agree</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End MODAL -->

                                        <!-- modal  see-->
                                        <div class="modal fade" id="See{{$sp->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="" method="POST" name="frm_update" enctype="multipart/form-data">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Sản phẩm</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="product_name">
                                                                <p>Name</p>
                                                                <h3 class="change_color">{{$sp->name_product}}</h3>
                                                            </div>
                                                             <div class="product_prices">
                                                                 <p>Price</p>
                                                                <h3 class="change_color">{{$sp->prices_product}}</h3>
                                                            </div>
                                                            <div>
                                                                <p>Brand</p>
                                                                <h3 class="product_brand">{{$sp->brand_product}}</h3>
                                                            </div>
                                                            <div class="product_quantity">
                                                                <p>Quantity</p>
                                                                <h3 class="change_color">{{$sp->quantity_product}}</h3>
                                                            </div>
                                                            <div class="product_summary">
                                                                <p>Summary</p>
                                                                <h3 class="change_color">{{$sp->summary_product}}</h3>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End see -->
                                        <!-- modal  Edit-->
                                        <div class="modal fade" id="Edit{{$sp->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="/edit_product/{{$sp->id}}" method="POST" name="frm_update" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Edit Product</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <!-- id để req -->
                                                            <!-- <input type="hidden" class="form-control" name="id" id="id" value=""> -->
                                                        </div>
                                                        <div class="modal-body">
                                                            
                                                            <div class="">
                                                                <label>Name product</label>
                                                                <input class="form-control" value="{{$sp->name_product}}" name="name_product" id="name_product">
                                                            </div>
                                                            <div class="">
                                                                <label>Price</label>
                                                                <input class="form-control" value="{{$sp->prices_product}}" name="prices_product" id="prices_product">
                                                            </div>
                                                            <div class="">
                                                                <label>Brand</label>
                                                                <input class="form-control" value="{{$sp->brand_product}}" name="brand_product" id="brand_product">
                                                            </div>
                                                            <div class="">
                                                                <label>Quantity</label>
                                                                <input class="form-control" value="{{$sp->quantity_product}}" name="quantity_product" id="quantity_product">
                                                            </div>
                                                            <div class="blog_image_topic">
                                                                <label>Image</label>
                                                                <input type="file" class="form-control" value="{{$sp->img_product}}" name="img_product" id="blog_image_topic">
                                                            </div>
                                                            <div>
                                                                <label>Summary</label>
                                                                <input class="form-control" value="{{$sp->summary_product}}" name="summary_product" id="summary_product">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="frm" value="update">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modal Edit -->
                                        
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="#">Trần Ngọc Nam</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
