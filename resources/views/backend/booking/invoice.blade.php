@extends('layouts.master-admin')
@section('main')
    @foreach( $Booking as $value)
        <div class="row">
            <div class="col-md-12">
                <!-- title row -->
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="">
                            Kinh Đô Travel &nbsp;<i class="fa fa-plane"></i>
                            <small class="pull-right">Date: {{ \Carbon\Carbon::now() }}</small>
                        </h2>
                        <br>
                    </div>
                    <!-- /.col -->
                </div>
                @if( $value->booking_status == 0)
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-ban"></i> Tour Đã bị hủy</h4>
                    </div>
                @endif
                @if( $value->booking_status == 2)
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i>Tour đã được duyệt</h4>
                    </div>
            @endif
            <!-- info row -->
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        <address style="font-size: 18px">
                            <h3><b> Nhân viên</b></h3>
                            @if(\Illuminate\Support\Facades\Auth::check())
                                @php($user = \Illuminate\Support\Facades\Auth::user())
                                <strong>{{ $user->fullname }}</strong><br>
                                Địa chỉ:       {{ $user->address }}<br>
                                Số điện thoại: {{ $user->phone_number }}<br>
                                Email:         {{ $user->email }}
                            @endif

                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        <h3><b>Khách hàng</b></h3>
                        <address style="font-size: 18px">
                            <strong>{{ $value->users->fullname }}</strong><br>
                            Địa chỉ: {{ $value->users->fullname }}<br>
                            Số điện thoại: {{ $value->users->phone_number }}<br>
                            Email: {{ $value->users->email }}
                        </address>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                    <div class="col-xs-12 table-responsive">
                        <table class="table table-striped" style="font-size: 18px">
                            <thead>
                            <tr>
                                <th>Tên tour</th>
                                <th>Ngày khởi hành</th>
                                <th>Số người</th>
                                <th>Giá tour</th>
                                <th>Thành tiền</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $value->tours->tours_name }}</td>
                                <td>{{ date("d/m/Y", strtotime($value->tours->calendar)) }}</td>
                                <td>{{ $value->number_customer }}</td>
                                <td>{{ $value->tours->price }}</td>
                                <td>{{ $value->total }} VNĐ</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <!-- accepted payments column -->
                    <div class="col-xs-6">
                        <p class="lead">Payment Methods:</p>
                        <img src="{{ asset('dist/img/credit/visa.png') }}" alt="Visa">
                        <img src="{{ asset('dist/img/credit/mastercard.png') }}" alt="Mastercard">
                        <img src="{{ asset('dist/img/credit/american-express.png') }}" alt="American Express">
                        <img src="{{ asset('dist/img/credit/paypal2.png') }}" alt="Paypal">

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <br>
                <!-- this row will not appear when printing -->
                <div class="row no-print">
                    <div class="col-xs-12" style="display: flex">
                        <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i>
                            Print</a>
                        @if( $value->booking_status == 1)
                            <form action="{{ route('booking.apply') }}" method="POST">
                                @csrf
                                <input type="hidden" name="booking_id" value="{{ $value->booking_id }}">
                                <input type="hidden" name="email" value="{{ $value->users->email }}">
                                <input type="hidden" name="booking_status" value="2">
                                <button href="" type="submit" class="btn btn-success pull-right"
                                        style="margin-right: 10px; margin-left: 20px"><i
                                        class="glyphicon glyphicon-ok"></i>
                                    Xác nhận
                                </button>
                            </form>
                            <form action="{{ route('booking.cancel') }}" method="POST">
                                @csrf
                                <input type="hidden" name="booking_id" value="{{ $value->booking_id }}">
                                <input type="hidden" name="booking_status" value="0">
                                <button type="submit" class="btn btn-danger pull-right">
                                    <i class="glyphicon glyphicon-remove"></i> Hủy tour
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@stop
@section('footer')
    <script src="{{ asset('dist/js/demo.js') }}"></script>
@stop
