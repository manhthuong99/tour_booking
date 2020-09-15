@extends('layouts.master-admin')
@section('main')
    <head>
        <script type="text/javascript" src="{{  asset('js/jquery.js') }}"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
    </head>
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
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Địa điểm mới</h3>
                </div>
                @foreach( $destinations as $destination)
                    <form role="form" action="{{ route('destination.update', $destination->destination_id) }}"
                          enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="box-body left">
                            <div class="form-group">
                                <input name="id" type="hidden" class="form-control" placeholder=""
                                       value="{{ $destination->destination_id }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên địa điểm (<b style="color: red">*</b>)</label>
                                <input name="name" type="text" class="form-control" placeholder=""
                                       value="{{ $destination->name }}" required>
                            </div>
                            <div class="form-group">
                                <label>Tỉnh/TP (<b style="color: red">*</b>)</label>
                                <select id="id_province" name="id_province" class="form-control select2"
                                        style="width: 100%;" required>
                                    <option value="">-- Chọn tỉnh/TP --</option>
                                    <?php
                                    /** @var array $listProvince */
                                    foreach ($listProvince as $value) {
                                        if ($value['id'] == $destination->id_province) {
                                            echo "<option selected='selected' value='" . $value['id'] . "'>" . $value['_name'] . "</option>";
                                        } else {
                                            echo "<option  value='" . $value['id'] . "'>" . $value['_name'] . "</option>";
                                        }

                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Quận/Huyện</label>
                                <select id="id_district" name="id_district" class="form-control select2"
                                        style="width: 100%;">
                                    <option value="">-- Chọn Quận/Huyện --</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Hình ảnh (<b style="color: red">*</b>)</label>
                                <input name="image" type="file" id="exampleInputFile" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giới thiệu</label>
                                <div class="box-body pad">
                                            <textarea id="description" name="description" rows="10"
                                                      cols="80" required>{{ $destination->description }}</textarea>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('description')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>
@stop


