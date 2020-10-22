@extends('layouts.layout')
@section('content')

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
                        <div class="accountPage_2lsd">
                            <div class="row pageInner_1FHx">
                                <div class="col-sm-12 col-md-2 col-lg-2">
                                    <div class="avatar_3KH_">
                                        <div>
                                            <img src="{{ asset('storage/avatars/'.$user->avatar) }}"
                                                 alt="avatar">
{{--                                            <input>Thay đổi</input>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-10 col-lg-10">
                                    <div>
                                        <form class="accountFormWrap_2oXG">

                                            <div class="form-group row">
                                                <label for="phone" class="col-sm-2 col-form-label phoneLabel_3lBr">
                                                    <span>Email</span>
                                                </label>
                                                <div class="col-sm-10 col-md-6 col-lg-6 inputkh">
                                                    <div class="phoneInput_Q_2V">
                                                        <input name="phone" class="form-control removeBorder"
                                                               type="text" placeholder="" value="{{ $user->email }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="firstName" class="col-sm-2 col-form-label">Họ và
                                                    tên:</label>
                                                <div class="col-sm-10 col-md-6 col-lg-6">
                                                    <input name="firstName" class="form-control" type="text"
                                                           maxlength="30"  tabindex="3"
                                                           value="{{ $user->fullname }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="phone" class="col-sm-2 col-form-label phoneLabel_3lBr">
                                                    <span>Số điện thoại:</span>
                                                </label>
                                                <div class="col-sm-10 col-md-6 col-lg-6">
                                                    <div class="phoneInput_Q_2V">
                                                        <input name="phone" class="form-control" type="text"
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
                                                            <input name="phone" class="form-control" type="text"
                                                                   placeholder="" value="{{ $user->address }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-2 col-form-label birthdayLabel_2KaK">Ngày
                                                    sinh:</label>
                                                <div class="col-sm-10 col-md-6 col-lg-6">
                                                    <div class="DayPickerInput">
                                                        <input type="date" name="ngay_di" class="form-text get_date"
                                                               value="{{ $user->birthday }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-2 col-form-label birthdayLabel_2KaK">Ngày
                                                    sinh:</label>
                                                <div class="col-sm-10 col-md-6 col-lg-6">
                                                    <div class="input-group">
                                                        <input type="button" id="lfm" data-input="thumbnail" data-preview="holder" value="Upload">
                                                        <input id="thumbnail" class="form-control" type="text" name="filepath">
                                                    </div>
                                                    <img id="holder" style="margin-top:15px;max-height:100px;">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    <button type="submit" class="userSubmit_3ASx">Cập nhật</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    </script>

@endsection
