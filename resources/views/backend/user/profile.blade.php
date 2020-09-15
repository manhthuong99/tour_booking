@extends('layouts.master-admin')
@section('main')
    <style>
        /*ul li b {*/
        /*    font-size: 24px;*/
        /*    font-weight: lighter;*/
        /*}*/

        /*ul li a {*/
        /*    font-size: 20px;*/
        /*}*/

        /*h3 {*/
        /*    font-size: 24px;*/
        /*}*/
        .custom1 {
            margin-top: 25px;
            margin-bottom: 25px;
            font-size: 18px;
        }
        .avt{
            max-width: 100%;
            vertical-align: top;
            object-fit: cover;
            width:250px;
            height:250px;
        }
    </style>
    <div class="row">
        <div class="col-md-4">
            <!-- Profile Image -->
            <div class="box box-primary">
                @foreach( $userProfile as $value)
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle avt" src="{{ asset('storage/avatars/'.$value->avatar) }}"
                             alt="User profile picture">

                        <h2 align="center" style="margin-bottom: 50px; margin-top: 20px; font-size: 40px" class><b>{{ $value->fullname }}</b> </h2 >

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item custom1">
                                <b>Username</b> <a class="pull-right">{{ $value->username }}</a>
                            </li>
                            <li class="list-group-item custom1">
                                <b>Email</b> <a class="pull-right">{{ $value->email }}</a>
                            </li>
                            <li class="list-group-item custom1">
                                <b>Số điện thoại</b> <a class="pull-right">{{ $value->phone_number }}</a>
                            </li>
                            <li class="list-group-item custom1">
                                <b>Ngày sinh</b> <a class="pull-right">{{ $value->birthday }}</a>
                            </li>
                            <li class="list-group-item custom1">
                                <b>Địa chỉ</b> <a class="pull-right">{{ $value->address }}</a>
                            </li>
                            <li class="list-group-item custom1">
                                <b>Số CMND</b> <a class="pull-right">{{ $value->id_card }}</a>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>

            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-8">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#activity" data-toggle="tab">Tour đã đặt</a></li>
                    <li><a href="#settings" data-toggle="tab">Thay đổi thông tin</a></li>
                </ul>
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                        <!-- Post -->
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg"
                                     alt="user image">
                                <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                                <span class="description">Shared publicly - 7:30 PM today</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore the hate as they create awesome
                                tools to help create filler text for everyone from bacon lovers
                                to Charlie Sheen fans.
                            </p>
                            <ul class="list-inline">
                                <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a>
                                </li>
                                <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i>
                                        Like</a>
                                </li>
                                <li class="pull-right">
                                    <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i>
                                        Comments
                                        (5)</a></li>
                            </ul>

                            <input class="form-control input-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="settings">
                        <form class="form-horizontal" action="{{ route('user.update', $value->users_id) }}"
                              enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PATCH')
                            @foreach( $userProfile as $value)
                                <input type="hidden" class="form-control" id="inputName" placeholder="Name"
                                       value="{{ $value->users_id }}">
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Trạng thái</label>
                                    <div class="col-sm-10">
                                        <select name="status" class="form-control select2" style="width: 20%;">
                                            <option value="1" selected="selected">Đang hoạt động</option>
                                            <option value="0">Vô hiệu hóa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-10">
                                        <input name="username" type="text" class="form-control" id="inputName"
                                               placeholder="Username" value="{{ $value->username }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Họ tên</label>
                                    <div class="col-sm-10">
                                        <input name="fullname" type="text" class="form-control" id="inputName"
                                               placeholder="Họ và tên" value="{{ $value->fullname }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input name="email" type="email" class="form-control" id="inputEmail"
                                               placeholder="Email" value="{{ $value->email }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Avatar </label>
                                    <div class="col-sm-10">
                                        <input name="avatar" type="file" class="files_details" id="inputName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Số điện thọai </label>
                                    <div class="col-sm-10">
                                        <input name="phone_number" type="number" class="form-control"
                                               id="inputName" placeholder="Số điện thoại"
                                               value="{{ $value->phone_number }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputSkills" class="col-sm-2 control-label">Ngày sinh</label>
                                    <div class="col-sm-3">
                                        <input name="birthday" type="date" class="form-control" id="inputSkills"
                                               value="{{ $value->birthday }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputSkills" class="col-sm-2 control-label">Địa chỉ</label>
                                    <div class="col-sm-10">
                                        <input name="address" type="text" class="form-control" id="inputSkills"
                                               placeholder="Địa chỉ" value="{{ $value->address }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputSkills" class="col-sm-2 control-label">Số CMND</label>
                                    <div class="col-sm-10">
                                        <input name="id_card" type="number" class="form-control" id="inputSkills"
                                               placeholder="Số chứng minh nhân dân" value="{{ $value->id_card }}">
                                    </div>
                                </div>
                            @endforeach
                            @if( session()->get('failed') )
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <label style="color: red">{{  session()->get('failed') }}</label>
                                </div>
                            </div>
                            @endif
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button width="200px" type="submit" class="btn btn-success">Lưu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>

        <!-- /.col -->
    </div>
    <!-- /.row -->

@stop
