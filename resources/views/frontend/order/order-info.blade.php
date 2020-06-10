@extends('layouts.frontend.app')
@section('content')
<div class="address-user-detail row pt-4" style="width:100%">
    <div class="col-3 text-center" style="color: #0b7dda;">
        <i class="fas fa-cart-plus pr-1" aria-hidden="true"></i> <b> Giỏ hàng của quý khách</b>
    </div>
    <div class="col-5 text-center">
        <h4><b>Thanh Toán Đơn Hàng</b> </h4>
        <p>Cảm ơn quý khách đã lựa chọn sản phẩm của chúng tôi</p>
    </div>
</div>

<div class="row pt-4 px-2 my-4" style="width:100%;">
    {{-- <div class="col-12 col-lg-3" style="color: #f09819; font-size: 16px;">
        <i class="mr-1 fas fa-map-marker-alt"></i> Địa chỉ nhận hàng
    </div>
    <div class="col-12 col-lg-9 pt-lg-0 pt-3" id="change_address">
        <a class="btn-gradient16" href=""><i class="mr-1 fas fa-plus"></i>Thêm địa chỉ mới </a>
        <a class="btn-gradient16" href=""><i class="mr-1 fas fa-plus"></i>Thiết lập địa chỉ </a>
    </div> --}}
</div>
<div>
    {{-- <div>
        <input type="radio" name="demo2" value="two" id="radio-two" class="form-radio-first" checked=""><label for="radio-two"> <b> Nguyễn Minh Đức (+84) 978485015</b> D4, Đại học Hà Nội, Km9 Nguyễn Trãi, Phường Thanh Xuân Bắc, Quận Thanh Xuân, Hà Nội </label>
    </div>
    <div>
        <input type="radio" name="demo2" value="two" id="radio-two" class="form-radio-first"><label for="radio-two">  <b> Phạm Văn Hưng (+84) 978485015</b >D4, Đại học Hà Nội, Km9 Nguyễn Trãi, Phường Thanh Xuân Bắc, Quận Thanh Xuân, Hà Nội</label>
    </div> --}}

    <div class="private-information my-4" style="width:100%">
        <div class="row">
            <div class="px-0 col-lg-6 col-6 pl-0">
                <div class="row">
                    <div class="text-right col-lg-3 col-3" style=" margin-top: 20px;">
                        Họ và tên *
                    </div>

                    <div class="col-lg-5 col-7 px-0">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="VD: Nguyễn Văn A" name="uname" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="text-right col-lg-3 col-3" style="  margin-top: 20px;">
                        Điện thoại *
                    </div>
                    <div class="col-lg-5 col-7 px-0">
                        <div class="form-group">
                            <input type="text" class="form-control" id="uname" placeholder="VD: 0978485015" name="uname" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="text-right col-lg-3 col-3" style="  margin-top: 20px;">
                        Email *
                    </div>
                    <div class="col-lg-5 col-7 px-0">
                        <div class="form-group">
                            <input type="text" class="form-control" id="uname" placeholder="VD: user@gmail..." name="uname" required="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-0 col-lg-6 col-6 pl-0">
                <div class="row">
                    <div class="text-right col-lg-3 col-4" style="margin-top: 20px; ">
                        Tỉnh / TP *
                    </div>
                    <div class="col-lg-5 col-7 px-0">
                        <div class="form-group">
                            <div class="form-group">
                                <select id="country" name="province" class="form-control input-fixed" style="margin-top: 5px;" required>
                                <option value="" selected disabled>Chọn Tỉnh/Thành phố</option>
                                @foreach($provinces as $key => $province)
                                <option value="{{$key}}"> {{$province}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="text-right col-lg-3 col-3" style="margin-top: 20px;">
                        Quận / Huyện *
                    </div>
                    <div class="col-lg-5 col-7 px-0">
                        <div class="form-group">
                            <div class="form-group">
                                <select name="district" id="state" class="form-control input-fixed" style="margin-top: 5px;" required>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="text-right col-lg-3 col-3" style="margin-top: 20px;">
                        Phường / Xã *
                    </div>
                    <div class="col-lg-5 col-7 px-0">
                        <div class="form-group">
                            <div class="form-group">
                                <select name="ward" id="city" class="form-control" style="margin-top: 5px;" required>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="text-right col-lg-3 col-3" style="margin-top: 20px;">
                        Địa chỉ chi tiết *
                    </div>
                    <div class="col-lg-5 col-7 px-0">
                        <div class="form-group">
                            <textarea class="form-control" aria-label="With textarea" rows="5"></textarea>
                            <div class="invalid-feedback">Đây là trường bắt buộc</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="px-0 col-md-12">
        <div class="card">
            <div class="pl-3 card-header">
                <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" id="pills-12-tab" data-toggle="pill" href="#pills-12" role="tab" aria-controls="pills-12" aria-selected="true">Thanh Toán Khi Nhận Hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-31-tab" data-toggle="pill" href="#pills-31" aria-selected="false">Chuyển khoản</a>

                    </li>
                </ul>
            </div>

            <div class="px-2 card-body">
                <div class="tab-content mt-2 mb-3" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-12" role="tabpanel" aria-labelledby="pills-12-tab">
                        <!--Carousel Wrapper-->
                        <div class="owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 478px;">
                                    <div class="owl-item active" style="width: 700.8px; margin-right: 10px;">
                                        <div class="item">
                                            <p>Nhân Viên sẽ đến nhận thanh toán trước tại địa chỉ quý khách yêu cầu, hình thức này chỉ áp dụng cho Tp.Hà Nội và Hà Nam. Phí thu tiền tại nhà: 30,000 đ
                                            </p>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 800px; margin-right: 10px;">
                                        <div class="item">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-31" role="tabpanel" aria-labelledby="pills-31-tab">
                        <div class="owl-carousel owl-theme owl-loaded owl-drag owl-hidden">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"></div>
                            </div>
                            <div class="owl-nav disabled">Tài khoản ngân hàng</div>
                            <div class="owl-dots disabled">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group pt-5 pb-3 col-4 px-0">
            <div class="" style="display: flex;">
                <input type="text" class="form-control" placeholder="Nhập mã giảm giá" name="name" required="">
                <button type="button" class="btn btn-primary ml-3">Áp dụng</button>
            </div>
        </div>
        <div class="btn-confirm-pay">
            <button type="button" class="btn btn-primary" style="border-radius: 20px !important; ">Xác nhận đặt hàng</button>
        </div>
    </div>
</div>
@endsection