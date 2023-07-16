@extends('admin.layout-admin')
@section('content_admin')
    <style type="text/css">
         td {
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
                                            <th >Name Sender</th>
                                            <th >Email Sender</th>
                                            <th >Phone Sender</th>
                                            <th >Message Sender</th>
                                            <th >Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        
                                        @foreach($contacts as $ct)
                                        <tr class="success">
                                            <td>{{$ct->name_contact}}</td>
                                            <td>{{$ct->email_contact}}</td>
                                            <td>{{$ct->phone_contact}}</td>
                                            <td class="blog_content">{{$ct->message_contact}}</td>
                                            <td><button class="btn btn-danger" data-toggle="modal" data-target="#Del{{$ct->id}}">Xoá</button>
                                                <button class="btn" data-toggle="modal" data-target="#Up{{$ct->id}}" style="background-color: #ccc;">Xem</button>
                                            </td>
                                        </tr>
                                        <!-- modal  Delete-->
                                        <div class="modal fade" id="Del{{$ct->id}}" tabindex="-1" role="dialog" aria-h3ledby="myModalh3" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="/del_contact/{{$ct->id}}" method="POST" name="frm_delete">
                                                        @csrf
                                                        @method('Delete')
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalh3">Delete</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <input type="hidden" class="form-control" name="contact_id" id="contact_id" value="">
                                                        </div>
                                                        <p style="margin: 0 auto;">Are you sure to delete {{$ct->name_contact}}'s contact</p>
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
                                        <div class="modal fade" id="Up{{$ct->id}}" tabindex="-1" role="dialog" aria-h3ledby="myModalh3" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="" method="POST" name="frm_update" enctype="multipart/form-data">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalh3">Modal title Here</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="contact_name">
                                                                <p>Name:</p>
                                                                <h3 class="change_color">{{$ct->name_contact}}</h3>
                                                                <p></p>
                                                            </div>
                                                            
                                                             
                                                            <div class="">
                                                                <p>Message:</p>
                                                                <h3 class="change_color">{{$ct->message_contact}}</h3>
                                                                <p></p>
                                                            </div>
                                                            <div class="blog_recomment">
                                                                <p>Date:</p>
                                                                <h3 class="change_color">{{$ct-> date_contact}}</h3>
                                                                <p></p>
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