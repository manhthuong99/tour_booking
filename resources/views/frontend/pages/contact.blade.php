
@extends('layouts.layout')
@section('content')

<div id="vnt-content">
    <div class="main_lienhe">
        <div class="container ">
            <div class="row">
                <div class="col-xs-12">
                    <div class="td_lienhe">
                        <h2>Liên Hệ	</h2>
                        <p class="text-center">Để có thể đáp ứng được các yêu cầu và các ý kiến đóng góp của quý vị một cách nhanh chóng xin vui lòng liên hệ</p>
                    </div>
                </div>
                <div class="col-xs-12 lhmarginn">
                    <form class="send_lienhe">
                        <div class="frame-contact">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>Loại thông tin (" 
                                        <span class="star">*</span>")
                                    </label>
                                    <select class="form-control">
                                        <option value="1">Du lịch</option>
                                        <option value="2">Chăm sóc khách hàng</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label>Họ tên (" 
                                        <span class="star">*</span>")
                                    </label>
                                    <input type="text" class="form-control" required="required" name="txtHoTen" id="txtHoTen">
                                </div>
                                <div class="col-lg-4">
                                    <label>Email (" 
                                        <span class="star">*</span>")
                                    </label>
                                    <input type="email" class="form-control" required="required" name="txtEmail" id="txtEmail">
                                </div>
                                <div class="col-lg-4">
                                    <label>Điện thoại (" 
                                        <span class="star">*</span>")
                                    </label>
                                    <input type="text" class="form-control" required="required" name="txtDienThoai" id="txtDienThoai">
                                </div>
                                <div class="col-lg-4">
                                    <label>Tên công ty</label>
                                    <input type="text" class="form-control" name="txtTenCongTy">
                                </div>
                                <div class="col-lg-4">
                                    <label>Số khách</label>
                                    <input type="text" class="form-control" name="txtSoKhach">
                                </div>
                                <div class="col-xs-12 mg-bot15">
                                    <label>Địa chỉ</label>
                                    <input type="text" class="form-control" name="txtDiaChi">
                                </div>
                                <div class="col-xs-12 mg-bot15">
                                    <label>Tiêu đề (<span class="star">*</span>)</label>
                                    <input type="text" class="form-control" required="required" name="txtTieuDe">
                                </div>
                                <div class="col-xs-12 mg-bot30">
                                    <label>Nội dung (<span class="star">*</span>)</label>
                                    <textarea class="form-control" rows="4" cols="5" required="required" name="txtNoiDung"></textarea>
                                </div>
                                <div class="col-xs-12 text-center gui_lh">
                                    <button type="submit" class="btn btn-md btn-general">Gửi đi &nbsp;&nbsp;<i class="fas fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 chinhanh">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mg-bot30">
                            <div class="frame-cn">
                                <div class="tencn">Hồ Chí Minh</div>
                                <div class="mg-bot7">
                                    <div class="i-con"><i class="fas fa-map-signs"></i></div>
                                    <div class="i-text">190 Pasteur, Quận 3, Tp. Hồ Chí Minh, Việt Nam</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="mg-bot7">
                                    <div class="i-con"><i class="fas fa-phone"></i></div>
                                    <div class="i-text">Tel: (84-28) 3822 8898</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="mg-bot7">
                                    <div class="i-con"><i class="fas fa-fax"></i></div>
                                    <div class="i-text">Fax: (84-28) 3829 9142</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="mg-bot7">
                                    <div class="i-con"><i class="fas fa-envelope"></i></div>
                                    <div class="i-text">Email: info@vietravel.com</div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mg-bot30">
                            <div class="frame-cn">
                                <div class="tencn">Chi Nhánh Hà Nội</div>
                                <div class="mg-bot7">
                                    <div class="i-con"><i class="fas fa-map-signs"></i></div>
                                    <div class="i-text">03 Hai Bà Trưng, Quận Hoàn Kiếm, Hà Nội</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="mg-bot7">
                                    <div class="i-con"><i class="fas fa-phone"></i></div>
                                    <div class="i-text">Tel: (84-24) 3933 1978</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="mg-bot7">
                                    <div class="i-con"><i class="fas fa-fax"></i></div>
                                    <div class="i-text">Fax: (84-24) 3933 1979</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="mg-bot7">
                                    <div class="i-con"><i class="fas fa-envelope"></i></div>
                                    <div class="i-text">Email: vtv.hanoi@vietravel.com</div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mg-bot30">
                            <div class="frame-cn">
                                <div class="tencn">Chi Nhánh Đà Nẵng</div>
                                <div class="mg-bot7">
                                    <div class="i-con"><i class="fas fa-map-signs"></i></div>
                                    <div class="i-text">58 Pasteur, Hải Châu, Đà Nẵng</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="mg-bot7">
                                    <div class="i-con"><i class="fas fa-phone"></i></div>
                                    <div class="i-text">Tel: (84-236) 3863 544</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="mg-bot7">
                                    <div class="i-con"><i class="fas fa-fax"></i></div>
                                    <div class="i-text">Fax: (84-236) 3863 571</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="mg-bot7">
                                    <div class="i-con"><i class="fas fa-envelope"></i></div>
                                    <div class="i-text">Email: vtv.danang@vietravel.com</div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mg-bot30">
                            <div class="frame-cn">
                                <div class="tencn">Chi Nhánh Cần Thơ</div>
                                <div class="mg-bot7">
                                    <div class="i-con"><i class="fas fa-map-signs"></i></div>
                                    <div class="i-text">5 Trần Văn Khéo, Cái Khế, Ninh Kiều, Cần Thơ</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="mg-bot7">
                                    <div class="i-con"><i class="fas fa-phone"></i></div>
                                    <div class="i-text">Tel: (84-292) 3763 085</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="mg-bot7">
                                    <div class="i-con"><i class="fas fa-fax"></i></div>
                                    <div class="i-text">Fax: (84-292) 3763 086</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="mg-bot7">
                                    <div class="i-con"><i class="fas fa-envelope"></i></div>
                                    <div class="i-text">Email: vtv.cantho@vietravel.com</div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection