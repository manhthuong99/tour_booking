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
                    <h3 class="box-title"><a href="{{ route('user.create') }}" class="btn btn-success">Tạo mới</a></h3>
                </div>
                <div class="box-body">
                    <table id="example" class="stripe row-border order-column" style="width:100%">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Họ tên</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $listUser as $value )
                            <tr>
                                <td> {{ $value->username }}</td>
                                <td> {{ $value->email }}</td>
                                <td> {{ $value->fullname }}</td>
                                <td> {{ $value->address }}</td>
                                <td> {{ $value->phone_number }}</td>
                                <td align="center">
                                    <button><a href="{{ route('user.show',$value->users_id) }}"><i
                                                class="fa fa-fw fa-eye"></i></a>
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
