<!DOCTYPE html>
<html lang="en">
<head>
    <title>KindDo Travel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href={{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href={{ asset('frontend/vendor/animate/animate.cs') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('frontend/vendor/css-hamburgers/hamburgers.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('frontend/vendor/animsition/css/animsition.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('frontend/vendor/select2/select2.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('frontend/vendor/daterangepicker/daterangepicker.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('frontend/css/util.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('frontend/css/login.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('frontend/css/addMore.css') }}>
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/ht_gt1.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" action="../Model/server.php" method="post">

					<span class="login100-form-title p-b-49" style="font-family: sans-serif; font-weight: bold;">
						Kinh Đô Travel
					</span>
                <span class="login100-form-title " style="font-family: sans-serif; font-size: 25px">
						Đăng ký
					</span>

                <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                    <span class="label-input100">Tài Khoản</span>
                    <div class="flexform">
                        <i class='fa fa-user iconFormDK'></i>
                        <input class="input100 inputFormDK" type="text" name="username" placeholder="Tài khoản">
                    </div>
                </div>

                <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                    <span class="label-input100">Email</span>
                    <div class="flexform">
                        <i class='fa fa-envelope iconFormDK'></i>
                        <input class="input100 inputFormDK" type="email" name="email" placeholder="Nhập Email">
                    </div>
                </div>

                <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                    <span class="label-input100">Phone</span>
                    <div class="flexform">
                        <i class='fa fa-phone iconFormDK'></i>
                        <input class="input100 inputFormDK" type="text" name="phone" placeholder="Nhập số điện thoại">
                    </div>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required"
                     style="margin-bottom: 23px">
                    <span class="label-input100">Mật khẩu</span>
                    <div class="flexform">
                        <i class='fa fa-lock iconFormDK'></i>
                        <input class="input100 inputFormDK" type="password" name="password" placeholder="Mật khẩu">
                    </div>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Nhập lại mật khẩu</span>
                    <div class="flexform">
                        <i class='fa fa-lock iconFormDK'></i>
                        <input class="input100 inputFormDK" type="password" name="password"
                               placeholder="Nhập lại mật khẩu">
                    </div>
                </div>
                <div style="height:10px">
                </div>
                <span id="re-password" style="color: red; margin-top:10px "> hai mật khẩu không trùng nhau</span>
                <div style="height:20px">
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" name="login" style="font-family:sans-serif; ">
                            Đăng ký
                        </button>
                    </div>
                </div>
                <div style="height:20px"></div>
                <div class="">
                    Bạn chưa đã tài khoản? <a href="{{ route('frontend.login') }}"
                                              style="color: darkviolet; ;font-family:sans-serif; font:caption;">
                        Đăng nhập</a>

                </div>
            </form>
        </div>
    </div>
</div>


<script src={{ asset('frontend/vendor/jquery/jquery-3.2.1.min.js') }}></script>
<script src={{ asset('frontend/vendor/animsition/js/animsition.min.js') }}></script>
<script src={{ asset('frontend/vendor/bootstrap/js/popper.js') }}></script>
<script src={{ asset('frontend/vendor/bootstrap/js/bootstrap.min.js') }}></script>
<script src={{ asset('frontend/vendor/select2/select2.min.js') }}></script>
<script src={{ asset('frontend/vendor/daterangepicker/moment.min.js') }}></script>
<script src={{ asset('frontend/vendor/daterangepicker/daterangepicker.js') }}></script>
<script src={{ asset('frontend/vendor/countdowntime/countdowntime.js') }}></script>
<script src={{ asset('frontend/js/main.js') }}></script>
</body>
</html>
