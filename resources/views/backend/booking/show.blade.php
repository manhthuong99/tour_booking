@extends('layouts.master-admin')
@section('main')
    <div class="row">
        <div class="col-md-4">
            <!-- Profile Image -->
            <div class="box box-primary">
                @foreach( $Booking as $value)
                    <div class="box-body box-profile">
                        <h2 align="center" style="margin-bottom: 50px; margin-top: 20px; font-size: 40px" class>
                            <b>{{ $value->fullname }}</b></h2>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item custom1">
                                <b>Tên tour</b> <a class="pull-right">ABC</a>
                            </li>
                            <li class="list-group-item custom1">
                                <b>Ngày khởi hành</b> <a class="pull-right">ABC</a>
                            </li>
                            <li class="list-group-item custom1">
                                <b>Tên khách hàng</b> <a class="pull-right">{{ $value->customer_name }}</a>
                            </li>
                            <li class="list-group-item custom1">
                                <b>Email</b> <a class="pull-right">{{ $value->email }}</a>
                            </li>
                            <li class="list-group-item custom1">
                                <b>Số điện thoại</b> <a class="pull-right">{{ $value->phone_number }}</a>
                            </li>
                            <li class="list-group-item custom1">
                                <b>Địa chỉ</b> <a class="pull-right">{{ $value->address }}</a>
                            </li>
                            <li class="list-group-item custom1">
                                <b>Số người</b> <a class="pull-right">{{ $value->number_person }}</a>
                            </li>
                            <li class="list-group-item custom1">
                                <b>Tổng tiền</b> <a class="pull-right">{{ $value->total }}</a>
                            </li>
                            <li class="list-group-item custom1">
                                <b>Ngày đặt</b> <a class="pull-right">{{ $value->create_at }}</a>
                            </li>
                        </ul>
                        @if( $value->booking_status == 0 )
                            <form action="{{ route('booking.apply') }}" method="POST">
                                @csrf
                                <input type="hidden" name="booking_id" value="{{ $value->booking_id }}">
                                <input type="hidden" name="booking_status" value="1">
                                <button style="float: right" class="btn btn-lg btn-success">Xác nhận</button>
                            </form>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /.row -->

@stop
