@extends('layouts.master-admin')
@section('header')
    <script type="text/javascript" src="{{  asset('js/jquery.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            $('#re-password').blur(function (){
                let password = $('#password').val();
                let rePassword = $('#re-password').val();
                if (rePassword !== password){
                    $("#validate-password").html('Mật khẩu không khớp')
                    $(':input[type="submit"]').prop('disabled', true);
                }
                else{
                    $("#validate-password").html('')
                    $(':input[type="submit"]').prop('disabled', false);
                }

            })
        });
    </script>
@stop
@section('main')
    <div class="row" style="font-size: 20px">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3><b>TẠO MỚI</b></h3>
                </div>
                <form role="form" action="{{ route('user.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="box-body left">
                        @if( session()->get('failed'))
                            <div class="form-group">
                                <span style="color: red">{{ session()->get('failed') }}</span>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email (<b style="color: red">*</b>)</label>
                            <input name="email" type="email" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tài khoản (<b style="color: red">*</b>)</label>
                            <input name="username" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mật khẩu (<b style="color: red">*</b>)</label>
                            <input id="password" name="password" type="password" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nhập lại mật khẩu (<b style="color: red">*</b>)</label>
                            <input id="re-password" name="re-password" type="password" class="form-control" placeholder="" required>
                            <span id="validate-password" style="color: red"></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Họ tên</label>
                            <input name="fullname" type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày sinh</label>
                            <input name="birthday" type="date" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Quyền truy cập</label>
                            <select name="permission" class="form-control"
                                    style="width: 100%;">
                                <option value="0">Khách hàng</option>
                                <option value="1">Quản trị viên</option>
                            </select>
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" style="width: 200px" value="Lưu">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
            </div>
            <!-- /.box -->
        </div>
    </div>
@stop
