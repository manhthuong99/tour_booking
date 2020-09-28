@extends('layouts.master-admin')
@section('header')
    <script type="text/javascript" src="{{  asset('js/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/fixedColumns.dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.datatable.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <style>
        th, td {
            white-space: nowrap;
        }

        div.dataTables_wrapper {
            margin: 0 auto;
        }

        div.container {
            width: 100%;
        }
    </style>
@stop
@section('main')
    <style>
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
                            <div class="box-body">
                                <table id="example" class="stripe row-border order-column" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Tên tour</th>
                                        <th>Ngày khởi hành</th>
                                        <th>Số người</th>
                                        <th>Tổng tiền</th>
                                        <th>Trạng thái</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i = 1)
                                    @foreach( $userBooking as $value )
                                        <tr>
                                            <td>{{ $value->tours->tours_name }}</td>
                                            <td> {{ date("d/m/Y", strtotime($value->tours->calendar)) }}</td>
                                            <td> {{ $value->number_customer }}</td>
                                            <td> {{ $value->total }}</td>
                                            @if($value->booking_status==0)
                                                <td style="color: red">Đã hủy</td>
                                            @endif
                                            @if($value->booking_status==1)
                                                <td style="color: black">Đang chờ duyệt</td>
                                            @endif
                                            @if($value->booking_status==2)
                                                <td style="color: green">Đã duyệt</td>
                                            @endif
                                            <td align="center">
                                                <button><a class="fa fa-fw fa-eye" href="{{ route('booking.show',$value->booking_id) }}"></a>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="settings">
                        <form class="form-horizontal" action="{{ route('user.update', $value->users_id) }}"
                              enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PATCH')
                            @foreach( $userProfile as $value)
                                <input name="users_id" type="hidden" class="form-control" id="inputName" placeholder="Name"
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
@section('footer')
    <script type="text/javascript" src="{{  asset('js/dataTables.fixedColumns.js') }}"></script>
    <script type="text/javascript" src="{{  asset('js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            let table = $('#example').removeAttr('width').DataTable({
                scrollY: "auto",
                scrollX: true,
                scrollCollapse: true,
                paging: true,
                columnDefs: [
                    {width: 200, targets: 0}
                ],
                fixedColumns: true
            });
        });

        function delRecord() {
            confirm('Bạn thực sự muốn xóa ?? ')
        }
    </script>
@stop
