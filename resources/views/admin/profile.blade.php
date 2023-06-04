@extends('admin.layout-admin')
@section('content_admin')
    <style>
        td .btn {
            width: auto;
            font-size: 16px; 
            padding: 5px 10px;
        }
    </style>


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    
                    <div class="container-fluid">
                        <div class="row" style="justify-content: center;">
                            <img style="width: 200px; height: 200px; object-fit:cover;" src="" class="img-thumbnail" alt="...">
                        </div>
                        <div class="row">
                            
                            <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        
                                        <tr class="success">
                                            <td></td>
                                            <td></td>
                                            <td class="user_password">**********</td>
                                            <td></td>
                                            <td><button class="btn btn-danger" data-toggle="modal" data-target="">Sửa</button>
                                            </td>
                                        </tr>

                                        <!-- modal  Update-->
                                        <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="profile.php" method="POST" name="frm_update" enctype="multipart/form-data">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Modal title Here</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <!-- id để req -->
                                                            <input type="hidden" class="form-control" name="user_id" id="user_id" value="">
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="user_name">
                                                                <label>User Name</label>
                                                                <input class="form-control" name="user_name" value="" id="user_name">
                                                            </div>
                                                            <div class="user_image">
                                                                <label>Your Avatar</label>
                                                                <input type="file" class="form-control" name="user_image" id="user_image">
                                                            </div>
                                                             <div class="user_email">
                                                                <label>Email</label>
                                                                <input class="form-control" name="user_email" value="" id="user_email">
                                                            </div>
                                                            <div>
                                                                <label>New Password</label>
                                                                <input class="form-control" name="user_password" value="" id="user_password">
                                                            </div>
                                                            <div>
                                                                <label>Phone</label>
                                                                <input class="form-control" name="user_phone" value="" id="user_phone">
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