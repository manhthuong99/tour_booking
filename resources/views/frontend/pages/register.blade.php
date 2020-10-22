<!DOCTYPE html>
<html lang="en">
<head>
    <title>KindDo Travel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
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
    <script type="text/javascript" src="{{  asset('js/jquery.js') }}"></script>
</head>
<body>
<script>
    jQuery(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let check = true;
        $('#username').blur(function () {
            let username = $('#username').val();
            console.log(username)
            $.post('{{ route('frontend.checkUsername') }}', {
                    "username": username
                }, function (data) {
                    if (data) {
                        $("#validate-username").html('Tên tài khoản đã được sử dụng')
                        check = false;
                    } else $("#validate-username").html('')
                    check = true
                }
            )
        })
        $('#email').blur(function () {
            let email = $('#email').val();
            console.log(email)
            $.post('{{ route('frontend.checkEmail') }}', {
                    "email": email
                }, function (data) {
                    if (data) {
                        $("#validate-email").html('Email đã được sử dụng')
                        check = false;
                    } else $("#validate-email").html('')
                    check = true
                }
            )
        })
        $('#repassword').keyup( function () {
            let password = $('#password').val();
            let rePassword = $('#repassword').val();
            console.log(rePassword +'+'+ password)
            if (rePassword == password) {
                $("#validate-password").html('')
                check = true
                console.log('oke')
            } else if (rePassword != password) {

                $("#validate-password").html('Mật khẩu không khớp')
                check = false;
            }
        })
        if (check == true) {
            $('#registerForm').on('submit', function (event) {
                event.preventDefault();

                let username = $('#username').val();
                let email = $('#email').val();
                let password = $('#password').val();

                $.ajax({
                    url: "{{ route('frontend.registerUser') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        username: username,
                        email: email,
                        password: password
                    },
                    success: function (data) {
                        alert(data)
                        window.location='/login'
                        console.log(data);
                    },
                });
            });
        }
    });
</script>
<div class="limiter">
    <div class="container-login100" style="background-image: url({{ asset('images/ht_gt1.jpg') }});">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form id="registerForm" name="registerForm" class="login100-form validate-form"
                  action="{{ route('frontend.registerUser') }}" method="post">
                @csrf
                <span class="login100-form-title p-b-49" style="font-family: sans-serif; font-weight: bold;">
						Kinh Đô Travel
					</span>
                <span class="login100-form-title " style="font-family: sans-serif; font-size: 25px">
						Đăng ký
					</span>
                <div class="wrap-input100 validate-input m-b-23 reMargin" data-validate="Username is reauired">
                    <span class="label-input100">Email</span>
                    <div class="flexform">
                        <i class='fa fa-envelope iconFormDK'></i>
                        <input class="input100 inputFormDK" type="email" id="email" name="email"
                               placeholder="Nhập Email">
                    </div>
                </div>
                <span id="validate-email" class="validForm"></span>
                <div class="wrap-input100 validate-input m-b-23 reMargin" data-validate="Username is reauired">
                    <span class="label-input100">Tài Khoản</span>
                    <div class="flexform">
                        <i class='fa fa-user iconFormDK'></i>
                        <input class="input100 inputFormDK" type="text" id="username" name="username"
                               placeholder="Tài khoản">
                    </div>
                </div>
                <span id="validate-username" class="validForm"></span>
                <div class="wrap-input100 validate-input reMargin" data-validate="Password is required"
                     style="margin-bottom: 23px">
                    <span class="label-input100">Mật khẩu</span>
                    <div class="flexform">
                        <i class='fa fa-lock iconFormDK'></i>
                        <input class="input100 inputFormDK" type="password" id="password" name="password" placeholder="Mật khẩu">
                    </div>
                </div>

                <div class="wrap-input100 validate-input reMargin" data-validate="Password is required">
                    <span class="label-input100">Nhập lại mật khẩu</span>
                    <div class="flexform">
                        <i class='fa fa-lock iconFormDK'></i>
                        <input class="input100 inputFormDK" type="password" name="re-password" id="repassword"
                               placeholder="Nhập lại mật khẩu">
                    </div>
                </div>
                <div style="height:10px">
                </div>
                <span id="validate-password" class="validForm"></span>
                <div style="height:20px">
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button id="submit" class="login100-form-btn" name="login" style="font-family:sans-serif; ">
                            Đăng ký
                        </button>
                    </div>
                </div>
                <div style="height:20px"></div>
                <div class="">
                    Bạn đã có tài khoản?
                    <a href="{{ route('frontend.login') }}"
                       style="color: darkviolet; ;font-family:sans-serif; font:caption;">
                        Đăng nhập</a>

                </div>
            </form>
        </div>
    </div>
</div>
<script>

    <
    script
    type = "text/javascript"
    src = "https://www.technicalkeeda.com/js/javascripts/plugin/jquery.js" ></script>
<script type="text/javascript" src="https://www.technicalkeeda.com/js/javascripts/plugin/jquery.validate.js"></script>
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
