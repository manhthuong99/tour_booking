@extends('layouts.master-admin')
@section('main')
    <div class="row" style="font-size: 20px">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <!-- general form elements -->
            @extends('layouts.master-admin')
            @section('main')
                <div class="row">
                    <div class="col-md-4">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3><b>Chỉnh Sửa</b></h3>
                            </div>
                            @foreach( $editCategories as $value)
                            <form role="form" action="{{ route('category.update', $value->category_detail_id) }}" enctype="multipart/form-data"
                                  method="POST">
                                @csrf
                                @method('PATCH')
                                    <input name="id" type="hidden" class="form-control" placeholder="" value="{{ $value->category_detail_id }}">
                                <div class="box-body left">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên địa điểm (<b style="color: red">*</b>)</label>
                                        <input name="name" type="text" class="form-control" placeholder="" required value="{{ $value->category_detail_name }}">
                                    </div>
                                    <div class="form-group">
                                        <label>VỊ trí (<b style="color: red">*</b>)</label>
                                        <select id="position" name="position" class="form-control select2"
                                                style="width: 100%;">
                                            <option value="1" selected="selected">Top Menu</option>
                                            <option value="2">Left Menu</option>
                                        </select>
                                    </div>
                                </div>
                                @endforeach
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary" style="width: 200px">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-8">

                        <div class="box">
                            @if(session()->get('success'))
                                <div class="alert alert-success mt-3">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            @if(session()->get('failed'))
                                <div class="alert alert-danger mt-3">
                                    {{ session()->get('failed') }}
                                </div>
                            @endif
                            <div class="box-header">
                                <h3 class="box-title"><b>Danh sách danh mục</b></h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr align="center">
                                        <td align="center" width="3%"><h4><b>STT</b></h4></td>
                                        <td width="40%"><h4><b>Tên danh mục</b></h4></td>
                                        <td width="47%"><h4><b>Vị trí</b></h4></td>
                                        <td align="center" width="10%" colspan="2"><h4><b>Thao tác</b></h4></td>
                                    </tr>
                                    </thead>
                                    <tbody id="table_data">
                                    @php($i =1)
                                    @foreach( $listCategories as $value )
                                        <tr>
                                            <td align="center">{{ $i++ }}</td>
                                            <td>{{ $value->category_detail_name }}</td>
                                            @if( $value->position == 1)
                                                <td>Top Menu</td>
                                            @endif
                                            @if( $value->position == 2)
                                                <td>Left Menu</td>
                                            @endif
                                            <td align="center">
                                                <button><a style="margin-left: 20%"
                                                           href="{{ route('category.edit',$value->category_detail_id) }}"><span
                                                            class="glyphicon glyphicon-edit"></span></a></button>
                                            </td>
                                            <td align="center">
                                                <form method="POST"
                                                      action="{{ route('category.destroy', $value->category_detail_id) }}">
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
                                <span class="pagination">{{ $listCategories->render() }}</span>
                            </div>

                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
                <script type="text/javascript" src="{{  asset('js/jquery.js') }}"></script>
                <script type="text/javascript">
                    function delRecord() {
                        alert('Bạn thực sự muốn xóa ?? ')
                    }
                </script>
                <script>
                    $(document).ready(function () {
                        $('#search').on('keyup', function () {
                            let search = $(" #search ").val();
                            $.get('{{ route('destination.filter') }}', {
                                "search": search
                            }, function (data) {
                                // console.log(data)
                                $("#table_data").html(data)
                            })
                        })

                    })
                </script>

            @stop

            <div class="col-md-6">
            </div>
            <!-- /.box -->
        </div>
    </div>
@stop


