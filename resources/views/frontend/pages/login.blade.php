<!DOCTYPE html>
<html lang="en">
<head>
	<title>502 Travel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href={{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}>
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
		<div class="container-login100" style="background-image: url('images/background.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="../Model/server.php" method="post">

					<span class="login100-form-title p-b-49" style="font-family: sans-serif;">
						KinhDo Travel
					</span>
					<span class="login100-form-title " style="font-family: sans-serif; font-size: 25px">
						Đăng nhập
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Tài Khoản</span>
						<input class="input100" type="text" name="username" placeholder="Tài khoản">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Mật khẩu</span>
						<input class="input100" type="password" name="password" placeholder="Mật khẩu">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="text-left p-t-8 p-b-31">
							<input type="checkbox" name="" value=""> Nhớ mật khẩu
					</div>
					
					<div class="" >
							Bạn chưa có tài khoản? <a href="#" style="color: darkviolet; ;font-family:sans-serif; font:caption;">Đăng ký ngay hoàn toàn miễn phí</a>
						
					</div>

					<div class="text-left p-b-31">
							Quên mật khẩu? <a href="#" style="color: blueviolet; font-family:sans-serif; font:caption;">Lấy lại mật khẩu</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login" style="font-family:sans-serif; ">
								Đăng nhập
							</button>
						</div>
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