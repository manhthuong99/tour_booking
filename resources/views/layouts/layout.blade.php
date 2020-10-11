<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script type="text/javascript" src={{ asset('frontend/vendor/bootstrap.js') }}></script>
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap.css') }}">
	<link rel="stylesheet" href={{ asset('frontend/css/main.css') }}>
    
    {{-- css --}}
    <link rel="stylesheet" href={{ asset('frontend/css/header.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/css/glide.core.min.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/css/slide.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/css/wavyEffect.css') }}>
	<link rel="stylesheet" href={{ asset('frontend/css/flipCardHover.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/css/about.css') }}>
	<link rel="stylesheet" href={{ asset('frontend/css/addMore.css') }}>
	<link rel="stylesheet" href={{ asset('frontend/css/tiltEffect.scss') }}>
	<link rel="stylesheet" href={{ asset('frontend/css/bannerHoverEffect.css') }}>
	<link rel="stylesheet" href={{ asset('frontend/css/parallaxScrollBanner.css') }}>
	<link rel="stylesheet" href={{ asset('frontend/css/modal.css') }}>

    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
	{{-- font --}}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Poppins" rel="stylesheet"/>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
	<div id="topheader">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
			<div class="container">
				<a class="navbar-brand" href="http://127.0.0.1:8000/home">KinhDO - Travel</a>
			
				<div class=" menu" >
					<ul class="navbar-nav mr-auto w-100 justify-content-end menuBar">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle menu-item" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-user"></i> 
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item tittleHeader" href="http://127.0.0.1:8000/login">Đăng nhập</a>
								<a class="dropdown-item tittleHeader" href="http://127.0.0.1:8000/register">Đăng ký</a>
							</div>
						</li>
						<li class="nav-item"><a href="#" class="nav-link" id="search"><i class="fa fa-search"></i></a></li>
						<li class="ghl_menu nav-item" id="_open">
							<button type="button" id="ghl_menu btn2" class="btnMenuBar">
								<span class="icon" id="icon">
									<span id="icontren"></span>
									<span id="iconduoi"></span>
								</span>
							</button>
						</li> 
					</ul>
					<div class="search-form">
						<form>
							<input type="text" name="" placeholder="Search">
						</form>
					</div>
					<a href="#" class="close"><i class="fa fa-times"></i></a>
				</div>
			</div>
		</nav>
	</div>
	<nav id="global_navigation" class="global_navigation" role="navigation" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
		<div class="global_inner">
			<ul class="gn_links-01">
				<li class="child"> 
					<a href="http://127.0.0.1:8000/travel" class="noUnderline"> 
						<span class="titleHeader">Du lịch</span> 
					</a> 
					<button class="gnl_button" id="btnmore" type="button">
						<span class="iconbtnmore"></span>
						<span>yasuo</span>
						<span class="iconbtnmore" id="iconbtnmoredeg1"></span>
					</button> 
					<div class="gnl_inner"> 
						<div class="global_inner" id="navmore"> 
							<ul> 
								<li class=""> 
									<a href="http://127.0.0.1:8000/travel" class="noafter"> 
										<span>Hùng vĩ miền Bắc</span> 
									</a> 
								</li> 
								<li class=""> 
									<a href="http://127.0.0.1:8000/travel" class="noafter"> 
										<span>Nắng gió miền Trung</span> 
									</a> 
								</li> 
								<li class=""> 
									<a href=http://127.0.0.1:8000/travel" class="noafter"> 
										<span>Sông nước miền Nam</span> 
									</a> 
								</li> 
							</ul> 
						</div> 
					</div> 
				</li>
				<li> 
					<a href="http://127.0.0.1:8000/hotel" class="noUnderline"> 
						<span class="titleHeader">Khách sạn</span> 
					</a> 
				</li>
				<li> 
					<a href="http://127.0.0.1:8000/transport" class="noUnderline"> 
						<span class="titleHeader">Vận chuyển</span> 
					</a> 
				</li>
				<li> 
					<a href="http://127.0.0.1:8000/contact"  class="noUnderline"> 
						<span class="titleHeader">Liên hệ</span> 
					</a> 
				</li>
				<li> 
					<a href="http://127.0.0.1:8000/about"  class="noUnderline"> 
						<span class="titleHeader">Giới thiệu</span> 
					</a> 
				</li>
			</ul>
		</div>
	</nav>
	

	<div class="bigMain">


		@yield('content')


		{{-- footerr --}}
		<div class="khoifooter">
			<div class="container ">
				<div class="row">
					<div class="col-sm-12 linefooter">
						<img src={{'frontend/images/line-bot.png'}} alt="">
					</div>
				</div>
			</div>
			<div class="container ">
				<div class="mainft">
					<div class="tdft thongtinfooter">
						<h2>Liên hệ</h2>
						<p class="ppp">56 Triều Khúc-Hà Nội</p>
						<p><i class="fas fa-envelope-open-text iconnho"></i> Email: ducky173099@gmail.com</p>
						<p><i class="fas fa-phone-volume iconnho"></i> Hotline: 0989000410</p>
						<div class="gg-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.1957565648145!2d105.80015872085212!3d20.98478874489245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc6bdc7f95f%3A0x58ffc66343a45247!2sUniversity%20of%20Transport%20Technology!5e0!3m2!1sen!2s!4v1570459833113!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</div>
					</div>
					<div class="tdft ft_ttmain">
						<h2>Thông tin</h2>
						<div class="tt_footerinner">
							<div class="tt_ft1">Tạp chí du lịch</div>
							<div class="tt_ft2">Tin tức</div>
						</div>
						<div class="tt_footerinner">
							<div class="tt_ft1">Cẩm nang du lịch</div>
							<div class="tt_ft2">Sitemap</div>
						</div>
						<div class="tt_footerinner">
							<div class="tt_ft1">Kinh nghiệm du lịch</div>
							<div class="tt_ft2">FAQ</div>
						</div>
						<div class="line_inner">
							<img src={{'frontend/images/ft-line.png'}} alt="">
						</div>
						<ul class="list_chinhsach">
							<li>
								<a href="#">502-Travel Toolbar</a>
							</li>
							<li>
								<a href="#">chính sách riêng tư</a>
							</li>
							<li>
								<a href="#">Thỏa thuận sử dụng</a>
							</li>
						</ul>
					</div>
	
					<div class="tdft form_ft">
						<h2>NEWSLETTER</h2>
						<div class="newsletter">
							<input type="text" class="form-control input-md" placeholder="email của bạn">
							<div class="iconemail_ft">
								<button type="submit">
									<i class="far fa-envelope"></i>
								</button>
							</div>
						</div>
						<h2 class="tenstore">Ứng dụng di động</h2>
						<div class="appstore ppp">
							<img src={{'frontend/images/app.png'}} alt="">
						</div>
						<h2 class="tenstore">Hotline</h2>
						<div class="hl_ft">
							<div class="iconhl_ft">
								<button>
									<i class="fas fa-headset"></i>
								</button>
							</div>
							<div class="sdt_ft">
								<span class="sdt_ft_inner">0989000410</span>
								<span>từ 8h đến 23h</span>
							</div>
						</div>
					</div>
	
				</div>
				<div class="tdft thanhtoan_ft">
					<h2>Chấp nhận thanh toán</h2>
					<div>
						<div class="ttcard_ft">
							<i class="_123pay"></i>
						</div>
						<div class="ttcard_ft">
							<i class="visa"></i>
						</div>
						<div class="ttcard_ft">
							<i class="master"></i>
						</div>
						<div class="ttcard_ft">
							<i class="jcb"></i>
						</div>
						<div class="ttcard_ft">
							<i class="vnpay"></i>
						</div>
						<div class="ttcard_ft">
							<i class="v-visa"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="pos_ft ">
				<p class="text-center">Bản quyền của 502-Travel ® 2020. Bảo lưu mọi quyền. <br>Ghi rõ nguồn "www.502-Travel.com.vn" ® khi sử dụng lại thông tin từ website này. <br>Số giấy phép kinh doanh lữ hành Quốc tế: 10-234/2019/TCDL-GP LHQT</p>
			</div>
		</div>

		{{-- het footer --}}
	
	</div>
	

	<script
	src="https://code.jquery.com/jquery-3.5.1.js"
	integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
	crossorigin="anonymous"></script>

	<script type="text/javascript">
		// search
		$(document).ready(function(){
			$('.menu-toggle').click(function(){
				$('.menu-toggle').toggleClass('active')
				$('nav').toggleClass('active')
		
			})
			$('#search').click(function(){
				$('.menu-item').addClass('hide-item')
				$('.search-form').addClass('active')
				$('.close').addClass('active')
				$('#search').hide()
			})
			$('.close').click(function(){
				$('.menu-item').removeClass('hide-item')
				$('.search-form').removeClass('active')
				$('.close').removeClass('active')
				$('#search').show()
			})
		})
	</script>
	<script type="text/javascript">
		// $( '#topheader .navbar-nav a' ).on( 'click', function () {
		// 	$( '#topheader .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
		// 	$( this ).parent( 'li' ).addClass( 'active' );
		// });

		// $(document).ready(function(){
		// 	$('.navbar-nav.menuBar li a').click(function(){
		// 		$('li a').removeClass('active');
		// 		$(this).addClass('active');
		// 	})
		// });

		const currentLocation = location.href;
		const menuItem = document.querySelectorAll('.gn_links-01 li a');
		const menuLength = menuItem.length;

		for(let i = 0; i < menuLength; i++){
			if(menuItem[i].href == currentLocation){
				menuItem[i].className = "current"
			}
		}
	</script>
			
</body>
<script src={{ asset('frontend/js/menuBar.js') }}></script>
<script type="text/javascript" src={{ asset('frontend/scripts/hotelMore.js') }}></script>
<script type="text/javascript" src={{ asset('frontend/scripts/hotel.js') }}></script>
<script type="text/javascript" src={{ asset('frontend/js/tilt.jquery.js') }}></script>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>
<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>