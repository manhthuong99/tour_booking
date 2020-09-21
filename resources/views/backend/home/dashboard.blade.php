@extends('layouts.master-admin')
@section('header')
    <script src="{{ asset('js/jquery.js') }}"></script>
@stop
@section('main')
    <div class="row">
        <div class="row">
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="ion ion-ios-star-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Tour đặt mới</span>
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <span class="info-box-number">{{ $booking }}</span>
                        @endif
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Thành viên mới</span>
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <span class="info-box-number">{{ $member }}</span>
                        @endif

                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-fw fa-dollar"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Tổng doanh thu</span>
                        <span class="info-box-number">{{ number_format($total) }} VNĐ</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Monthly Recap Report</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-wrench"></i></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-center">
                                <strong>Sales: 1 Jun, 2030 - 30 Jul, 2020</strong>
                            </p>

                            <div class="chart">
                                <!-- Sales Chart Canvas -->
                                <canvas id="salesChart" style="height: 180px;"></canvas>
                            </div>
                            <!-- /.chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <p class="text-center">
                                <strong>Goal Completion</strong>
                            </p>

                            <div class="progress-group">
                                <span class="progress-text">Add Products to Cart</span>
                                <span class="progress-number"><b>160</b>/200</span>

                                <div class="progress sm">
                                    <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                                <span class="progress-text">Complete Purchase</span>
                                <span class="progress-number"><b>310</b>/400</span>

                                <div class="progress sm">
                                    <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                                <span class="progress-text">Visit Premium Page</span>
                                <span class="progress-number"><b>480</b>/800</span>

                                <div class="progress sm">
                                    <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                                <span class="progress-text">Send Inquiries</span>
                                <span class="progress-number"><b>250</b>/500</span>

                                <div class="progress sm">
                                    <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- ./box-body -->
                <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <div class="description-block border-right">
									<span class="description-percentage text-green"><i
                                            class="fa fa-caret-up"></i> 17%</span>
                                <h5 class="description-header">$35,210.43</h5>
                                <span class="description-text">TOTAL REVENUE</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-xs-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-yellow"><i
                                        class="fa fa-caret-left"></i> 0%</span>
                                <h5 class="description-header">$10,390.90</h5>
                                <span class="description-text">TOTAL COST</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-xs-6">
                            <div class="description-block border-right">
									<span class="description-percentage text-green"><i
                                            class="fa fa-caret-up"></i> 20%</span>
                                <h5 class="description-header">$24,813.53</h5>
                                <span class="description-text">TOTAL PROFIT</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-xs-6">
                            <div class="description-block">
									<span class="description-percentage text-red"><i
                                            class="fa fa-caret-down"></i> 18%</span>
                                <h5 class="description-header">1200</h5>
                                <span class="description-text">GOAL COMPLETIONS</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
        <!-- Left col -->
        <div class="col-md-5">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Tour mới đặt</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr align="center">
                            <th align="center" width="3%">STT</th>
                            <th width="30%">Tours</th>
                            <th width="30%">Khách hàng</th>
                            <th width="27%">Ngày đặt</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody id="table_data">
                        @php( $stt = 1)
                        @foreach( $listBooking as $value)
                            <tr>
                                <td>{{ $stt++ }}</td>
                                <td>{{ $value->tours->tours_name }}</td>
                                <td>{{ $value->users->fullname }}</td>
                                <td>{{ $value->created_at }}</td>
                                <td align="center">
                                    <button><a class="fa fa-fw fa-eye" href="{{ route('booking.show',$value->booking_id) }}"></a>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="box-header" style="float: right">
                    <h3 class="box-title"> Doanh thu tháng {{ \Carbon\Carbon::now()->month }}:</h3>
                    <h3 class="box-title"><b>{{ number_format($totalMonth) }} VNĐ</b></h3>
                </div>
                <br>
                <br>
                <div class="box-header">
                    <h3 class="box-title">Tìm kiếm nhiều nhất</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul class="tags">
                        @foreach( $topSearch as $value)
                        <li><a href="#" class="tag">{{ $value->searchs }} ({{ $value->number }})</a></li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <!-- /.col -->

        <div class="col-md-7">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#activity" data-toggle="tab">Tour đặt nhiều</a></li>
                    <li><a href="#settings" data-toggle="tab">Khách hàng mới</a></li>
                </ul>
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr align="center">
                                <th align="center" width="3%">STT</th>
                                <th width="60%">Tour</th>
                                <th width="27%">Giá</th>
                                <th width="10%">Số lượng</th>
                            </tr>
                            </thead>
                            <tbody id="table_data">
                            @php( $stt = 1)
                            @foreach( $topBooking as $value)
                                <tr>
                                    <td>{{ $stt++ }}</td>
                                    <td>{{ $value->tours_name }}</td>
                                    <td>{{ $value->price }} VNĐ</td>
                                    <td align="center">{{ $value->total }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="settings">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr align="center">
                                <th align="center" width="3%">STT</th>
                                <th width="30%">Username</th>
                                <th width="37%">Họ tên</th>
                                <th width="30%">Email</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="table_data">
                            @php( $stt = 1)
                            @foreach( $newCustomer as $value)
                                <tr>
                                    <td>{{ $stt++ }}</td>
                                    <td>{{ $value->username }}</td>
                                    <td>{{ $value->fullname }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td align="center">
                                        <button><a class="fa fa-fw fa-eye" href="{{ route('user.show',$value->users_id) }}"></a>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <div class="control-sidebar-bg"></div>
@stop


