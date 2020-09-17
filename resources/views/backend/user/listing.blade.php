@extends('layouts.master-admin')
@section('main')
    <style>
        td button a {
            color: black;
        }
    </style>
    <div class="box">
        @if(session()->get('success'))
            <div class="alert alert-success mt-3">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="box-header">
            <h3 class="box-title">Danh sách user</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <td width="3%" align="center"><h4><b>STT</b></h4></td>
                    <td width="15%"><h4><b>Username</b></h4></td>
                    <td width="20%"><h4><b>Email</b></h4></td>
                    <td width="20%"><h4><b>Họ tên</b></h4></td>
                    <td width="20%"><h4><b>Địa chỉ</b></h4></td>
                    <td width="12%"><h4><b>Số điện thoại</b></h4></td>
                    <td width="10%" colspan="2" align="center"><h4><b>Thao tác</b></h4></td>
                </tr>
                </thead>
                <tbody>
                @php($i = 1)
                @foreach( $listUser as $value )
                    <tr>
                        <td align="center">{{ $i++ }}</td>
                        <td>{{ $value->username }}</td>
                        <td> {{ $value->email }}</td>
                        <td> {{ $value->fullname }}</td>
                        <td> {{ $value->address }}</td>
                        <td> {{ $value->phone_number }}</td>
                        <td align="center">
                            <button><a href="{{ route('user.show',$value->users_id) }}"><i class="fa fa-fw fa-eye"></i></a>
                            </button>
                        </td>
                        <td align="center">
                            <form method="POST" action="{{ route('user.destroy', $value->users_id) }}">
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
            <span class="pagination">{{ $listUser->render() }}</span>
        </div>
        <!-- /.box-body -->
    </div>
    <script type="text/javascript">
        function delRecord() {
            alert('Bạn thực sự muốn xóa ?? ')
        }
    </script>
@stop
