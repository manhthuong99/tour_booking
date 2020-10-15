@extends('layouts.layout')
@section('content')

<div id="vnt-content">
    <div class="banner">
        <h2 id="text">Ky Handsome</h2>
        <div class="clouds">
            <img src={{('frontend/images/cloud1.png')}} style="--i:1;">
            <img src={{('frontend/images/cloud2.png')}} style="--i:2;">
            <img src={{('frontend/images/cloud3.png')}} style="--i:3;">
            <img src={{('frontend/images/cloud4.png')}} style="--i:4;">
            <img src={{('frontend/images/cloud5.png')}} style="--i:5;">
            <img src={{('frontend/images/cloud1.png')}} style="--i:10;">
            <img src={{('frontend/images/cloud2.png')}} style="--i:9;">
            <img src={{('frontend/images/cloud3.png')}} style="--i:8;">
            <img src={{('frontend/images/cloud4.png')}} style="--i:7;">
            <img src={{('frontend/images/cloud5.png')}} style="--i:6;">
        </div>
    </div>

    <div class="wrapCont">
        <div class="wrapper">
            <div class="mda-archive" itemscope="" itemtype="http://schema.org/Product">
                <h1 itemprop="name" class="mda-archive-title">
                    <a itemprop="url" style="text-decoration: none !important;" title="Du lịch Miền Bắc" href="https://dulichviet.com.vn/du-lich-mien-bac">Hùng vĩ Miền Bắc</a>
                </h1>
                <div style="display: none">
                    <meta itemprop="mpn" content="143">
                    <img src="https://dulichviet.com.vn/images/bandidau/du-lich-mien-bac.jpg" alt="" itemprop="image">

                    <span itemprop="offers" itemscope="" itemtype="https://schema.org/AggregateOffer">
                        <span itemprop="lowPrice">5599000</span>
                        <span itemprop="highPrice">9699000</span>            
                        <span itemprop="offerCount">100000</span>
                        <meta itemprop="priceCurrency" content="VND">
                    </span>
                    <span itemprop="sku">c143</span>
                    <span itemprop="brand"><b>DU LỊCH MIỀN BẮC</b></span>
                    <div itemprop="review" itemscope="" itemtype="https://schema.org/Review">
                        <span itemprop="name">Du lịch Miền Bắc</span>
                        <span itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                            <span itemprop="name">Du lịch Việt</span>
                        </span>
                        <div itemprop="reviewBody">
                            &nbsp;Du lịch Miền Bắc - Miền Bắc&nbsp;mang nhiều dấu ấn lịch sử lâu đời từ thời Vua Hùng dựng nước&nbsp;cho đến các triều đại phong kiến giữ nước. Du lịch Miền Bắc&nbsp;là hành trình hấp dẫn dành cho những ai yêu thích lịch sử, mong muốn tìm hiểu và trải nghiệm những điều mới mẻ mà chỉ vùng đất "Bắc kỳ" mới có. Đến với Tour du lịch Miền Bắc du khách sẽ được tham quan những di tích lịch sử lâu đời, được hóa thân vào các vai Vua chúa, quan đại thần, cung phi, hoàng hậu,.... Quý khách có thể đặt tour đi Miền Bắc trực tuyến ngay tại website Du Lịch Việt để nhận được nhiều ưu đãi hấp dẫn. Hoặc tham khảo thêm các thông tin khuyến mãi du lịch Miền Bắc ngay bên dưới:&nbsp;
                        </div>
                    </div>
                </div>

                <div class="mda-info-share clearfix">
                    <div class="mda-facebook">
                        <div id="fb-root"></div>
                        <div class="fb-like" data-href="https://dulichviet.com.vn/du-lich-mien-bac" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                    </div>
                </div>
                <div class="mda-archive-content" itemprop="description">
                    <div style="text-align: justify;">
                        <span style="font-size:14px;">
                            <a href="#">
                                <strong>Du lịch Miền Bắc</strong>
                            </a> - <b>Miền Bắc&nbsp;</b>mang nhiều dấu ấn lịch sử lâu đời từ thời Vua Hùng dựng nước&nbsp;cho đến các triều đại phong kiến giữ nước. 
                            <a href="#">
                                <strong>Du lịch Miền Bắc</strong>
                            </a>&nbsp;là hành trình hấp dẫn dành cho những ai yêu thích lịch sử, mong muốn tìm hiểu và trải nghiệm những điều mới mẻ mà chỉ vùng đất 
                            <em>"Bắc kỳ"</em> mới có. Đến với 
                            <strong>
                                <a href="#">Tour du lịch Miền Bắc</a>
                            </strong> du khách sẽ được tham quan những di tích lịch sử lâu đời, được hóa thân vào các vai Vua chúa, quan đại thần, cung phi, hoàng hậu,.... Quý khách có thể đặt 
                            <strong>
                                <a href="#" target="_blank">tour đi Miền Bắc</a> 
                            </strong>trực tuyến ngay tại website 
                            <a href="#">
                                <strong>Du Lịch Việt</strong>
                            </a> để nhận được nhiều ưu đãi hấp dẫn. Hoặc tham khảo thêm các thông tin khuyến mãi 
                            <strong>du lịch</strong>
                            <em>
                                <strong> Miền Bắc </strong>
                            </em>ngay bên dưới
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container nopadding divTiltEffect">
            <div class="col-xs-12">
                <div class="text-xs-center">
                    <h3 class="tdto mb-3 ht_tieude nopadTilt">Mùa thu vàng miền Bắc</h3>
                </div>
            </div>
            <div class="row marginTopRow">
                <div class="col-sm-4">
                    <div id="app-container" data-tilt >
                        <div id="app">
                            <vue-tabs id="tabs">
                                <v-tab title="First Tab" class="tab" :selected="true">
                                    <div class="tab-content">
                                        <!-- <div class="tab-image first-image"></div> -->
                                        <img class="tab-image first-image" src="images/dd1.jpg" alt="">
                                        <div class="backgroundHover"></div>
                                        <div class="tab-content-text">
                                            <h1>Hạ Long</h1>
                                            <p class="detailtTilt">Vịnh Hạ Long là địa điểm vô cùng đẹp của nước ta, đã được UNESCO công nhận di sản thiên nhiên thế giới. Đây cũng là một nơi du lịch được rất nhiều người trong và ngoài nước yêu thích...</p>
                                        </div>
                                    </div>
                                </v-tab>
                            </vue-tabs>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div id="app-container" data-tilt >
                        <div id="app">
                            <vue-tabs id="tabs">
                                <v-tab title="First Tab" class="tab" :selected="true">
                                    <div class="tab-content">
                                    <!-- <div class="tab-image first-image"></div> -->
                                    <img class="tab-image first-image" src="images/dd2.jpg" alt="">
                                    <div class="backgroundHover"></div>
                                    <div class="tab-content-text">
                                        <h1>Hà Giang</h1>
                                        <p class="detailtTilt">Hà Giang mang đến nhiều trải nghiệm thú vị. Hà Giang không chỉ đẹp bởi phong cảnh hùng vĩ, những con đường uốn lượn quanh co dài bất tận, mà nó còn đẹp bởi Sắc Hoa và Tình Người...</p>
                                    </div>
                                    </div>
                                </v-tab>
                            </vue-tabs>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div id="app-container" data-tilt >
                        <div id="app">
                            <vue-tabs id="tabs">
                                <v-tab title="First Tab" class="tab" :selected="true">
                                    <div class="tab-content">
                                    <!-- <div class="tab-image first-image"></div> -->
                                    <img class="tab-image first-image" src="images/dd3.jpg" alt="">
                                    <div class="backgroundHover"></div>
                                    <div class="tab-content-text">
                                        <h1>Đà Nẵng</h1>
                                        <p class="detailtTilt">Siêu phẩm Cây Cầu Vàng Đà Nẵng trên đỉnh Bà Nà Hill vừa được trình làng thơ mộng khiến cánh báo giới quốc tế không ngớt lời ca ngợi. Với thiết kế vô cùng ấn tượng, hai bàn tay rêu phong to lớn vươn ra từ thân núi nắm lấy tấm lụa vàng lơ lửng giữa trời...</p>
                                    </div>
                                    </div>
                                </v-tab>
                            </vue-tabs>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row hieu ung tilt efect -->
        </div>

        <div class="container conClip">
            <div class="wrapperClip col-xs-12">
                <div class="mainClip">
                    <div class="clip clip1">
                        <div class="content">
                            <h2>Post Title One</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                    <div class="clip clip2">
                        <div class="content">
                            <h2>Post Title Two</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                    <div class="clip clip3">
                        <div class="content">
                            <h2>Post Title Tree</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="noidung3 noidung4 ">
            <div class="container marginBotND3">
                

                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-xs-center">
                            <h3 class="tdto mb-3">Hùng vĩ miền Bắc</h3>
                        </div>
                    </div> <!-- hết col-12 -->
                </div> <!-- hết row tieude -->
                <div class="row marginTopRow">
                    <div class="col-sm-4">
                        <div class="oneuser">
                            <div class="imguser text-xs-center">
                                <img src="images/nhatrang1.jpg" alt="">
                                <h4 class="ten">Nha Trang</h4>
                                <i class="vitri">Tháp Ép-phen</i>
                            </div>
                            <div class="infouser">
                                <h3 class="ten">Nha Trang</h3>
                                <div class="diemden">
                                    <span>Điểm đến : </span>
                                    <i class="vitri">Tháp Ép-phen</i>
                                </div>
                                <div class="time-mbac">
                                    <i class="far fa-clock"></i>
                                    <span>2 ngày 1 đêm</span>
                                </div>
                                <div class="gia-calender">
                                    <div class="calender">
                                        <i class="far fa-calendar-alt"></i>
                                        <span>Thứ 7 hàng tuần</span>
                                    </div>
                                    <div class="gia"><span>790,000đ</span></div>
                                </div>
                                <div class="start">
                                    <i class="fas fa-car"></i>
                                    <span>Từ Hà Nội</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="oneuser">
                            <div class="imguser text-xs-center">
                                <img src="images/ninhbinh.jpg" alt="">
                                <h4 class="ten">Ninh Bình</h4>
                                <i class="vitri">Tràng An</i>
                            </div>
                            <div class="infouser">
                                <h3 class="ten">Ninh Bình</h3>
                                <div class="diemden">
                                    <span>Điểm đến : </span>
                                    <i class="vitri">Tràng An</i>
                                </div>
                                <div class="time-mbac">
                                    <i class="far fa-clock"></i>
                                    <span>3 ngày 2 đêm</span>
                                </div>
                                <div class="gia-calender">
                                    <div class="calender">
                                        <i class="far fa-calendar-alt"></i>
                                        <span>Theo yêu cầu</span>
                                    </div>
                                    <div class="gia"><span>1.200.000đ</span></div>
                                </div>
                                <div class="start">
                                    <i class="fas fa-car"></i>
                                    <span>Từ Hà Nội</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="oneuser">
                            <div class="imguser text-xs-center">
                                <img src="images/bavi.png" alt="">
                                <h4 class="ten">Ba Vì</h4>
                                <i class="vitri">Thỉnh Kinh</i>
                            </div>
                            <div class="infouser">
                                <h3 class="ten">Ba Vì</h3>
                                <div class="diemden">
                                    <span>Điểm đến : </span>
                                    <i class="vitri">Thỉnh Kinh</i>
                                </div>
                                <div class="time-mbac">
                                    <i class="far fa-clock"></i>
                                    <span>1 ngày 0 đêm</span>
                                </div>
                                <div class="gia-calender">
                                    <div class="calender">
                                        <i class="far fa-calendar-alt"></i>
                                        <span>Thứ 6 hàng tuần</span>
                                    </div>
                                    <div class="gia"><span>650,000đ</span></div>
                                </div>
                                <div class="start">
                                    <i class="fas fa-car"></i>
                                    <span>Từ Hà Nội</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- hết row  -->

            <!-- section maquee -->
            <section class="_bg_color-blue-01 paddingVerNone" id="top_news"> 
                <h2 class="top_title-01 titleMargin">
                    <span>Một số tour khác</span>
                </h2> 
                <div class="bx-wrapper" style="max-width: 100%;">
                    <marquee id="mymarquee" width="10%" onmouseover="this.stop()" onmouseout="this.start()" behavior="alternate" class="bx-viewport" style="width: 100%; overflow: hidden; position: relative;">
                        <ul class="module_card-01" style="width: 500%; position: relative; transition-duration: 59.7534s; transform: translate3d(-210px, 0px, 0px); transition-timing-function: linear;"> 
                            <li id="bofloat" style="float: left; list-style: none; position: relative; width: 335px; margin-right: 30px;"> 
                                <a href="#"> 
                                    <div class="head"> 
                                        <p class="image">
                                            <img src="images/ht4.jpeg" width="331" height="240" class="attachment-top_thumbnail size-top_thumbnail wp-post-image" alt="" data-lazy-loaded="true" style="display: block;">
                                        </p> 
                                    </div> 
                                    <div class="body"> 
                                        <h2 class="title">Nhà của Kỷ</h2> 
                                        <p class="text"></p> 
                                        <p class="date">
                                            <time datetime="2019-08-06">2020.09.20</time>
                                        </p> 
                                        <p>
                                            <span class="module_link-more01">
                                                <span>Xem</span>
                                            </span>
                                        </p> 
                                    </div> 
                                </a> 
                            </li> 
                            <li id="bofloat2" style="float: left; list-style: none; position: relative; width: 335px; margin-right: 30px;"> 
                                <a href="#"> 
                                    <div class="head"> 
                                        <p class="image">
                                            <img src="images/ht3.jpeg" width="331" height="240" class="attachment-top_thumbnail size-top_thumbnail wp-post-image" alt="" data-lazy-loaded="true" style="display: block;">
                                        </p> 
                                    </div> 
                                    <div class="body"> 
                                        <h2 class="title">Nhà của Kỷ blal</h2> 
                                        <p class="text"></p> 
                                        <p class="date">
                                            <time datetime="2019-08-06">2020.09.20</time>
                                        </p> 
                                        <p>
                                            <span class="module_link-more01">
                                                <span>Xem</span>
                                            </span>
                                        </p> 
                                    </div> 
                                </a> 
                            </li> 
                            <li id="bofloat" style="float: left; list-style: none; position: relative; width: 335px; margin-right: 30px;"> 
                                <a href="#"> 
                                    <div class="head"> 
                                        <p class="image">
                                            <img src="images/ht2.jpeg" width="331" height="240" class="attachment-top_thumbnail size-top_thumbnail wp-post-image" alt="" data-lazy-loaded="true" style="display: block;">
                                        </p> 
                                    </div> 
                                    <div class="body"> 
                                        <h2 class="title">Nhà của Kỷ</h2> 
                                        <p class="text"></p> 
                                        <p class="date">
                                            <time datetime="2019-08-06">2020.09.20</time>
                                        </p> 
                                        <p>
                                            <span class="module_link-more01">
                                                <span>Xem</span>
                                            </span>
                                        </p> 
                                    </div> 
                                </a> 
                            </li> 
                            <li style="float: left; list-style: none; position: relative; width: 335px; margin-right: 30px;"> 
                            <a href="#"> 
                                    <div class="head"> 
                                        <p class="image">
                                            <img src="images/ht1.jpeg" width="331" height="240" class="attachment-top_thumbnail size-top_thumbnail wp-post-image" alt="" data-lazy-loaded="true" style="display: block;">
                                        </p> 
                                    </div> 
                                    <div class="body"> 
                                        <h2 class="title">Nhà của Kỷ</h2> 
                                        <p class="text"></p> 
                                        <p class="date">
                                            <time datetime="2019-08-06">2020.09.20</time>
                                        </p> 
                                        <p>
                                            <span class="module_link-more01">
                                                <span>Xem</span>
                                            </span>
                                        </p> 
                                    </div> 
                                </a> 
                            </li> 
                            <li style="float: left; list-style: none; position: relative; width: 335px; margin-right: 30px;"> 
                                <a href="#"> 
                                    <div class="head"> 
                                        <p class="image">
                                            <img src="images/dalat.jpg" width="331" height="240" class="attachment-top_thumbnail size-top_thumbnail wp-post-image" alt="" data-lazy-loaded="true" style="display: block;">
                                        </p> 
                                    </div> 
                                    <div class="body"> 
                                        <h2 class="title">Nhà của Kỷ</h2> 
                                        <p class="text"></p> 
                                        <p class="date">
                                            <time datetime="2019-08-06">2020.09.20</time>
                                        </p> 
                                        <p>
                                            <span class="module_link-more01">
                                                <span>Xem</span>
                                            </span>
                                        </p> 
                                    </div> 
                                </a> 
                            </li> 
                            <li style="float: left; list-style: none; position: relative; width: 335px; margin-right: 30px;"> 
                                <a href="#"> 
                                    <div class="head"> 
                                        <p class="image">
                                            <img src="images/giamg2.jpg" width="331" height="240" class="attachment-top_thumbnail size-top_thumbnail wp-post-image" alt="" data-lazy-loaded="true" style="display: block;">
                                        </p> 
                                    </div> 
                                    <div class="body"> 
                                        <h2 class="title">Nhà của Kỷ</h2> 
                                        <p class="text"></p> 
                                        <p class="date">
                                            <time datetime="2019-08-06">2020.09.20</time>
                                        </p> 
                                        <p>
                                            <span class="module_link-more01">
                                                <span>Xem</span>
                                            </span>
                                        </p> 
                                    </div> 
                                </a> 
                            </li> 
                            <li style="float: left; list-style: none; position: relative; width: 335px; margin-right: 30px;"> 
                                <a href="#"> 
                                    <div class="head"> 
                                        <p class="image">
                                            <img src="images/giamg1.jpg" width="331" height="240" class="attachment-top_thumbnail size-top_thumbnail wp-post-image" alt="" data-lazy-loaded="true" style="display: block;">
                                        </p> 
                                    </div> 
                                    <div class="body"> 
                                        <h2 class="title">Nhà của Kỷ</h2> 
                                        <p class="text"></p> 
                                        <p class="date">
                                            <time datetime="2019-08-06">2020.09.20</time>
                                        </p> 
                                        <p>
                                            <span class="module_link-more01">
                                                <span>Xem</span>
                                            </span>
                                        </p> 
                                    </div> 
                                </a> 
                            </li> 
                            <li style="float: left; list-style: none; position: relative; width: 335px; margin-right: 30px;"> 
                                <a href="#"> 
                                    <div class="head"> 
                                        <p class="image">
                                            <img src="images/dd4.jpg" width="331" height="240" class="attachment-top_thumbnail size-top_thumbnail wp-post-image" alt="" data-lazy-loaded="true" style="display: block;">
                                        </p> 
                                    </div> 
                                    <div class="body"> 
                                        <h2 class="title">Nhà của Kỷ</h2> 
                                        <p class="text"></p> 
                                        <p class="date">
                                            <time datetime="2019-08-06">2020.09.20</time>
                                        </p> 
                                        <p>
                                            <span class="module_link-more01">
                                                <span>Xem</span>
                                            </span>
                                        </p> 
                                    </div> 
                                </a> 
                            </li> 
                            <li style="float: left; list-style: none; position: relative; width: 335px; margin-right: 30px;"> 
                                <a href="#"> 
                                    <div class="head"> 
                                        <p class="image">
                                            <img src="images/dd1.jpg" width="331" height="240" class="attachment-top_thumbnail size-top_thumbnail wp-post-image" alt="" data-lazy-loaded="true" style="display: block;">
                                        </p> 
                                    </div> 
                                    <div class="body"> 
                                        <h2 class="title">Nhà của Kỷ</h2> 
                                        <p class="text"></p> 
                                        <p class="date">
                                            <time datetime="2019-08-06">2020.09.20</time>
                                        </p> 
                                        <p>
                                            <span class="module_link-more01">
                                                <span>Xem</span>
                                            </span>
                                        </p> 
                                    </div> 
                                </a>  
                            </li> 
                            <li style="float: left; list-style: none; position: relative; width: 335px; margin-right: 30px;"> 
                                <a href="#"> 
                                    <div class="head"> 
                                        <p class="image">
                                            <img src="images/dd2.jpg" width="331" height="240" class="attachment-top_thumbnail size-top_thumbnail wp-post-image" alt="" data-lazy-loaded="true" style="display: block;">
                                        </p> 
                                    </div> 
                                    <div class="body"> 
                                        <h2 class="title">Nhà của Kỷ</h2> 
                                        <p class="text"></p> 
                                        <p class="date">
                                            <time datetime="2019-08-06">2020.09.20</time>
                                        </p> 
                                        <p>
                                            <span class="module_link-more01">
                                                <span>Xem</span>
                                            </span>
                                        </p> 
                                    </div> 
                                </a>  
                            </li> 
                            <li style="float: left; list-style: none; position: relative; width: 335px; margin-right: 30px;"> 
                                <a href="#"> 
                                    <div class="head"> 
                                        <p class="image">
                                            <img src="images/dd3.jpg" width="331" height="240" class="attachment-top_thumbnail size-top_thumbnail wp-post-image" alt="" data-lazy-loaded="true" style="display: block;">
                                        </p> 
                                    </div> 
                                    <div class="body"> 
                                        <h2 class="title">Nhà của Kỷ</h2> 
                                        <p class="text"></p> 
                                        <p class="date">
                                            <time datetime="2019-08-06">2020.09.20</time>
                                        </p> 
                                        <p>
                                            <span class="module_link-more01">
                                                <span>Xem</span>
                                            </span>
                                        </p> 
                                    </div> 
                                </a>  
                            </li> 
                            <li style="float: left; list-style: none; position: relative; width: 335px; margin-right: 30px;"> 
                                <a href="#"> 
                                    <div class="head"> 
                                        <p class="image">
                                            <img src="images/ht_gt2.jpg" width="331" height="240" class="attachment-top_thumbnail size-top_thumbnail wp-post-image" alt="" data-lazy-loaded="true" style="display: block;">
                                        </p> 
                                    </div> 
                                    <div class="body"> 
                                        <h2 class="title">Nhà của Kỷ</h2> 
                                        <p class="text"></p> 
                                        <p class="date">
                                            <time datetime="2019-08-06">2020.09.20</time>
                                        </p> 
                                        <p>
                                            <span class="module_link-more01">
                                                <span>Xem</span>
                                            </span>
                                        </p> 
                                    </div> 
                                </a>  
                            </li> 
                        </ul>
                    </marquee>
                    <script>
                        var manhinh = screen.width;
                        console.log(manhinh);
                        var news = document.getElementById('bofloat');
                        var news2 = document.getElementById('bofloat2');
                        var marque = document.getElementById('mymarquee');
                        if (manhinh < 768) {
                            marque.stop();
                            news.classList.add('removefloat');
                            news2.classList.add('removefloat');
                        }
                    </script>
                </div> 
                <p class="_align-center btnMargin">
                    <a href="#" class="module_button-01">
                        <span>hơn</span>
                    </a>
                </p> 
            </section>
            <!-- het section -->
            <div class="row mbac_more">
                <div class="col-sm-4">
                    <div class="sp">
                        <img src="images/dd4.jpg" alt="">
                        <div class="ten">
                            <div class="goi">
                                <div class="danhmuc">Tour Bắc</div>
                                <div class="tenchitiet">Nha trang</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="sp">
                        <img src="images/dd1.jpg" alt="">
                        <div class="ten">
                            <div class="goi">
                                <div class="danhmuc">Tour Bắc</div>
                                <div class="tenchitiet">Vịnh Hạ Long</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="sp">
                        <img src="images/dd2.jpg" alt="">
                        <div class="ten">
                            <div class="goi">
                                <div class="danhmuc">Tour Bắc</div>
                                <div class="tenchitiet">Sapa</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="sp">
                        <img src="images/dd3.jpg" alt="">
                        <div class="ten">
                            <div class="goi">
                                <div class="danhmuc">Tour Bắc</div>
                                <div class="tenchitiet">Đà Nẵng</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="sp">
                        <img src="images/dd1.jpg" alt="">
                        <div class="ten">
                            <div class="goi">
                                <div class="danhmuc">Tour Bắc</div>
                                <div class="tenchitiet">Vịnh Hạ Long</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="sp">
                        <img src="images/dd4.jpg" alt="">
                        <div class="ten">
                            <div class="goi">
                                <div class="danhmuc">Tour Bắc</div>
                                <div class="tenchitiet">Nhà Kỷ</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- hết noidung3 -->
    </div> <!-- HẾT wrapCont -->
</div>


<!-- may bay -->
<script type="text/javascript">
    let text = document.getElementById('text');
    window.addEventListener('scroll', function(){
        let value = window.scrollY;
        text.style.marginBottom = value * 2 + 'px';
    })
</script>



@endsection