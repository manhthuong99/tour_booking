@extends('layouts.master-admin')
@section('header')
    <script type="text/javascript" src="{{  asset('js/jquery.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
@stop
@section('main')
    <div class="row" style="font-size: 20px">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3><b>Chỉnh sửa tour</b></h3>
                </div>
                @foreach( $toursSelected as $item )
                    <form role="form" action="{{ route('tour.update',$item->tours_id) }}" enctype="multipart/form-data"
                          method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="box-body left">
                            @if( session()->get('failed'))
                                <div class="form-group">
                                    <span style="color: red">{{ session()->get('failed') }}</span>
                                </div>
                            @endif

                            <input name="id" type="hidden" class="form-control" value="{{ $item->tours_id }}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên tour (<b style="color: red">*</b>)</label>
                                <input name="name" type="text" class="form-control" placeholder=""
                                       value="{{ $item->name }}" required>
                            </div>
                            <div class="form-group">
                                <label>Danh mục (<b style="color: red">*</b>)</label>
                                <select id="id_category" name="id_category[]" class="form-control select2"
                                        multiple="multiple"
                                        data-placeholder="-- Chọn danh mục --" required>
                                    @foreach( $listCategories as  $value )
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Phương tiện</label>
                                <div>
                                    @foreach( $listTranSport as  $value )
                                        <input style="width: 30px" name="id_transport[]" class="minimal" type="checkbox"
                                               value="{{  $value->id }}"> {{ $value->name }} &nbsp;
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Điểm đến (<b style="color: red">*</b>)</label>
                                <select id="id_destination" name="id_destination" class="form-control select1"
                                        style="width: 100%;" required>
                                    <option value="">-- Chọn địa điểm --</option>
                                    @foreach( $listDestination as  $value )
                                        @if( $value->id = $item->id_destination)
                                            <option selected value="{{ $value->id }}">{{ $value->name }}</option>
                                        @else
                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Hình ảnh</label>
                                <input name="images" type="file" id="exampleInputFile">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá tour (<b style="color: red">*</b>)</label>
                                <input name="price" type="number" class="form-control" placeholder=""
                                       value="{{ $item->price }}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số ngày</label>
                                <input step=".5" name="day_number" type="number" class="form-control"
                                       value="{{ $item->day_number }}" placeholder=""
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giảm giá</label>
                                <input name="discount" type="number" class="form-control" placeholder=""
                                       value="{{ $item->discount }}">
                            </div>
                            <div class="form-group" id="calender">
                                <label for="exampleInputEmail1">Ngày khởi hành (<b style="color: red">*</b>)</label>
                                <input name="calendar" type="date" class="form-control" placeholder=""
                                       value="{{ $item->calendar }}"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả</label>
                                <div class="box-body pad">
                                    <textarea id="description" name="description" rows="10" cols="80">
                                        {{ $item->description }}"
                                    </textarea>
                                </div>
                            </div>
                            @endforeach
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
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>
@stop


