@extends('layouts.layout')
@section('content')

<div id="vnt-content">
    <div class="main_chitiettour" id="blur">
        <div class="container n3-tour-detail">
            <div class="row">
                <div class="col-xs-12 mg-bot15">
                    <h1 class="tour-namechitiet" itemprop="name">
                        <a>Cố Đô Huế (Tour Tiết Kiệm)</a>
                    </h1>
                </div>
                <div class="slideshow-pt col-lg-8 col-md-12 col-sm-12 col-xs-12 pos-relative">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('images/hue1.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('images/hue2.jpg') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('images/hue3.jpg') }}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="info col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="tourFormPrice">
                        <div class="txtCallNow">Đặt ngay, chỉ 2 phút. Hoặc gọi <a class="txtCallNow" href="tel:0989000410">(028) 3933 8002</a></div>
                        <div class="flex_item col-xs-12 no-padding v-margin-bottom-15">
                            <label for="DateCheckinField" class="control-label no-padding">Chọn ngày khởi hành:</label>
                            <div class="col-xs-5 no-padding calenderr">
                                <div class="date-input-group">
                                    <!-- <label readonly="" type="text" class="form-control date-input dates-date btn-general DateCheckinField" value="11-11-2017"><span class="DateCheckinText">28-08-2020</span></label> -->
                                    <!-- <input type="hidden" class="get_date" value="2020-08-28"> -->
                                    <input type="date" name="ngay_di" class="form-text get_date">
                                </div>
                            </div>
                        </div>
                        <div class="flex_item col-xs-12 no-padding v-margin-bottom-15">
                            <span id="isAdult" class="number-detail number-adult">1</span>
                            <span class="text-detail">
                                <span class="width-70">Người</span>
                            </span>
                            <span id="RateAdultPrice" class="RateAdultAvg price-color">x 1.390.000</span>
                            <div class="btn-group groupPlusAndSub">
                                <button type="button" onClick="onDeCreaseAdult()" id="onDeCreaseAdult" class="btn number-button minus-adult btn-general hidePrice">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <button type="button" onClick="onInCreaseAdult()" id="onInCreaseAdult" class="btn number-button plus-adult btn-general hidePrice">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <div id="totalResults" class="col-xs-12 flex_item no-padding v-margin-bottom-15 priceDiv" style="display: none;">
                            <span class="price-line price-line-detail"></span>
                            <span class="labelPrice">Tổng cộng</span>
                            <span id="isPrice" class="price totalPrice">5.560.000 <span class="tourItemCurrency">VND</span></span>
                        </div>
                        <div class="col-xs-12 no-padding divBtnSubmit">
                            <div class="form-group no-margin">
                                <label class="visible-sm">&nbsp;</label>
                                <div class="col-xs-12 no-padding scroll-mobile">
                                    <div class="col-xs-12 no-padding request-Button hide-class">
                                        <button class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu cầu đặt</button>
                                    </div>
                                    <div class="col-xs-12 no-padding check-Button">
                                        {{-- <button onClick="onShowPrice()"  onclick="toggle()" data-toggle="modal" data-target="#myModal" class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Yêu cầu đặt</button> --}}
                                        <button onclick="toggle()" data-toggle="modal" data-target="#myModal" class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Yêu cầu đặt</button>
                                    </div>

                                    <div class="col-xs-12 no-padding book-Button hide-class">
                                        <button class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt ngay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sec5 supposts">
                            <div>Bạn cần hỗ trợ?</div>
                            <div>
                                <div class="f-left btn-s1">
                                    <a href="#" target="_blank">
                                        <img src="images/call.png" alt="phone">
                                    </a>
                                </div>
                                <div class="f-left btn-s2" data-toggle="modal" data-target="#divTuVan" style="cursor:pointer;">
                                    <a href="#" target="_blank">
                                        <img src="images/call2.png" alt="phone">
                                    </a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="bg-phone hidden-md hidden-sm hidden-xs bottomPhone">
                            <img src="images/bg-phone.png" alt="phone">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 paddingtopinfo">
                    <div class="services">
                        <div class="title-lg">Dịch vụ đi kèm</div>
                        <div class="frame-service">
                            <ul class="list-service">
                                <li>Bữa ăn theo chương trình</li>
                                <li>Bảo hiểm</li>
                                <li>Hướng dẫn viên</li>
                                <li>Vé tham quan</li>
                                <li>Vận chuyển</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 paddingtopinfo">
                    <div class="sec-info">
                        <div class="chuongtrinhtour mg-bot30">
                            <div class="title-lg">
                                <h2>Chương trình tour</h2>
                            </div>
                            <div style="line-height: 20px; text-align: justify;padding:20px 20px 0px 20px"></div>
                        </div>

                        <div class="boxTour" id="flag1">
                            <div class="khoikhoihanh">
                                <div class="title">
                                    <span class="">Điểm nhấn hành trình</span>
                                </div>
                                <div class="content">
                                    <div style="text-align: justify;">
                                        <table align="left" border="0" cellpadding="10" cellspacing="10" style="width:100%;">
                                            <tbody class="body_tr">
                                                <tr>
                                                    <td style="width: 20%;">
                                                        <span style="color:#555555;">
                                                            <strong>Hành trình:</strong>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span style="color:#555555;">
                                                            <strong>Đà Nẵng - Bà Nà - Hội An - Huế - Thánh Địa La Vang - Động Thiên Đường</strong>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span style="color:#555555;">
                                                            <strong>Lịch trình:</strong>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span style="color:#555555;">
                                                            <strong>5 ngày 4 đêm</strong>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span style="color:#555555;">
                                                            <strong>Ngày khởi hành:</strong>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span style="color:#555555;">
                                                            <strong>02, 06,07,29,16/08; 10,13,17,24/09;<br>01,08,15,22/10; 05,12,19,26/11; 03,10,17/12</strong>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span style="color:#555555;">
                                                            <strong>Vận chuyển:</strong>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span style="color:#555555;">
                                                            <strong>Máy bay khứ hồi &amp; xe du lịch đời mới</strong>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p>
                                            <span style="color:#555555;">
                                                <em>Đến
                                                    <a href="#">
                                                        <strong class="doimauinfo">du lịch Miền Trung mùa thu</strong>
                                                    </a>&nbsp;để tham quan những vẻ đẹp vừa hùng vỹ vừa tráng lệ và hòa mình vào với không gian huyền ảo của động
                                                    <strong class="doimauinfo">Thiên Đường</strong> - một điểm đến thu hút khách du lịch suốt bốn mùa của tỉnh Quảng Bình. Động có cấu trúc kỳ vĩ, vẻ đẹp huyền diệu và tráng lệ của hang động đã khiến những người tham gia khảo sát ngỡ ngàng.
                                                </em>
                                            </span>
                                            <span style="color:#555555;">
                                                <em>Du khách đến với động mang theo trí tưởng tượng tuyệt vời của mình để rồi động Thiên Đường lại luôn biến ảo như một “Thiên Cung” nơi trần thế.</em>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="boxTour" id="flag2">
                            <div class="title">
                                <span class="lichtrinh">Lịch trình</span>
                            </div>
                            <div class="content">
                                <div class="listDay">
                                    <div class="dayinfo active">
                                        <div class="titDay">
                                            <span>NGÀY 1 |</span> TP.HCM – ĐÀ NẴNG – BÀ NÀ (Ăn chiều) (Ăn trưa tự túc)
                                        </div>
                                        <div class="contDay" style="display: block;">
                                            <div class="the-content desc">
                                                <p></p>
                                                <div style="text-align: justify;">
                                                    <strong>Sáng:&nbsp;</strong>Quý khách có mặt tại ga quốc nội, sân bay Tân Sơn Nhất trước giờ bay ít nhất ba tiếng khởi hành đi
                                                    <a href="#">
                                                        <strong>du lịch Miền Trung mùa thu</strong>
                                                    </a>.&nbsp;Đại diện công ty
                                                    <strong>
                                                        <em>Du Lịch Việt</em>
                                                    </strong> đón và hỗ trợ Quý khách làm thủ tục đón chuyến bay đi
                                                    <strong>du lịch Đà Nẵng</strong>.<br>
                                                    Đến sân bay Đà Nẵng, hướng dẫn viên đón tham quan một vòng bán đảo Sơn Trà…viếng Linh Ứng Tự và thưởng ngoạn vẻ đẹp của
                                                    <strong>biển Mỹ Khê </strong>(được đánh giá là một trong những bãi biển quyến rũ nhất hành tinh). Đoàn khởi hành đến với <strong>cao nguyên Bà Nà</strong> nơi có khí hậu Châu Âu độc đáo và nổi tiếng với tuyến cáp treo kỷ lục mới của thế giới - Ngắm toàn cảnh thành phố Đà Nẵng từ trên cáp treo (chi phí cáp treo tự túc).
                                                </div>
                                                <p></p>
                                                <p></p>
                                                <div style="text-align: justify;">
                                                    <strong>Trưa:&nbsp;</strong>Quý khách vui lòng tự túc dùng bữa trưa. Quý khách tự do tham quan, vui chơi giải trí tại Bà Nà với
                                                    <strong>công viên Fantasy, rạp chiếu phim 3D Mega 360 độ với công nghệ hiện đại nhất và duy nhất có ở Viêt Nam, hai rạp chiếu phim 4D và 5Di, xe trượt ống, hầm rượi, vườn hoa tình yêu, bảo tàng sáp.</strong><br>
                                                    Du khách có thể tìm thấy những biểu tượng mang tính tâm linh như chùa chiền, đền đài hay tượng các đức Phật. Chắc hẳn sẽ là điểm dừng chân cho những ai mong cầu bình an và sức khỏe cho gia đình:
                                                    <strong>chùa Linh Ứng, đền Lĩnh Chúa Linh Từ, tháp Linh Phong Tự, tượng Thích Ca Mâu Ni, lầu chuông, nhà bia, miếu Bà, Trú Vũ trà quán.
                                                    </strong>
                                                </div>
                                                <p></p>
                                                <p>
                                                    <strong>Chiều:&nbsp;</strong>Dùng cơm chiều tại nhà hàng. Nghỉ đêm tại Đà Nẵng. Quý khách tự do dạo phố, ngắm các cây cầu nổi tiếng của thành phố Đà Nẵng: cầu Rồng, cầu Sông Hàn, cầu Trần Thị Lý, cầu Thuận Phước...
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dayinfo ">
                                        <div class="titDay">
                                            <span>NGÀY 2 |</span> ĐÀ NẴNG – NGŨ HÀNH SƠN – HỘI AN (Ăn sáng, trưa, chiều)
                                        </div>
                                        <div class="contDay">
                                            <div class="the-content desc">
                                                <p></p>
                                                <div style="text-align: justify;">
                                                    <strong>Sáng:</strong>&nbsp;Dùng buffet sáng tại khách sạn,
                                                    <strong>tham quan Ngũ Hành Sơn </strong>- được ví như hòn non bộ khổng lồ giữa lòng thành phố Đà Nẵng với Động Huyền Không, Chùa Linh Ứng, Chùa Tam Thai, Vọng Hải Đài, … mua sắm quà lưu niệm tại làng nghề điêu khắc đá Non Nước.
                                                </div>
                                                <p></p>
                                                <p></p>
                                                <div style="text-align: justify;">
                                                    <strong>Trưa:&nbsp;</strong>Dùng bữa trưa tại nhà hàng, tham quan
                                                    <strong>phố cổ Hội An</strong> - di sản văn hoá thế giới với Chùa Cầu Nhật Bản, Hội Quán Phúc Kiến, Nhà Cổ Phùng Hưng, …
                                                </div>
                                                <p></p>
                                                <p>
                                                    <strong>Chiều: </strong>Dùng cơm chiều, nghỉ đêm tại Đà Nẵng.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="dayinfo ">
                                        <div class="titDay">
                                            <span>NGÀY 3 |</span> ĐÀ NẴNG – HUẾ – QUẢNG BÌNH (Ăn sáng, trưa, chiều)
                                        </div>
                                        <div class="contDay">
                                            <div class="the-content desc">
                                                <p></p>
                                                <div style="text-align: justify;">
                                                    <strong>Sáng:&nbsp;</strong>Dùng buffet sáng tại khách sạn. Đoàn khởi hành đến Huế, tham quan
                                                    <strong>Lăng Khải Định </strong>(Ứng Lăng, lăng mộ của vua Khải Định, vị vua thứ 12 của triều Nguyễn) với lối kiến trúc độc đáo bởi sự pha trộn kiến trúc Đông Tây Kim Cổ lạ thường, với các tác phẩm nghệ thuật ghép tranh sành sứ độc đáo.
                                                </div>
                                                <p></p>
                                                <p></p>
                                                <div style="text-align: justify;">
                                                    <strong>Trưa:&nbsp;</strong>Dùng cơm trưa tại nhà hàng, đoàn khởi hành đến Quảng Bình, trên đường dừng chân tham quan thành cổ Quảng Trị - nơi được thế giới biết đến và kính phục bởi cuộc đấu tranh anh dũng để bảo vệ Thành Cổ suốt 81 ngày đêm của các chiến sĩ giải phóng&nbsp;quân và nhân dân Quảng Trị.
                                                </div>
                                                <p></p>
                                                <p></p>
                                                <div style="text-align: justify;">
                                                    <strong>Chiều: </strong>Dùng cơm chiều tại nhà hàng, nghỉ đêm tại Đồng Hới.
                                                </div>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="dayinfo ">
                                        <div class="titDay">
                                            <span>NGÀY 4 |</span> ĐỘNG THIÊN ĐƯỜNG – THÁNH ĐỊA LA VANG – HUẾ (Ăn sáng, trưa, chiều)
                                        </div>
                                        <div class="contDay">
                                            <div class="the-content desc">
                                                <p></p>
                                                <div style="text-align: justify;">
                                                    <strong>Sáng:&nbsp;</strong>Dùng buffet sáng tại khách sạn, đoàn khởi hành tham quan
                                                    <strong>Động Thiên Đường</strong> được mệnh danh là " hoàng cung trong lòng đất", một trong những kỳ quan tráng lệ và huyền ảo bậc nhất thế giới, động nằm ẩn mình sâu trong lòng Vườn quốc gia Phong Nha Kẻ Bàng – được hiệp hội Hang động Hoàng Gia Anh khám phá từ năm 2005, hang có độ dài 31km đứng đầu trong bảng xếp hạng hang động quốc tế về sự huyền bí, kỳ vĩ của kiến tạo tự nhiên.
                                                </div>
                                                <p></p>
                                                <p></p>
                                                <div style="text-align: justify;">
                                                    <strong>Trưa:&nbsp;</strong>Dùng bữa trưa tại nhà hàng, sau đó khởi hành về Huế, trên đường đi Quý khách có dịp ngắm nhìn Vĩ Tuyến 17 với Cầu Hiền Lương và dòng sông Bến Hải. Đoàn vào thăm
                                                    <strong>Thánh Địa La Vang</strong> – Tiểu vương cung thánh đường.
                                                </div>
                                                <p></p>
                                                <p></p>
                                                <div style="text-align: justify;">
                                                    <strong>Chiều:&nbsp;</strong>Dùng cơm chiều tại nhà hàng, nghỉ đêm tại Huế.
                                                </div>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="dayinfo ">
                                        <div class="titDay">
                                            <span>NGÀY 5 |</span> HUẾ – ĐẠI NỘI – TP.HCM (Ăn sáng, trưa, chiều)
                                        </div>
                                        <div class="contDay">
                                            <div class="the-content desc">
                                                <p></p>
                                                <div style="text-align: justify;">
                                                    <strong>Sáng:&nbsp;</strong>Dùng buffet sáng tại khách sạn, đoàn
                                                    <strong>tham quan Đại Nội</strong> – Hoàng Thành của 13 vị vua triều Nguyễn, nơi có hơn 100 công trình kiến trúc đẹp: Ngọ Môn, Điện Thái Hòa, Tử Cấm Thành, Thế Miếu, Hiển Lâm Các, Cửu Đỉnh, …
                                                </div>
                                                <p></p>
                                                <p>
                                                    <strong>Trưa:&nbsp;</strong>Dùng bữa trưa tại nhà hàng và
                                                    <strong>tham quan chùa Thiên Mụ</strong> –&nbsp;ngôi chùa cổ nhất Cố đô Huế.
                                                </p>
                                                <p>
                                                    <strong>Chiều:&nbsp;</strong>Dùng cơm chiều tại nhà hàng, hướng dẫn viên tiễn đoàn ra sân bay Phú Bài đón chuyến bay về&nbsp;TP.HCM. Kết thúc chương trình tham quan
                                                    <a href="#">
                                                        <strong>du lich Mien Trung mua thu</strong>
                                                    </a>, chia tay và hẹn gặp lại.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="popup">
        <h2>Yêu cầu đặt Tour</h2>
        <div class="requestTour">
            <div class="col-xs-12 initRequestTour">
                <label class="labelRequestTour">Họ &amp; Tên <span class="vcolor-danger">*</span></label>
                <input maxlength="255" type="text" class="form-control " id="customerName">
            </div>
            <div class="col-xs-12 initRequestTour">
                <label class="labelRequestTour">Điện thoại <span class="vcolor-danger">*</span></label>
                <input maxlength="255" type="text" class="form-control " id="customerPhone">
            </div>
            <div class="col-xs-12 initRequestTour">
                <label class="labelRequestTour">Email</label>
                <input maxlength="255" type="text" class="form-control " id="customerEmail">
            </div>
            <div class="col-xs-12 initRequestTour">
                <label class="labelRequestTour">Yêu cầu khác</label>
                <textarea maxlength="1000" rows="2" cols="30" class="form-control" id="notesRequest"></textarea>
            </div>
        </div>
        <a href="#" onclick="toggle()">close</a>
    </div>


</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript">
    function toggle(){
        console.log('toggle');
        var blur = document.getElementById('blur');
        blur.classList.toggle('active')

        var popup = document.getElementById('popup');
        popup.classList.toggle('active')
    }

</script>

<script type="text/javascript">
    var clicks = 1;
    var clickChild = 0;
    var checkButton = document.getElementByClassName("checkButton");
    var requestButton = document.getElementByClassName("requestButton");
    var RateAdultPrice = document.getElementById("RateAdultPrice");
    var totalResults = document.getElementById("totalResults");

    var onDeCreaseAdult = document.getElementById("onDeCreaseAdult");
    var onInCreaseAdult = document.getElementById("onInCreaseAdult");

    function onInCreaseAdult() {
        // if (RateAdultPrice.style.display === "none") {
        //     RateAdultPrice.style.display = "none";
        // } else {
        //     RateAdultPrice.style.display = "none";
        // }

        // if (totalResults.style.display === "none") {
        //     totalResults.style.display = "none";
        // } else {
        //     totalResults.style.display = "none";
        // }
        clicks += 1;
        document.getElementById("isAdult").innerHTML = clicks;
    };
    function onDeCreaseAdult() {
        // if (RateAdultPrice.style.display === "none") {
        //     RateAdultPrice.style.display = "none";
        // } else {
        //     RateAdultPrice.style.display = "none";
        // }

        // if (totalResults.style.display === "none") {
        //     totalResults.style.display = "none";
        // } else {
        //     totalResults.style.display = "none";
        // }

        if(clicks > 1){
            clicks -= 1;
        }
        document.getElementById("isAdult").innerHTML = clicks;
    };
    function onInCreaseChild() {
        clickChild += 1;
        document.getElementById("isChild").innerHTML = clickChild;
    };
    function onDeCreaseChild() {
        if(clickChild > 0){
            clickChild -= 1;
        }
        document.getElementById("isChild").innerHTML = clickChild;
    };

</script>
{{-- <script>
    var RateAdultPrice = document.getElementById("RateAdultPrice");
    var totalResults = document.getElementById("totalResults");


    function onShowPrice(){

        console.log("totalResults: ", totalResults);
        console.log("RateAdultPrice: ", RateAdultPrice);
        if (RateAdultPrice.style.display === "none") {
            RateAdultPrice.style.display = "block";
        } else {
            RateAdultPrice.style.display = "none";
        }

        if (totalResults.style.display === "none") {
            totalResults.style.display = "flex";
        }

    }
</script> --}}
@endsection
