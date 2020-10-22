@extends('layouts.layout')
@section('content')
    @foreach( $Users as $user)
        <div id="vnt-content">
            <div id="vnt-navation" class="breadcrumb">
                <div class="container">
                    <div class="wrapper">
                        <div class="navation">
                            <ul>
                                <li>
                                    <a title="Trang chủ" href="{{ route('frontend.home') }}">
                                        <span itemprop="title">Trang chủ</span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span>Thông tin khách hàng</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- hết breadcrumb -->
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
                                                <img src="{{ asset('storage/avatars/'.$user->avatar) }}" title="Avatar" alt="Avatar">
{{--                                                <input type="file">--}}
{{--                                                <button type="file">Thay đổi</button>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-10 col-lg-10">
                                        <div>
                                            <form class="accountFormWrap_2oXG">
                                                <div class="form-group row">
                                                    <label for="firstName" class="col-sm-2 col-form-label">Họ và
                                                        tên:</label>
                                                    <div class="col-sm-10 col-md-6 col-lg-6">
                                                        <input name="firstName"
                                                               class="form-control pointerEvent removeBorder"
                                                               type="text" maxlength="30"
                                                               tabindex="3" value="{{ $user->fullname }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="phone" class="col-sm-2 col-form-label phoneLabel_3lBr">
                                                        <span>Email</span>
                                                    </label>
                                                    <div class="col-sm-10 col-md-6 col-lg-6 inputkh">
                                                        <div class="phoneInput_Q_2V">
                                                            <input name="phone"
                                                                   class="form-control pointerEvent removeBorder"
                                                                   type="text" placeholder=""
                                                                   value="{{ $user->email }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="phone" class="col-sm-2 col-form-label phoneLabel_3lBr">
                                                        <span>Số điện thoại:</span>
                                                    </label>
                                                    <div class="col-sm-10 col-md-6 col-lg-6">
                                                        <div class="phoneInput_Q_2V">
                                                            <input name="phone"
                                                                   class="form-control pointerEvent removeBorder"
                                                                   type="text" placeholder="" value="{{ $user->phone_number }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email" class="col-sm-2 col-form-label">Địa chỉ
                                                        tính:</label>
                                                    <div class="col-sm-10 col-md-6 col-lg-6">
                                                        <div class="phoneInput_Q_2V">
                                                            <input name="phone"
                                                                   class="form-control pointerEvent removeBorder"
                                                                   type="text" placeholder="" value="{{ $user->address }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email"
                                                           class="col-sm-2 col-form-label birthdayLabel_2KaK">Ngày
                                                        sinh:</label>
                                                    <div class="col-sm-10 col-md-6 col-lg-6">
                                                        <div class="phoneInput_Q_2V">
                                                            <input name="phone"
                                                                   class="form-control pointerEvent removeBorder"
                                                                   type="text" placeholder="" value="{{ $user->birthday }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email" class="col-sm-2 col-form-label"></label>
                                                    <div class="col-sm-10">
                                                        <button class="userSubmit_3ASx">
                                                            <a href="{{ route('frontend.updateProfile',$user->users_id) }}">Sửa thông tin</a>
                                                        </button>
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
        </div>
    @endforeach
@endsection
