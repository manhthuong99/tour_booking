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
                            <th width="40%">Tên điểm đến</th>
                            <th width="45%">Địa chỉ</th>
                            <th width="5%"></th>
                            <th width="5%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $listDestination as $value )
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td> {{ $value->address }}</td>
                                <td align="center">
                                    <button><a style="margin-left: 20%"
                                               href="{{ route('destination.edit',$value->destination_id) }}"><span
                                                class="glyphicon glyphicon-edit"></span></a></button>
                                </td>
                                <td align="center">
                                    <form method="POST"
                                          action="{{ route('destination.destroy', $value->destination_id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <span class="glyphicon glyphicon-floppy-remove"></span>
                                        </button>
                                    </form>
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
