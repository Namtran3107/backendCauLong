@extends('admin.layout-admin')
@section('content_admin')
    <style type="text/css">
         td {
            width: calc(100% / 4);
        }
        .change_color{
            color: #4272d7;
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
                        <div class="row">
                            
                            <div class="panel-body col-md-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="col-12">
                                            <th >ID</th>
                                            <th >Email</th>
                                            <th >Phone</th>
                                            <th >Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach($order as $or)
                                        <tr class="success">
                                            <td>{{ $or->id }}</td>
                                            <td>{{ $or->email_customer_order }}</td>
                                            <td>{{ $or->phone_customer_order }}</td>
                                            <td><button class="btn btn-danger" data-toggle="modal" data-target="#Del{{ $or->id }}">Xoá</button>
                                                <button class="btn" data-toggle="modal" data-target="#Up{{ $or->id }}" style="background-color: #ccc;">Xem</button>
                                            </td>
                                        </tr>
                                        <!-- modal  Delete-->
                                        <div class="modal fade" id="Del{{ $or->id }}" tabindex="-1" role="dialog" aria-h3ledby="myModalh3" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="/delete_order/{{ $or->id }}" method="POST" name="frm_delete">
                                                        @csrf
                                                        @method('Delete')
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalh3">Delete</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <input type="hidden" class="form-control" name="contact_id" id="contact_id" value="{{ $or->id_order }}">
                                                        </div>
                                                        <p style="margin: 0 auto;">Are you sure to delete</p>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="frm" value="delete">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End MODAL -->
                                        <!-- modal  see-->
                                        <div class="modal fade" id="Up{{ $or->id }}" tabindex="-1" role="dialog" aria-h3ledby="myModalh3" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="" method="POST" name="frm_update" enctype="multipart/form-data">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalh3">Modal title Here</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="blog_recomment" style= "display:flex; align-items: flex-end;">
                                                                <h3 class="change_color">Email:</h3>
                                                                <p style = "margin-left: 5px;">{{ $or->email_customer_order }}</p>
                                                            </div>
                                                            <div class="blog_recomment">
                                                                <h3 class="change_color">Product:</h3>
                                                                @foreach($array_product as $array)
                                                                    @if($array['id_customer'] == $or->id_customer && $array['id_order'] == $or->id)
                                                                        <p>{{ $array['name_product'] }}</p>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            <div class="blog_recomment" style= "display:flex; align-items: flex-end;">
                                                                <h3 class="change_color">Prices:</h3>
                                                                <p style = "margin-left: 5px;">{{number_format($or->prices_customer_order,0,",",".")}} <p style = "margin-left: 5px;">đ</p></p>
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
                                    @endforeach
                                        
                                    </tbody>
                                </table>
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
            @endsection