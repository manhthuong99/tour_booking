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
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    @if( session()->get('success'))
                        <div class="alert alert-success mt-3">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if( session()->get('failed'))
                        <div class="alert alert-danger mt-3">
                            {{ session()->get('failed') }}
                        </div>
                    @endif
                    <h3 class="box-title">Danh sách đặt tour</h3>
                </div>
                <div class="box-body">
                    <table id="example" class="stripe row-border order-column" style="width:100%">
                        <thead>
                        <tr>
                            <th>Tên tour</th>
                            <th>Ngày khởi hành</th>
                            <th>Tên khách hàng</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Số người</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach( $listBooking as $value )
                            <tr>
                                <td>{{ $value->tours->name }}</td>
                                <td> {{ $value->tours->calendar }}</td>
                                <td> {{ $value->customer_name }}</td>
                                <td> {{ $value->email }}</td>
                                <td> {{ $value->phone_number }}</td>
                                <td> {{ $value->number_person }}</td>
                                <td> {{ $value->total }}</td>
                                @if($value->booking_status==0)
                                    <td style="color: yellow">Đang chờ duyệt</td>
                                @endif
                                @if($value->booking_status==1)
                                    <td style="color: green">Đã duyệt</td>
                                @endif
                                @if($value->booking_status==2)
                                    <td style="color: red">Đã duyệt</td>
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
                <!-- /.box-body -->
            </div>
        </div>
    </div>
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
