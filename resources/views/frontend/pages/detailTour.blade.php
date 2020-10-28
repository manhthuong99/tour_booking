@extends('layouts.layout')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <script type="text/javascript" src="{{  asset('js/jquery.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            $('#booking').click(function () {
                if ({{\Illuminate\Support\Facades\Auth::check() == false}}) {
                    alert("Bạn cần đăng nhập để đặt tour")
                    // window.location = "/login";
                }
                console.log('oke')
            })
        })
        {{--jQuery(document).ready(function () {--}}
        {{--    $.ajaxSetup({--}}
        {{--        headers: {--}}
        {{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
        {{--        }--}}
        {{--    });--}}
        {{--    $('#btn-submit').click(function () {--}}
        {{--        if ({{\Illuminate\Support\Facades\Auth::check()}}) {--}}
        {{--        let id_users = {{ \Illuminate\Support\Facades\Auth::user()->users_id }};--}}
        {{--        let id_tours = $('#id_tours').val();--}}
        {{--        let number_customer = $('#isAdult').text();--}}
        {{--        let total = $('#total').text();--}}
        {{--        alert('oke')--}}
        {{--        console.log('oke' + id_users + '-' + id_tours + '-' + number_customer + '-' + total)--}}
        {{--    })--}}
        {{--})--}}
    </script>
    @if( session()->get('message'))
        <script>
            alert('{{ session()->get('message') }}')
        </script>

    @endif
    @foreach( $tourDetail as $tour)
        <div id="vnt-content">
            <div class="main_chitiettour" id="blur">
                <div class="container n3-tour-detail">
                    <div class="row">
                        <div class="col-xs-12 mg-bot15">
                            <h1 class="tour-namechitiet" itemprop="name">
                                <h3>{{ $tour->tours_name }}</h3>
                                <input id="id_tours" type="hidden" value="{{ $tour->tours_id }}">
                            </h1>
                        </div>
                        <div class="slideshow-pt col-lg-8 col-md-12 col-sm-12 col-xs-12 pos-relative">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ asset('storage/tours/'.$tour->image) }}"
                                             alt="First slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="info col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="tourFormPrice">
                                <div class="txtCallNow">Đặt ngay, chỉ 2 phút. Hoặc gọi <a class="txtCallNow"
                                                                                          href="tel:0989000410">(028)
                                        3933
                                        8002</a></div>
                                <div class="flex_item col-xs-12 no-padding v-margin-bottom-15">
                                    <label for="DateCheckinField" class="control-label no-padding">Ngày khởi
                                        hành:</label>
                                    <div class="col-xs-5 no-padding calenderr">

                                        <div class="date-input-group">
                                            <span
                                                style="float: right">{{ date("d/m/Y", strtotime($tour->calendar )) }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex_item col-xs-12 no-padding v-margin-bottom-15">
                                    <span id="isAdult" class="number-detail number-adult">1</span>
                                    <span class="text-detail">
                                <span class="width-70">Người</span>
                            </span>
                                    <span id="RateAdultPrice" class="RateAdultAvg price-color">x <span
                                            id="price">{{ number_format($tour->price)}}</span> VNĐ</span>
                                    <div class="btn-group groupPlusAndSub">
                                        <button type="button" onClick="onDeCreaseAdult()" id="onDeCreaseAdult"
                                                class="btn number-button minus-adult btn-general hidePrice">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" onClick="onInCreaseAdult()" id="onInCreaseAdult"
                                                class="btn number-button plus-adult btn-general hidePrice">
                                            <i class="fa fa-fw fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <div id="" class="col-xs-12 flex_item no-padding v-margin-bottom-15 priceDiv">
                                    <span class="price-line price-line-detail"></span>
                                    <span class="labelPrice">Tổng cộng</span>
                                    <span id="total" class="price totalPrice">{{ number_format($tour->price)}}
                                    </span>
                                    <span class="price totalPrice">VND</span>
                                </div>
                                <div class="col-xs-12 no-padding divBtnSubmit">
                                    <div class="form-group no-margin">
                                        <label class="visible-sm">&nbsp;</label>
                                        <div class="col-xs-12 no-padding scroll-mobile">
                                            <div class="col-xs-12 no-padding request-Button hide-class">
                                                <button
                                                    class="btn btn-flat btn-action btn-md btn-block requestButton">
                                                    Yêu cầu đặt
                                                </button>
                                            </div>
                                            <div class="col-xs-12 no-padding check-Button">
                                                {{-- <button onClick="onShowPrice()"  onclick="toggle()" data-toggle="modal" data-target="#myModal" class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Yêu cầu đặt</button> --}}
                                                <button id="booking" onclick="toggle();" data-toggle="modal"
                                                        data-target="#myModal"
                                                        class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">
                                                    Yêu cầu đặt
                                                </button>
                                            </div>

                                            <div class="col-xs-12 no-padding book-Button hide-class">
                                                <button class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                    ngay
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sec5 supposts">
                                    <div>Bạn cần hỗ trợ?</div>
                                    <div>
                                        <div class="f-left btn-s1">
                                            <a href="" target="_blank">
                                                <img src="{{ asset('images/call.png') }}" alt="phone">
                                            </a>
                                        </div>
                                        <div class="f-left btn-s2" data-toggle="modal" data-target="#divTuVan"
                                             style="cursor:pointer;">
                                            <a href="" target="_blank">
                                                <img src="{{ asset('images/call2.png') }}" alt="phone">
                                            </a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="bg-phone hidden-md hidden-sm hidden-xs bottomPhone">
                                    <img src="{{ asset('images/bg-phone.png') }}" alt="phone">
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
                                    <div
                                        style="line-height: 20px; text-align: justify;padding:20px 20px 0px 20px"></div>
                                </div>

                                <div class="boxTour" id="flag1">
                                    <div class="khoikhoihanh">
                                        <div class="title">
                                            <span class="">Điểm nhấn hành trình</span>
                                        </div>
                                        <div class="content">
                                            <div style="text-align: justify;">
                                                <table align="left" border="0" cellpadding="10" cellspacing="10"
                                                       style="width:100%;">
                                                    <tbody class="body_tr">
                                                   <tr>
                                                       <td style="width: 20%;">
                                                        <span style="color:#555555;">
                                                            <strong>Điểm đến:</strong>
                                                        </span>
                                                       </td>
                                                       <td>
                                                        <span style="color:#555555;">
                                                            <strong>{{ $tour->destination }}</strong>
                                                        </span>
                                                       </td>
                                                   </tr>
                                                    <tr>
                                                        <td style="width: 20%;">
                                                        <span style="color:#555555;">
                                                            <strong>Địa chỉ:</strong>
                                                        </span>
                                                        </td>
                                                        <td>
                                                        <span style="color:#555555;">
                                                            <strong>{{ $tour->address }}</strong>
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
                                                            <strong>{{ $tour->day_number }} ngày</strong>
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
                                                            <strong>{{ date("d/m/Y", strtotime($tour->calendar ))}}</strong>
                                                        </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        <span style="color:#555555;">
                                                            <strong>Vận chuyển: </strong>
                                                        </span>
                                                        </td>
                                                        <td>
                                                        <span style="color:#555555;">
                                                            <strong>
                                                                @foreach( $transports as $transport)
                                                                    {{ $transport->transport_detail_name }},
                                                                @endforeach
                                                            </strong>
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
                                                <em>
                                                    {!! $tour->short_description !!}
                                                </em>
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
                                                    <span>NGÀY 1 |</span> TP.HCM – ĐÀ NẴNG – BÀ NÀ (Ăn chiều) (Ăn trưa
                                                    tự
                                                    túc)
                                                </div>
                                                <div class="contDay" style="display: block;">
                                                    <div class="the-content desc">
                                                        <p></p>
                                                        <div style="text-align: justify;">
                                                            <strong>Sáng:&nbsp;</strong>Quý khách có mặt tại ga quốc
                                                            nội,
                                                            sân bay Tân Sơn Nhất trước giờ bay ít nhất ba tiếng khởi
                                                            hành đi
                                                            <a href="#">
                                                                <strong>du lịch Miền Trung mùa thu</strong>
                                                            </a>.&nbsp;Đại diện công ty
                                                            <strong>
                                                                <em>Du Lịch Việt</em>
                                                            </strong> đón và hỗ trợ Quý khách làm thủ tục đón chuyến bay
                                                            đi
                                                            <strong>du lịch Đà Nẵng</strong>.<br>
                                                            Đến sân bay Đà Nẵng, hướng dẫn viên đón tham quan một vòng
                                                            bán
                                                            đảo Sơn Trà…viếng Linh Ứng Tự và thưởng ngoạn vẻ đẹp của
                                                            <strong>biển Mỹ Khê </strong>(được đánh giá là một trong
                                                            những
                                                            bãi biển quyến rũ nhất hành tinh). Đoàn khởi hành đến với
                                                            <strong>cao nguyên Bà Nà</strong> nơi có khí hậu Châu Âu độc
                                                            đáo
                                                            và nổi tiếng với tuyến cáp treo kỷ lục mới của thế giới -
                                                            Ngắm
                                                            toàn cảnh thành phố Đà Nẵng từ trên cáp treo (chi phí cáp
                                                            treo
                                                            tự túc).
                                                        </div>
                                                        <p></p>
                                                        <p></p>
                                                        <div style="text-align: justify;">
                                                            <strong>Trưa:&nbsp;</strong>Quý khách vui lòng tự túc dùng
                                                            bữa
                                                            trưa. Quý khách tự do tham quan, vui chơi giải trí tại Bà Nà
                                                            với
                                                            <strong>công viên Fantasy, rạp chiếu phim 3D Mega 360 độ với
                                                                công nghệ hiện đại nhất và duy nhất có ở Viêt Nam, hai
                                                                rạp
                                                                chiếu phim 4D và 5Di, xe trượt ống, hầm rượi, vườn hoa
                                                                tình
                                                                yêu, bảo tàng sáp.</strong><br>
                                                            Du khách có thể tìm thấy những biểu tượng mang tính tâm linh
                                                            như
                                                            chùa chiền, đền đài hay tượng các đức Phật. Chắc hẳn sẽ là
                                                            điểm
                                                            dừng chân cho những ai mong cầu bình an và sức khỏe cho gia
                                                            đình:
                                                            <strong>chùa Linh Ứng, đền Lĩnh Chúa Linh Từ, tháp Linh
                                                                Phong
                                                                Tự, tượng Thích Ca Mâu Ni, lầu chuông, nhà bia, miếu Bà,
                                                                Trú
                                                                Vũ trà quán.
                                                            </strong>
                                                        </div>
                                                        <p></p>
                                                        <p>
                                                            <strong>Chiều:&nbsp;</strong>Dùng cơm chiều tại nhà hàng.
                                                            Nghỉ
                                                            đêm tại Đà Nẵng. Quý khách tự do dạo phố, ngắm các cây cầu
                                                            nổi
                                                            tiếng của thành phố Đà Nẵng: cầu Rồng, cầu Sông Hàn, cầu
                                                            Trần
                                                            Thị Lý, cầu Thuận Phước...
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="dayinfo ">
                                                <div class="titDay">
                                                    <span>NGÀY 2 |</span> ĐÀ NẴNG – NGŨ HÀNH SƠN – HỘI AN (Ăn sáng,
                                                    trưa,
                                                    chiều)
                                                </div>
                                                <div class="contDay">
                                                    <div class="the-content desc">
                                                        <p></p>
                                                        <div style="text-align: justify;">
                                                            <strong>Sáng:</strong>&nbsp;Dùng buffet sáng tại khách sạn,
                                                            <strong>tham quan Ngũ Hành Sơn </strong>- được ví như hòn
                                                            non bộ
                                                            khổng lồ giữa lòng thành phố Đà Nẵng với Động Huyền Không,
                                                            Chùa
                                                            Linh Ứng, Chùa Tam Thai, Vọng Hải Đài, … mua sắm quà lưu
                                                            niệm
                                                            tại làng nghề điêu khắc đá Non Nước.
                                                        </div>
                                                        <p></p>
                                                        <p></p>
                                                        <div style="text-align: justify;">
                                                            <strong>Trưa:&nbsp;</strong>Dùng bữa trưa tại nhà hàng, tham
                                                            quan
                                                            <strong>phố cổ Hội An</strong> - di sản văn hoá thế giới với
                                                            Chùa Cầu Nhật Bản, Hội Quán Phúc Kiến, Nhà Cổ Phùng Hưng, …
                                                        </div>
                                                        <p></p>
                                                        <p>
                                                            <strong>Chiều: </strong>Dùng cơm chiều, nghỉ đêm tại Đà
                                                            Nẵng.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="dayinfo ">
                                                <div class="titDay">
                                                    <span>NGÀY 3 |</span> ĐÀ NẴNG – HUẾ – QUẢNG BÌNH (Ăn sáng, trưa,
                                                    chiều)
                                                </div>
                                                <div class="contDay">
                                                    <div class="the-content desc">
                                                        <p></p>
                                                        <div style="text-align: justify;">
                                                            <strong>Sáng:&nbsp;</strong>Dùng buffet sáng tại khách sạn.
                                                            Đoàn
                                                            khởi hành đến Huế, tham quan
                                                            <strong>Lăng Khải Định </strong>(Ứng Lăng, lăng mộ của vua
                                                            Khải
                                                            Định, vị vua thứ 12 của triều Nguyễn) với lối kiến trúc độc
                                                            đáo
                                                            bởi sự pha trộn kiến trúc Đông Tây Kim Cổ lạ thường, với các
                                                            tác
                                                            phẩm nghệ thuật ghép tranh sành sứ độc đáo.
                                                        </div>
                                                        <p></p>
                                                        <p></p>
                                                        <div style="text-align: justify;">
                                                            <strong>Trưa:&nbsp;</strong>Dùng cơm trưa tại nhà hàng, đoàn
                                                            khởi hành đến Quảng Bình, trên đường dừng chân tham quan
                                                            thành
                                                            cổ Quảng Trị - nơi được thế giới biết đến và kính phục bởi
                                                            cuộc
                                                            đấu tranh anh dũng để bảo vệ Thành Cổ suốt 81 ngày đêm của
                                                            các
                                                            chiến sĩ giải phóng&nbsp;quân và nhân dân Quảng Trị.
                                                        </div>
                                                        <p></p>
                                                        <p></p>
                                                        <div style="text-align: justify;">
                                                            <strong>Chiều: </strong>Dùng cơm chiều tại nhà hàng, nghỉ
                                                            đêm
                                                            tại Đồng Hới.
                                                        </div>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="dayinfo ">
                                                <div class="titDay">
                                                    <span>NGÀY 4 |</span> ĐỘNG THIÊN ĐƯỜNG – THÁNH ĐỊA LA VANG – HUẾ (Ăn
                                                    sáng, trưa, chiều)
                                                </div>
                                                <div class="contDay">
                                                    <div class="the-content desc">
                                                        <p></p>
                                                        <div style="text-align: justify;">
                                                            <strong>Sáng:&nbsp;</strong>Dùng buffet sáng tại khách sạn,
                                                            đoàn
                                                            khởi hành tham quan
                                                            <strong>Động Thiên Đường</strong> được mệnh danh là " hoàng
                                                            cung
                                                            trong lòng đất", một trong những kỳ quan tráng lệ và huyền
                                                            ảo
                                                            bậc nhất thế giới, động nằm ẩn mình sâu trong lòng Vườn quốc
                                                            gia
                                                            Phong Nha Kẻ Bàng – được hiệp hội Hang động Hoàng Gia Anh
                                                            khám
                                                            phá từ năm 2005, hang có độ dài 31km đứng đầu trong bảng xếp
                                                            hạng hang động quốc tế về sự huyền bí, kỳ vĩ của kiến tạo tự
                                                            nhiên.
                                                        </div>
                                                        <p></p>
                                                        <p></p>
                                                        <div style="text-align: justify;">
                                                            <strong>Trưa:&nbsp;</strong>Dùng bữa trưa tại nhà hàng, sau
                                                            đó
                                                            khởi hành về Huế, trên đường đi Quý khách có dịp ngắm nhìn
                                                            Vĩ
                                                            Tuyến 17 với Cầu Hiền Lương và dòng sông Bến Hải. Đoàn vào
                                                            thăm
                                                            <strong>Thánh Địa La Vang</strong> – Tiểu vương cung thánh
                                                            đường.
                                                        </div>
                                                        <p></p>
                                                        <p></p>
                                                        <div style="text-align: justify;">
                                                            <strong>Chiều:&nbsp;</strong>Dùng cơm chiều tại nhà hàng,
                                                            nghỉ
                                                            đêm tại Huế.
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
                                                            <strong>Sáng:&nbsp;</strong>Dùng buffet sáng tại khách sạn,
                                                            đoàn
                                                            <strong>tham quan Đại Nội</strong> – Hoàng Thành của 13 vị
                                                            vua
                                                            triều Nguyễn, nơi có hơn 100 công trình kiến trúc đẹp: Ngọ
                                                            Môn,
                                                            Điện Thái Hòa, Tử Cấm Thành, Thế Miếu, Hiển Lâm Các, Cửu
                                                            Đỉnh, …
                                                        </div>
                                                        <p></p>
                                                        <p>
                                                            <strong>Trưa:&nbsp;</strong>Dùng bữa trưa tại nhà hàng và
                                                            <strong>tham quan chùa Thiên Mụ</strong> –&nbsp;ngôi chùa cổ
                                                            nhất Cố đô Huế.
                                                        </p>
                                                        <p>
                                                            <strong>Chiều:&nbsp;</strong>Dùng cơm chiều tại nhà hàng,
                                                            hướng
                                                            dẫn viên tiễn đoàn ra sân bay Phú Bài đón chuyến bay về&nbsp;TP.HCM.
                                                            Kết thúc chương trình tham quan
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

            <div disabled="" id="popup">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <div class="col-xs-12 divClose">
                        <a href="#" onclick="toggle()">X</a>
                    </div>
                    <h2 class="titleBookTour">Thông tin khách hàng</h2>
                    <form id="formBooking" action="{{ route('frontend.booking') }}" method="post">
                        @csrf
                        <div class="requestTour">
                            <div class="col-xs-12 initRequestTour">
                                <label class="labelRequestTour">Họ &amp; Tên <span
                                        class="vcolor-danger">*</span></label>
                                <input maxlength="255" type="text" class="form-control " id="customerName"
                                       value="{{ \Illuminate\Support\Facades\Auth::user()->fullname }}" disabled>
                            </div>
                            <div class="col-xs-12 initRequestTour">
                                <label class="labelRequestTour">Điện thoại <span class="vcolor-danger">*</span></label>
                                <input maxlength="255" type="text" class="form-control " id="customerPhone"
                                       value="{{ \Illuminate\Support\Facades\Auth::user()->phone_number }}" disabled>
                            </div>
                            <div class="col-xs-12 initRequestTour">
                                <label class="labelRequestTour">Email <span
                                        class="vcolor-danger">*</span></label>
                                <input maxlength="255" type="text" class="form-control " id="customerEmail"
                                       value="{{ \Illuminate\Support\Facades\Auth::user()->email }}" disabled>
                            </div>
                            <div class="col-xs-12 initRequestTour">
                                <label class="labelRequestTour">Phương thức thanh toán</label>
                                <div class="myDIVPay">
                                   {{-- <div class="payMethod">
                                        <a href="#" class="payCredit">
                                            <img src="{{ asset('frontend/images/payMoney.png') }}" alt="">
                                        </a>
                                        <a href="#" class="payCredit">
                                            <img src="{{ asset('frontend/images/payCredit.png') }}" alt="">
                                        </a>
                                        <div class="contentAcc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries</p>
                                    </div>
                                    </div>--}}

                                    <div class="contentPay">
                                        <div class="payMethod" >
{{--                                            <img src="{{ asset('frontend/images/payMoney.png') }}" alt="">--}}
                                            <input type="radio" name="payment_method" id="" value="1" onClick="closeCardPay()" checked> Tiền mặt
                                        </div>
                                    </div>
                                    <div class="contentPay">
                                        <div class="payMethod" >
{{--                                            <img src="{{ asset('frontend/images/payCredit.png') }}" alt="">--}}
                                            <input type="radio" name="payment_method" value="2" id="" onClick="toggleCardPay()"> Online
                                        </div>
                                        <div class="contentAcc" id="payNone" style="display: none">
                                            <img src="{{ asset('dist/img/credit/visa.png') }}" alt="Visa">
                                            <img src="{{ asset('dist/img/credit/mastercard.png') }}" alt="Mastercard">
                                            <img src="{{ asset('dist/img/credit/american-express.png') }}" alt="American Express">
                                            <img src="{{ asset('dist/img/credit/paypal2.png') }}" alt="Paypal">
{{--                                            <a href="#" class="isCardPay" onClick="closeCardPay()">--}}
{{--                                                <img src="{{ asset('frontend/images/payCredit.png') }}" alt="">--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="isCardPay" onClick="closeCardPay()">--}}
{{--                                                <img src="{{ asset('frontend/images/payCredit.png') }}" alt="">--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="isCardPay" onClick="closeCardPay()">--}}
{{--                                                <img src="{{ asset('frontend/images/payCredit.png') }}" alt="">--}}
{{--                                            </a>--}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 initRequestTour" style="display: none">
                                <label class="labelRequestTour">Yêu cầu khác</label>
                                <textarea maxlength="1000" rows="2" cols="30" class="form-control"
                                          id="notesRequest"></textarea>
                            </div>
                            <div class="col-xs-12 totalCostTour">
                                <label class="labelTotal"></label>
                                <p id="isCost" style="display: none"></p>
                            </div>
                        </div>
                        <input type="hidden" id="id_users" name="id_users"
                               value="{{ \Illuminate\Support\Facades\Auth::user()->users_id }}">
                        <input type="hidden" id="id_tours" name="id_tours" value=" {{ $tour->tours_id }}">
                        <input type="hidden" id="number_customer" name="number_customer" value="1">
                        <input type="hidden" id="totalBooking" name="total" value="{{ $tour->price }}">
                        <div class="col-xs-12 btnTotalCostTour">
                            <input type="submit" id="btn-submit"
                                   class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice"
                                   value=" Xác nhận">
                        </div>
                    </form>
                @endif
            </div>


        </div>
    @endforeach

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    // Add active phương thức thanh toán
    <script>
        $(document).ready(function(){
            $('.myDIVPay .contentPay').click(function(){
                $('.myDIVPay .contentPay').removeClass("active");
                $(this).toggleClass("active");
                // if ( $('.myDIVPay .contentPay').hasClass('active') ) {
                //     console.log('okkkkk');
                //     $('.isCardPay').removeClass('active');
                // }
            });

            $('.isCardPay').click(function(){
                $('.isCardPay').removeClass("active");
                $(this).toggleClass("active");
                // if ( $('.isCardPay').hasClass('active') ) {
                //     console.log('okkkkk');
                //     $('.contentAcc').toggleClass('active');
                // }
            });

        });


    </script>
    <script>
        var payNone = document.getElementById("payNone");
        function toggleCardPay(){
            if (payNone.style.display === "none") {
                payNone.style.display = "block";
            } else {
                payNone.style.display = "none";
            }
        }
        function closeCardPay(){
            if (payNone.style.display === "block") {
                payNone.style.display = "none";
            }
        }
        closeCardPay

       {{-- const contentPay = document.getElementsByClassName('contentPay');
        for(i = 0; i < contentPay.length; i++){
            contentPay[i].addEventListener('click', function(){
                this.classList.toggle('active')
            })
        }--}}

    </script>

    <script>
        jQuery(document).ready(function () {
            $('#onInCreaseAdult').click(function () {
                let numberPerson = Number($('#isAdult').text());
                let RateAdultPrice = Number($('#price').text().replace(/\,/g, ''));
                $('#total').html(formatNumber(numberPerson * RateAdultPrice))
                $('#totalBooking').val(numberPerson * RateAdultPrice)
                $('#number_customer').val(formatNumber(numberPerson))
            })
            $('#onDeCreaseAdult').click(function () {
                let numberPerson = Number($('#isAdult').text());
                let RateAdultPrice = Number($('#price').text().replace(/\,/g, ''));
                $('#total').html(formatNumber(numberPerson * RateAdultPrice))
                console.log(formatNumber(numberPerson * RateAdultPrice))
            })

            function formatNumber(num) {
                return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
            }
        });
    </script>
    <script type="text/javascript">

        // function formatMoney(amount, decimalCount = 0, decimal = ".", thousands = ".") {
        //     try {
        //         decimalCount = Math.abs(decimalCount);
        //         decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

        //         const negativeSign = amount < 0 ? "-" : "";

        //         let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
        //         let j = (i.length > 3) ? i.length % 3 : 0;

        //         return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
        //     } catch (e) {
        //         console.log(e)
        //     }
        // };
        // document.getElementById("b").addEventListener("click", event => {
        //     document.getElementById("isCost").innerHTML = formatMoney(2*1250000);
        // });
    </script>

    <script type="text/javascript">
        function formatMoney(amount, decimalCount = 0, decimal = ".", thousands = ".") {
            try {
                decimalCount = Math.abs(decimalCount);
                decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

                const negativeSign = amount < 0 ? "-" : "";

                let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
                let j = (i.length > 3) ? i.length % 3 : 0;

                return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
            } catch (e) {
                console.log(e)
            }
        }

        function toggle() {
            if ({{ \Illuminate\Support\Facades\Auth::check()}}) {
                let countMem = document.getElementById("isAdult").innerHTML;
                let priceTour = document.getElementById("RateAdultPrice").innerHTML;
                let rePlaceDot = priceTour.replace(/\./g, '')
                let isPrice = rePlaceDot.replace(/\x/g, '')

                console.log(countMem * isPrice);
                document.getElementById("isCost").innerHTML = formatMoney(countMem * isPrice) + 'đ';

                let blur = document.getElementById('blur');
                blur.classList.toggle('active')

                let popup = document.getElementById('popup');
                popup.classList.toggle('active')
            } else {
                alert("Bạn cần đăng nhập để đặt tour")
                window.location = "/login";
            }


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

            if (clicks > 1) {
                clicks -= 1;
            }
            document.getElementById("isAdult").innerHTML = clicks;
        };

        function onInCreaseChild() {
            clickChild += 1;
            document.getElementById("isChild").innerHTML = clickChild;
        };

        function onDeCreaseChild() {
            if (clickChild > 0) {
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
