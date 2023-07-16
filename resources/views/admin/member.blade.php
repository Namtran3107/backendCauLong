@extends('admin.layout-admin')
@section('content_admin')
    <style type="text/css">
         td, th {
            width: calc(100% / 5);
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
                                            <th >Name member</th>
                                            <th >Email member</th>
                                            <th >Phone member</th>
                                            <th >Address member</th>
                                            <th >Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        
                                        @foreach($customer as $mem)
                                        <tr class="success">
                                            <td>{{$mem->customer_fullname}}</td>
                                            <td>{{$mem->customer_email}}</td>
                                            <td>{{$mem->customer_phone}}</td>
                                            <td><input value="{{$mem->customer_address}}" style = "background-color: transparent;"></td>
                                            <td><button class="btn btn-danger" data-toggle="modal" data-target="#Del{{$mem->id}}">Xoá</button>
                                            </td>
                                        </tr>
                                        <!-- modal  Delete-->
                                        <div class="modal fade" id="Del{{$mem->id}}" tabindex="-1" role="dialog" aria-h3ledby="myModalh3" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="/del_member/{{$mem->id}}" method="POST" name="frm_delete">
                                                        @csrf
                                                        @method('Delete')
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalh3">Delete</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <input type="hidden" class="form-control" name="contact_id" id="contact_id" value="">
                                                        </div>
                                                        <p style="margin: 0 auto;">Are you sure to delete {{$mem->name_contact}}'s contact</p>
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