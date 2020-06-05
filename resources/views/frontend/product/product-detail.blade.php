@extends('layouts.frontend.app')
@section('content')
<div class="main-body row">
    <div class="col-md-9 col-12">
        <div class="category-product row">
            
            <div class="col-md-8 col-12 my-4" style="text-align: center">
                <h3>Chi tiết sản phẩm</h3>
            </div>
        </div>
        <div class="product-details-info row">
            <div class="col-5">
                <img src="{{ asset('images/'.json_decode($product->image)[0]) }}" alt="" class="img-fluid">
            </div>
            <div class="col-7">
                <p><b>{{$product->name}}</b></p>
                <div class="price-products">
                    <div class="origin-products-price">
                        <h5><b>{{$product->promotion}}</b></h5>
                    </div>
                    <div class="abondon-products-price pt-1">
                        {{$product->price}}
                    </div>
                </div>
                <p class="small-text-product">
                    <b>Mô tả:</b>
                </p>
                <p class="small-text-product">
                    {{$product->description}}
                </p>
                <hr>
                
                
                <form action="" class="form-paying" method="post">
                    <input type="hidden" name="_token" value="MN6Ppkvbi0B4YY0Ms2Fkm4TJUbJ0FBuuYgMnHlRC">                                            
                    <div class="row pt-4">
                        <div class="col-3"><b>Màu sắc:</b></div>
                        <div class="col-9 pl-0">
                            <div class="radio-toolbar">
                                <input type="radio" id="Trắng" name="color" value="Trắng" checked="">
                                <label for="Trắng">{{$product->color}}</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row py-3">
                        <div class="col-3"><b>Kích thước :</b></div>
                        <div class="col-9 pl-0">
                            <div class="radio-toolbar">
                                <input type="radio" id="S" name="size" value="S" checked="">
                                <label for="S">{{$product->size}}</label>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="px-3 py-1">
                        <div class="row">
                            <div class="mr-5 pt-2">
                                <b>Số lượng :</b>
                            </div>
                            <div class="number-spinner">
                                <span class="ns-btn">
                                    <a data-dir="dwn"><span class="icon-minus"></span></a>
                                </span>
                                <input type="text" class="pl-ns-value" value="1" maxlength=2>
                                <span class="ns-btn">
                                    <a data-dir="up"><span class="icon-plus"></span></a>
                                </span>
                            </div>
                        </div>
                        <div class="pt-4 px-0" id="row-pay"> 
                            <div class="row">
                                <input type="text" value="25" name="product_id" hidden="">
                                <button type="submit" class="btn-cart" id="alert_demo_1">
                                    <i class="fas fa-cart-plus" style="margin-right: 7px; "></i>THÊM VÀO GIỎ HÀNG
                                </button>
                                &nbsp;
                                <a href="pay-method.html"><button type="button" class="btn-pay">MUA NGAY</button></a>
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="content-pr-product">
            <div class="nav-products">
                <div class="title-category py-1 my-5" style=" overflow: auto ; white-space: nowrap;">
                    <h5>Sản phẩm cùng danh mục</b></h5>
                    
                </div>
                
                <div class="product-show row">
                    @foreach($sameCate as $same)
                    <div class="col-md-3 col-6 pb-4 text-center">
                        <a href="products-detail.html"><img src="{{ asset('images/'.json_decode($same->image)[0]) }}" alt=""></a> 
                        <div class="title-product-show text-center pt-4">
                            {{$same->name}}
                        </div>
                        <div class="curent-price-product text-center">
                            <h6><b>{{$same->promotion}}</b></h6>
                        </div>
                        <div class="abondon-price-product text-center">
                            {{$same->price}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            
        </div>
        
        
    </div>
    <div class="col-3 d-lg-block d-none">
        <div class="info-address my-4">
            <div class="notice text-center row">
                <div class="user-account">
                    
                    <div class="dropdown">
                        <button class="dropbtn">
                            <i class="fas fa-user pr-1"></i> Tài khoản
                            <i class="fas fa-sort-down pl-2"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#">Đăng nhập</a>
                            <a href="#">Tạo tài khoản</a>
                            <a href="#" class="fb btn">
                                <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                            </a>
                            <a href="#" class="google btn">
                                <i class="fa fa-google fa-fw"></i> Login with Google+
                            </a>
                        </div>
                    </div>
                    
                </div>
                <div class="px-3"><b>|</b></div>
                <div class="user-card">
                    <div class="card-dropdown">
                        <button class="card-dropbtn">
                            <i class="fas fa-cart-plus pr-1"></i> Giỏ hàng
                            <i class="fas fa-sort-down pl-2"></i>
                        </button>
                        <div class="card-dropdown-content">
                            <div class="pb-3" style="color: #44a4d7;">
                                <b>Sản phẩm được thêm vào giỏ hàng</b> 
                            </div>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <img src="assets/img/babycare stroller Sk-19-1000x1000.jpg" style="width: 80px; height: 80px;" alt="" class="img-fluid">
                                        </th>
                                        <th scope="col" class="info-card">
                                            Đẩy xe cho bé sơ sinh...
                                            <span style="color: #ff7f0b;">450.000đ</span>
                                        </th>
                                        <th scope="col">
                                            <button type="submit" class="my-2 btn-btn-delete">
                                                <i class="mr-1 fas fa-trash-alt"></i> Xóa
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <img src="assets/img/babycare stroller Sk-19-1000x1000.jpg" style="width: 80px; height: 80px;" alt="" class="img-fluid">
                                        </th>
                                        <th scope="col" class="info-card">
                                            Đẩy xe cho bé sơ sinh...
                                            <span style="color: #ff7f0b;">450.000đ</span>
                                        </th>
                                        <th scope="col" style="width: 30%;">
                                            <button type="submit" class="my-2 btn-btn-delete">
                                                <i class="mr-1 fas fa-trash-alt"></i> Xóa
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="button-card">
                                <button type="submit" class="my-2 btn-card">
                                    <a href="card-user.html"> Xem giỏ hàng</a> 
                                </button>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="support-contact">
                <div class="contact my-3 py-3">
                    <div class="shop-adress row">
                        <div class="col-3 pr-0 text-center ">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="col-9 pl-0 text-info">
                            <p class="bold-text"><b>địa chỉ cửa hàng</b></p>
                            <p1>443, Đội Cấn, Đống Đa Hà Nội</p1>
                            <p1>442, Đội Cấn, Đống Đa Hà Nội</p1>
                        </div>
                    </div>
                </div>
                <div class="contact my-3 py-3">
                    <div class="shop-adress row">
                        <div class="col-3 pr-0 text-center ">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="col-9 pl-0 text-info">
                            <p class="bold-text"><b>địa chỉ cửa hàng</b></p>
                            <p1>442, Đội Cấn, Đống Đa Hà Nội</p1>
                            <p1>442, Đội Cấn, Đống Đa Hà Nội</p1>
                        </div>
                    </div>
                </div>
                <div class="contact my-3 py-3">
                    <div class="shop-adress row">
                        <div class="col-3 pr-0 text-center ">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="col-9 pl-0 text-info">
                            <p class="bold-text"><b>địa chỉ cửa hàng</b></p>
                            <p1>442, Đội Cấn, Đống Đa Hà Nội</p1>
                            <p1>442, Đội Cấn, Đống Đa Hà Nội</p1>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="feedback">
            <img src="assets/img/arashmil.jpg" alt="" class="rounded-circle">
            <p><i>"BabyCare là sản phẩm phân phối chính hãng..."</i></p>
            <p style="color: #ff7f0b;"><b>Anh Nam</b></p>
            <p>Thanh Ba - Phú Thọ</p>
        </div>
        <div class="hot-product">
            <div class="title-right py-2 pl-4">
                <h6 style="margin-bottom: 0;"><b>SẢN PHẨM HOT</b></h6>
            </div>
            <div class="product-info row">
                <div class="col-5 pr-0">
                    <a href="#"><img src="assets/img/product-img.PNG" alt=""></a>
                </div>
                <div class="col-7 pl-0 pt-1 text-center text-product">
                    <p><b>Củi gỗ Jpan</b></p>
                    <p class="current-price">2.350.000đ</p>
                    
                </div>
            </div>
        </div>
        <div class="my-4">
            <img src="assets/img/pngtree-big-sale-banner-with-megaphone-and-speech-bubble-png-image_4945616.jpg" class="img-fluid" alt="">
        </div>
        <div class="news my-3">
            <div class="title-news py-2 pl-4 mb-3">
                <h6 style="margin-bottom: 0;"><b>TIN TỨC</b></h6>
            </div>
            <div class="col">
                <div class="box-news row py-3 ">
                    <div class="col-4">
                        <img src="assets/img/15fb5ddf48ce92d5109334693786a818.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-8 text-box-news">
                        <a href="news.html">Mách mẹ 4 kỹ năng chọn sữa thông minh</a>
                    </div>
                </div>
                <div class="box-news row py-3">
                    <div class="col-4">
                        <img src="assets/img/15fb5ddf48ce92d5109334693786a818.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-8 text-box-news">
                        <a href="news.html">Mách mẹ 4 kỹ năng chọn sữa thông minh</a>
                    </div>
                </div>
                <div class="box-news row py-3">
                    <div class="col-4">
                        <img src="assets/img/15fb5ddf48ce92d5109334693786a818.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-8 text-box-news">
                        <a href="news.html">Mách mẹ 4 kỹ năng chọn sữa thông minh</a>
                    </div>
                </div>
                <div class="box-news row py-3">
                    <div class="col-4">
                        <img src="assets/img/15fb5ddf48ce92d5109334693786a818.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-8 text-box-news">
                        <a href="news.html">Mách mẹ 4 kỹ năng chọn sữa thông minh</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- logo -->
