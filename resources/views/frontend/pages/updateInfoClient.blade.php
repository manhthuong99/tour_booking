@extends('layouts.layout')
@section('content')
    <style>
        .visuallyhidden {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        .avatar {
            max-width: 100%;
            vertical-align: center;
            object-fit: cover;
            width: 250px;
            height: 250px;
        }
    </style>
    <script type='text/javascript'>
        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('avatar');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

    <div id="vnt-content">
        <div id="vnt-navation" class="breadcrumb">
            <div class="container">
                <div class="wrapper">
                    <div class="navation">
                        <ul>
                            <li>
                                <a title="Trang chủ" href="index.php">
                                    <span itemprop="title">Trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <a href="dulichmienbac.php">
                                    <span>update user</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- hết breadcrumb -->
        @foreach($users as $user)
            <div class="lzd-playground">
                <div class="lzd-playground-main">
                    <div class="lzd-playground-right">
                        <div class="breadcrumbkhachhang">
                            <a data-spm-anchor-id="a2o4n.manage_account.0.0">Quản lý tài khoản</a>
                        </div>
                        <div id="container" class="container rightContainer_1UxO">
                            <form class="accountFormWrap_2oXG" action="{{ route('frontend.saveProfile') }}"
                                  method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="accountPage_2lsd">
                                    <div class="row pageInner_1FHx">
                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <div class="avatar_3KH_">
                                                <div>
                                                    <img class="avatar"
                                                         src="{{ asset('storage/avatars/'.$user->avatar) }}"
                                                         alt="avatar" id="avatar">
                                                    {{--                                            <input>Thay đổi</input>--}}

                                                </div>

                                            </div>
                                            <input type="file" name="avatar" id="file-input" class="visuallyhidden"
                                                   accept="image/*" onchange="preview_image(event)">
                                            <button name="avatar" style="width: 120px"
                                                    class="file-upload btn btn-success">Thay đổi
                                            </button>
                                        </div>
                                        <div class="col-sm-12 col-md-10 col-lg-10">
                                            <div>
                                                <div class="form-group row">
                                                    <label for="phone" class="col-sm-2 col-form-label phoneLabel_3lBr">
                                                        <span>Email</span>
                                                    </label>
                                                    <input type="hidden" value="{{ $user->users_id }}" name="id">
                                                    <div class="col-sm-10 col-md-6 col-lg-6 inputkh">
                                                        <div class="phoneInput_Q_2V">
                                                            <input name="" class="form-control"
                                                                   type="text" placeholder="" value="{{ $user->email }}"
                                                                   disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="firstName" class="col-sm-2 col-form-label">Họ và
                                                        tên:</label>
                                                    <div class="col-sm-10 col-md-6 col-lg-6">
                                                        <input name="fullname" class="form-control" type="text"
                                                               maxlength="30" tabindex="3"
                                                               value="{{ $user->fullname }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="phone" class="col-sm-2 col-form-label phoneLabel_3lBr">
                                                        <span>Số điện thoại:</span>
                                                    </label>
                                                    <div class="col-sm-10 col-md-6 col-lg-6">
                                                        <div class="phoneInput_Q_2V">
                                                            <input name="phone_number" class="form-control" type="text"
                                                                   placeholder="" value="{{ $user->phone_number }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="phone" class="col-sm-2 col-form-label phoneLabel_3lBr">
                                                        <span>Địa chỉ:</span>
                                                    </label>
                                                    <div class="col-sm-10 col-md-6 col-lg-6">
                                                        <div class="phoneInput_Q_2V">
                                                            <input name="address" class="form-control" type="text"
                                                                   placeholder="" value="{{ $user->address }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email"
                                                           class="col-sm-2 col-form-label birthdayLabel_2KaK">Ngày
                                                        sinh:</label>
                                                    <div class="col-sm-10 col-md-6 col-lg-6">
                                                        <div class="DayPickerInput">
                                                            <input type="date" name="birthday"
                                                                   class="form-text get_date"
                                                                   value="{{ $user->birthday }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email" class="col-sm-2 col-form-label"></label>
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="userSubmit_3ASx">Cập nhật</button>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>
        $('#lfm').filemanager('image');
        $('.file-upload').on('click', function (e) {
            e.preventDefault();
            $('#file-input').trigger('click');
        });
    </script>

@endsection
