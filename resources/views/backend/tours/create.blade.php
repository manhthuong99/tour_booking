@extends('layouts.master-admin')
@section('header')
    <script type="text/javascript" src="{{  asset('js/jquery.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
    <script>
        jQuery(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#id_province').change(function () {
                let id_province = $("#id_province").val();
                $.post('{{ route('listDistrict') }}', {
                        "id": id_province
                    }, function (data) {
                        $("#id_district").html(data)
                    }
                )
            })
        });
    </script>
@stop
@section('main')
    <div class="row" style="font-size: 20px">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3><b>TOUR MỚI</b></h3>
                </div>
                <form role="form" action="{{ route('tour.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="box-body left">
                        @if( session()->get('failed'))
                            <div class="form-group">
                                <span style="color: red">{{ session()->get('failed') }}</span>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên tour (<b style="color: red">*</b>)</label>
                            <input name="name" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Danh mục (<b style="color: red">*</b>)</label>
                            <select id="id_category" name="id_category[]" class="form-control select2"
                                    multiple="multiple"
                                    data-placeholder="-- Chọn danh mục --" required>
                                @foreach( $listCategories as  $value )
                                    <option
                                        value="{{ $value->category_detail_id }}">{{ $value->category_detail_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Phương tiện</label>
                            <div>
                                @foreach( $listTranSport as  $value )
                                    <input style="width: 30px" name="id_transport[]" class="minimal" type="checkbox"
                                           value="{{  $value->transport_detail_id }}"> <i
                                        class="{{ $value->icon }}"></i> &nbsp;{{ $value->transport_detail_name }}
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Điểm đến (<b style="color: red">*</b>)</label>
                            <input name="destination" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Tỉnh/TP</label>
                            <select id="id_province" name="id_province" class="form-control select2"
                                    style="width: 100%;" required>
                                <option value="" selected="selected">-- Chọn tỉnh/TP --</option>
                                <?php
                                /** @var array $listProvince */
                                foreach ($listProvince as $value) {
                                    echo "<option value='" . $value->id . "'>" . $value->_name . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Quận/Huyện</label>
                            <select id="id_district" name="id_district" class="form-control select2"
                                    style="width: 100%;">
                                <option value="" selected="selected">-- Chọn Quận/Huyện --</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình ảnh</label>
                            <input name="images" type="file" id="exampleInputFile">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá tour (<b style="color: red">*</b>)</label>
                            <input name="price" type="number" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số ngày (<b style="color: red">*</b>)</label>
                            <input step=".5" name="day_number" type="number" class="form-control" placeholder=""
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giảm giá</label>
                            <input name="discount" type="number" class="form-control" placeholder="" value="0">
                        </div>
                        <div class="form-group" id="calender">
                            <label for="exampleInputEmail1">Ngày khởi hành (<b style="color: red">*</b>)</label>
                            <input name="calendar" type="date" class="form-control" placeholder="" value="0" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả ngắn</label>
                            <div class="box-body pad">
                                <textarea id="short_description" name="short_description" rows="10" cols="80"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả</label>
                            <div class="box-body pad">
                                <textarea id="description" name="description" rows="10" cols="80"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary" style="width: 200px">Lưu</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
            </div>
            <!-- /.box -->
        </div>
    </div>
@stop
@section('footer')
    <script>
        $(function () {
            $('.select2').select2()
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('description')
            CKEDITOR.replace('short_description')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>
@stop


