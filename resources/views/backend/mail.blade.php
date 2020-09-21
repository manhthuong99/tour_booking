
@foreach( $Booking as $value)

    <div class="row">
        <div class="col-md-12">
            <!-- title row -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="">
                        Cảm ơn quý khách đã sử dụng dịch vụ của Kind Đô Travel,
                    </h2>
                    <h3>
                        Quý khách đã đặt thành công tour {{ $value->tours->tours_name }}
                    </h3>
                    <br>
                </div>
                <!-- /.col -->
            </div>
        <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <address style="font-size: 18px">
                        <h3><b> Nhân viên</b></h3>
                        @if(\Illuminate\Support\Facades\Auth::check())
                            @php($user = \Illuminate\Support\Facades\Auth::user())
                            <strong>{{ $user->fullname }}</strong><br>
                            Địa chỉ:       {{ $user->address }}<br>
                            Số điện thoại: {{ $user->phone_number }}<br>
                            Email:         {{ $user->email }}
                        @endif

                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <h3><b>Khách hàng</b></h3>
                    <address style="font-size: 18px">
                        <strong>{{ $value->users->fullname }}</strong><br>
                        Địa chỉ: {{ $value->users->fullname }}<br>
                        Số điện thoại: {{ $value->users->phone_number }}<br>
                        Email: {{ $value->users->email }}
                    </address>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped" style="font-size: 16px; width: 1000px">
                        <thead>
                        <tr>
                            <td width="30%">Tên tour</td>
                            <td width="20%">Ngày khởi hành</td>
                            <td width="10%">Số người</td>
                            <td width="20%">Giá tour</td>
                            <td width="20%">Thành tiền</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $value->tours->tours_name }}</td>
                            <td>{{ date("d/m/Y", strtotime($value->tours->calendar)) }}</td>
                            <td>{{ $value->number_customer }}</td>
                            <td>{{ $value->tours->price }} VNĐ</td>
                            <td>{{ $value->total }} VNĐ</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <br>
        </div>
    </div>
@endforeach
