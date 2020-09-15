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
                    <h3 class="box-title">Danh sách điểm đến</h3>
                </div>
                <div class="box-body">
                    <table id="example" class="stripe row-border order-column" style="width:100%">
                        <thead>
                        <tr>
                            <th width="30%">Tên tour</th>
                            <th width="10%">Giá</th>
                            <th width="18%">Điểm đến</th>
                            <th width="17%">Địa chỉ</th>
                            <th width="15%">Trạng thái</th>
                            <th width="5%"></th>
                            <th width="5%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $listTours as $value )
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td> {{ $value->price }} VNĐ</td>
                                <td> {{ $value->destination->name }}</td>
                                <td> {{ $value->destination->address }}</td>
                                @if( $value->status==1)
                                    <td style="color: #32CD32">Đang kinh doanh</td>
                                @endif
                                @if( $value->status==0)
                                    <td style="color: #B22222">Ngừng kinh doanh</td>
                                @endif
                                <td align="center">
                                    <button><a href="{{ route('tour.edit',$value->tours_id) }}"><i
                                                class="glyphicon glyphicon-edit"></i></a>
                                    </button>
                                </td>
{{--                                <td align="center">--}}
{{--                                    <form method="POST" action="{{ route('tour.destroy', $value->tours_id) }}">--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}
{{--                                        <button type="submit">--}}
{{--                                            <span class="glyphicon glyphicon-floppy-remove"></span>--}}
{{--                                        </button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
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
