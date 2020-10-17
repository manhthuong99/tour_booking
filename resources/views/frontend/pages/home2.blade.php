@extends('layouts.layout')
@section('content')
    @php( $endPoint = 1)
    <section class="divSection">
        <div class="side-indicator" style="right: 50px">
            <div class="line"></div>
            <div class="index one">
                1
            </div>
            <div class="index two">
                2
            </div>
            <div class="index three">
                3
            </div>
            <div class="index four">
                4
            </div>
        </div>
        <div class="content contentHome">
            <div class="text-wrapper">
                <div class="text" style="margin-left: 80px">
                    <h4> TOUR NỔI BẬT</h4>
                    <div id="title">
                        @foreach( $listTours as $tour)
                            @if( $tour->category_detail_id == 4)
                                <h4>{{ $tour->tours_name }}</h4>
                            @endif
                            @break($endPoint == 5)
                        @endforeach
                    </div>
                    <div id="description">
                        @foreach( $listTours as $tour)
                            @if( $tour->category_detail_id == 4)
                                <p>{{ $tour->address }}</p>
                            @endif
                            @break($endPoint == 5)
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="glide">
                <div class="glide_cover"></div>
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @foreach( $listTours as $tour)
                            @if( $tour->category_detail_id == 4)
                                <li class="glide__slide">
                                    <div class="slide one">
                                        <div class="slider-image">
                                            <img src="{{asset('storage/tours/'.$tour->image)}}" alt=""/>
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @break($endPoint == 4)
                        @endforeach

                        {{--                        <li class="glide__slide">--}}
                        {{--                            <div class="slide two">--}}
                        {{--                                <p>Kerala</p>--}}
                        {{--                                <div class="rating">--}}
                        {{--                                    <div class="circle active"></div>--}}
                        {{--                                    <div class="circle active"></div>--}}
                        {{--                                    <div class="circle active"></div>--}}
                        {{--                                    <div class="circle active"></div>--}}
                        {{--                                    <div class="circle"></div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="slider-image">--}}
                        {{--                                    <img src="{{asset('frontend/img/slide6.jpg')}}" alt=""/>--}}
                        {{--                                    <div class="bookmark">--}}
                        {{--                                        <i class="fa fa-bookmark"></i>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </li>--}}
                    </ul>
                </div>
                <div data-glide-el="controls" class="controls">
                    <div data-glide-dir="<" id="prev" class="removeAuto">
                        <<
                    </div>

                    <div data-glide-dir=">" id="next" class="removeAuto">
                        >>
                    </div>
                    <div data-glide-dir=">" id="nextTren" class="removeAuto">
                        <i class="fa fa-arrow-right"></i>
                    </div>

                </div>
            </div>
        </div>
        <div class="background"></div>
    </section>

    <div class="bigMain">
        <div class="khoi4">
            <div class="container banner4">
                <div class="tdaddress">

                    <h2>Bạn muốn đi du lịch ở đâu?</h2>
                    <p>Hãy cùng KINH ĐÔ TRAVEL lựa chọn nhé!!!</p>
                </div>
                <div class="khoiaddressto">
                    <div class="anhtren">
                        <div class="trennho">
                            <div class="overlay1"></div>
                            <div class="tdo1">
                                <h2>Phan Thiết</h2>
                                <p><i class="fas fa-map-marker-alt"></i><span>Mũi Né</span></p>
                            </div>
                        </div>
                        <div class="trento">
                            <div class="overlay2"></div>
                            <div class="tdo1">
                                <h2>Sandy Beach</h2>
                                <p><i class="fas fa-map-marker-alt"></i><span>Đà Nẵng</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="anhduoi">
                        <div class="duoito">
                            <div class="overlay3"></div>
                            <div class="tdo1">
                                <h2>Phú Quốc</h2>
                                <p><i class="fas fa-map-marker-alt"></i><span>Vịnh Thái Lan</span></p>
                            </div>
                        </div>
                        <div class="duoinho">
                            <div class="overlay4"></div>
                            <div class="tdo1">
                                <h2>Vũng Tàu</h2>
                                <p><i class="fas fa-map-marker-alt"></i><span>Bà Rịa - Vũng tàu</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {{--    <div class="mainWavy">--}}
    {{--        <div class="container wavy">--}}
    {{--            <div class="col-xs-12 marginBot">--}}
    {{--                <div class="text-xs-center">--}}
    {{--                    <h3 class="tdto mb-3 ht_tieude nopadTilt">Tour kích cầu</h3>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="initWavy">--}}
    {{--                <div class="boxWavy">--}}
    {{--                    <div class="contentWavy">--}}
    {{--                        <h2>Water wave div</h2>--}}
    {{--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
    {{--                            Lorem Ipsum has been the industry's standard</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="boxWavy">--}}
    {{--                    <div class="contentWavy">--}}
    {{--                        <h2>Water wave div</h2>--}}
    {{--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
    {{--                            Lorem Ipsum has been the industry's standard</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="boxWavy">--}}
    {{--                    <div class="contentWavy">--}}
    {{--                        <h2>Water wave div</h2>--}}
    {{--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
    {{--                            Lorem Ipsum has been the industry's standard</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <svg>--}}
    {{--                    <filter id="wavyFilter">--}}
    {{--                        <feTurbulence x="0" y="0" baseFrequency="0.02" numOctaves="5" seed="2">--}}
    {{--                            <animate attributeName="baseFrequency" dur="60s" values="0.02;0.05;0.02"--}}
    {{--                                     repeatCount="indefinite"/>--}}
    {{--                        </feTurbulence>--}}
    {{--                        <feDisplacementMap in="SourceGraphic" scale="30"/>--}}
    {{--                    </filter>--}}
    {{--                </svg>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- het wavy -->


        <div class="khoidulich360">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="divdulich360">
                            <div class="dulich360">
                                <div class="frame-title">
                                    <div class="bor-line"></div>
                                    <div class="f-title">
                                        <span title="Du lịch 360 độ">Du lịch 360 độ</span>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="mg-bot15 sub_tin">
                                    @foreach( $listTours as $tour)
                                        <div class="col-sm-4">
                                            <div class="col-lg-12">
                                                <hr>
                                            </div>
                                            <div class="sangngang">
                                                <div class="col-lg-5 mg-bot">
                                                    <a href="{{ route('frontend.detailTour',$tour->tours_id) }}"
                                                       title="Hành hương về núi thiêng Kailash"
                                                       class="hvr-shutter-out-vertical">
                                                        <img src="{{ asset('storage/tours/'.$tour->image)}}" alt="Hành hương về núi
                                                     thiêng Kailash" title="Hành hương về núi thiêng Kailash"
                                                             class="img-responsive pic-sub">
                                                    </a>
                                                </div>
                                                <div class="col-lg-7">
                                                    <h2 class="mg-bot10 dot-dot cattieude ddd-truncated"
                                                        style="word-wrap: break-word;">
                                                        <a href="{{ route('frontend.detailTour',$tour->tours_id) }}">{{ $tour->tours_name }}</a>
                                                    </h2>
                                                    <p class="dot-dot catnoidung content-lh-2row"
                                                       style="display: -webkit-box; -webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;">
                                                        {{ $tour->address }}
                                                    </p>
                                                    //code moi
                                                    <div class="priceTour360">
                                                        <i class="fas fa-dollar-sign"></i>&nbsp;
                                                        <span >1.200.000</span>
                                                    </div>
                                                    <div class="clockTour360">
                                                        <i class="far fa-clock"></i>&nbsp;
                                                        <span>{{ date("d/m/Y", strtotime($tour->calendar)) }}</span>
                                                    </div>
                                                    //het code moi
                                                    
                                                    //comment code cu
                                                    // <div>
                                                    //     <div class="f-left">
                                                    //         <i class="far fa-clock" style="color: #999;"></i>&nbsp;
                                                    //         <span
                                                    //             style="color: #0aa0fe;font-style: italic;font-weight: bold;font-size: 14px;">{{ date("d/m/Y", strtotime($tour->calendar)) }}</span>
                                                    //     </div>
                                                    //     <div class="f-right">
                                                    //     </div>
                                                    //     <div class="clear"></div>
                                                    // </div>
                                                    //het comment
                                                    
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="khoi4 diemdenyt">
            <div class="container banner4">
                <div class="tdaddress td-ddyt">
                    <h2 class="ddyt">Điểm đến yêu thích</h2>
                    <p>Các điểm đến du lịch trong nước và nước ngoài</p>
                </div>
                <div class="row sl-travelto">
                    @foreach( $topBooking as $tour)
                        <div class="col-sm-3 sl-travel">
                            <div class="pos-travel">
                                <a href="{{ route('frontend.detailTour',$tour->tours_id) }}" class="bg-travel">
                                    <img src="{{ asset('storage/tours/'.$tour->image)}}" alt="">
                                    <div class="tt-tour">
                                        <div class="destination-name">{{ $tour->tours_name }}</div>
                                        <div class="destination-like">Đã có
                                            <span class="num-like">{{ $tour->total }}
											<sup class="k">+</sup>
										</span>lượt khách
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @break($endPoint++ == 4)
                    @endforeach
                    <div class="col-xs-12 netdut">
                        <div style="border-top: 1px dashed #ccc;padding-bottom: 30px;padding-top: 0px;"></div>
                    </div>
                    @foreach( $topBooking as $key => $tour)
                        @if( $key >3)
                        <div class="col-sm-2 sl-travel">
                            <div class="pos-travel">
                                <a href="#" class="bg-travel bg-small">

                                    <img class="imgqg" src="{{ asset('storage/tours/'.$tour->image)}}" alt="">
                                    <div class="tt-tour">
                                        <div class="destination-name">{{ $tour->tours_name }}</div>
                                        <div class="destination-like">Đã có
                                            <span class="num-like">{{ $tour->total }}
											<sup class="k">+</sup>
										</span>lượt khách
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                            @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="whytravel">
            <div class="framewhy">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-sm-4 hidden-xs visaorespon">
                            <div class="bg-why">
                                <img src="{{ asset('frontend/images/bg-why.png')}}" alt="">
                                <div class="pos-title">
                                    <h2 class="titlewhy">
                                        <span class="t-visao">Vì sao chọn</span>
                                        <br>
                                        <span class="t-chontravel">502-Travel.vn?</span>
                                    </h2>
                                </div>
                                <div class="pos-arrow">
                                    <img src="{{ asset('frontend/images/arrow1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-9 col-sm-8 col-xs-12 lydo">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12 mg-bot">
                                    <div class="item">
                                        <div class="item-num">1.</div>
                                        <div class="item-name" style="text-transform: uppercase;">Mạng bán tour</div>
                                        <div class="item-line">---------------------------</div>
                                        <div class="item-des">
                                            <p class="mg-bot5">Số 1 tại Việt Nam</p>
                                            <p>Ứng dụng công nghệ mới nhất</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 mg-bot">
                                    <div class="item">
                                        <div class="item-num">2.</div>
                                        <div class="item-name" style="text-transform: uppercase;">Thanh toán</div>
                                        <div class="item-line">---------------------------</div>
                                        <div class="item-des">
                                            <p class="mg-bot5">An toàn và linh hoạt</p>
                                            <p>Liên kết với các tổ chức tài chính</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 mg-bot">
                                    <div class="item">
                                        <div class="item-num">3.</div>
                                        <div class="item-name" style="text-transform: uppercase;">Giá cả</div>
                                        <div class="item-line">---------------------------</div>
                                        <div class="item-des">
                                            <p class="mg-bot5">Luôn có mức giá tốt nhất</p>
                                            <p>Bảo đảm giá tốt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 mg-bot">
                                    <div class="item">
                                        <div class="item-num">4.</div>
                                        <div class="item-name" style="text-transform: uppercase;">Sản phẩm</div>
                                        <div class="item-line">---------------------------</div>
                                        <div class="item-des">
                                            <p class="mg-bot5">Đa dạng, chất lượng</p>
                                            <p>Đạt chất lượng tốt nhất</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 mg-bot">
                                    <div class="item">
                                        <div class="item-num">5.</div>
                                        <div class="item-name" style="text-transform: uppercase;">Đặt tour</div>
                                        <div class="item-line">---------------------------</div>
                                        <div class="item-des">
                                            <p class="mg-bot5">Dễ dàng và nhanh chóng</p>
                                            <p>Đặt tour chỉ với 3 bước</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 mg-bot">
                                    <div class="item">
                                        <div class="item-num">6.</div>
                                        <div class="item-name" style="text-transform: uppercase;">Hỗ trợ</div>
                                        <div class="item-line">---------------------------</div>
                                        <div class="item-des">
                                            <p class="mg-bot5">Từ 08h00 - 23h00</p>
                                            <p>Hotline và hỗ trợ trực tuyến</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- </div> --}}

        <script src="{{  asset('frontend/js/tweenmax.js') }}"></script>
        <script src="{{  asset('frontend/js/three.js') }}"></script>
        <script src="{{  asset('frontend/scripts/activeColorMenuBar.js') }}"></script>
        <script src="{{  asset('frontend/js/slide.js') }}"></script>
        <script src="{{  asset('frontend/js/hover.js') }}"></script>
        <script src="{{  asset('frontend/js/glide.min.js') }}"></script>


@stop




