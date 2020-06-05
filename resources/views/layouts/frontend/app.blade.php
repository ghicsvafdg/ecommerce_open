<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Azzara Bootstrap 4 Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <meta charset="utf-8">
    <link rel="icon" href="assets/img/logo_without_text.png" class="img-fluid" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="https://kit.fontawesome.com/ac2db3b359.js" crossorigin="anonymous"></script>
    <!-- Slide -->
    <script src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/customFrontend.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="logo-brand d-lg-block d-none">
                <a href="#"> <img class="img-fluid" src="assets/img/pool-cover-banner-1024x267.jpg" style="width:100%" alt="Chania"></a>
            </div>
            <div class="menu">
                <div class="container list-menu">
                    <a href="#"><img class="img-fluid" src="assets/img/logo-babycare.PNG" alt="Chania"></a>
                    <div class="d-lg-block d-none">
                        <ul>
                            <li><a href="#">trang chủ</a></li>
                            <li><a href="#">giới thiệu</a></li>
                            <li><a href="#">sản phẩm</a></li>
                            <li><a href="#">blog</a></li>
                            <li><a href="#">liên hệ</a></li>
                        </ul>
                    </div>

                    <div class="dathang-nutsave">
                        <p>(04) 6672332</p>
                        <p>8:00AM-19:00PM</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="main-body row">
                    <div class="col-md-9 col-12">
                        <div class="category-product row">
                            <div class="col-md-4 col-12">
                                <div class="box-category my-4">
                                    <div class="head-title text-center py-2">
                                        <i class="fas fa-align-justify pr-3"></i> Danh mục sản phẩm
                                    </div>
                                    <div class="list-cate-active">
                                        @foreach ($categories as $category)
                                        <div class="detail-cate row pt-2">
                                            <div class="col-3 px-0 pl-2 text-center">
                                                <i class="fas fa-utensils"></i>
                                            </div>
                                            <div class="col-9 pl-0">
                                                <a href="#"><p><b>{{$category->name}}</b></p></a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-12 my-4">
                                <form class="example" action="/action_page.php" style="margin:auto;">
                                    <input type="text" placeholder="Nhập nội dung tìm kiếm" name="search2">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                {{-- banner --}}
                                <img src="assets/img/pck-kids.jpg" class="img-fluid py-4" alt="">
                            </div>
                        </div>
                        @yield('content')
                    </div>
                    <div class="col-3 d-lg-block d-none">
                        <div class="info-address my-4">
                            <div class="notice text-center row">
                                <div class="user-account">
                                    @if (Auth::user())
                                        <div class="dropdown">
                                            <button class="dropbtn">
                                                <i class="fas fa-user pr-1"></i> Xin chào {{ Auth::user()->name }}
                                                <i class="fas fa-sort-down pl-2"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#">Chi tiết tài khoản</a>
                                                <a href="{{ route('logoutt') }}">Đăng Xuất</a>
                                            </div>
                                        </div>
                                    @else
                                    <div class="dropdown">
                                        <button class="dropbtn">
                                            <i class="fas fa-user pr-1"></i> Tài khoản
                                            <i class="fas fa-sort-down pl-2"></i>
                                        </button>
                                        <div class="dropdown-content">
                                            <a href="{{ route('loginn') }}">Đăng nhập</a>
                                            <a href="{{ route('register') }}">Tạo tài khoản</a>
                                        </div>
                                    </div>
                                    @endif
                                    
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
                                                {{ csrf_field() }}
                                                <thead id="product_data">
                                                    
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
                                            <p class="bold-text">
                                                <b>địa chỉ cửa hàng</b>
                                            </p>
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
                                @foreach ($posts as $post)
                                <div class="box-news row py-3 ">
                                    <div class="col-4">
                                        <img src="{{ asset('images/'.$post->image) }}" class="img-fluid" alt="khong co anh">
                                    </div>
                                    <div class="col-8 text-box-news">
                                        <a href="#">{{$post->title}}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- logo -->
                <div class="logo row my-5">
                    <div class="col-md-2 col-6">
                        <img src="assets/img/56227ede1b558_thumb900.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-2 col-6">
                        <img src="assets/img/baby-logo_23-2147993851.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-2 col-6">
                        <img src="assets/img/56227ede1b558_thumb900.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-2 col-6">
                        <img src="assets/img/baby-logo_23-2147993851.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-2 col-6">
                        <img src="assets/img/56227ede1b558_thumb900.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-2 col-6">
                        <img src="assets/img/baby-logo_23-2147993851.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="category-footer row pb-5">
                    <div class="list-cate-footer col-md-2 col-6">
                        <h6><b>BÉ ĂN - BÉ UỐNG</b></h6>
                        <a href="#">Sữa bột</a>
                        <a href="#">Bình sữa, phụ kiện</a>
                        <a href="#">Đồ dùng ăn uống</a>
                        <a href="#">Ăn dặm</a>
                    </div>
                    <div class="list-cate-footer col-md-2 col-6">
                        <h6><b>BÉ ĂN - BÉ UỐNG</b></h6>
                        <a href="#">Sữa bột</a>
                        <a href="#">Bình sữa, phụ kiện</a>
                        <a href="#">Đồ dùng ăn uống</a>
                        <a href="#">Ăn dặm</a>
                    </div>
                    <div class="list-cate-footer col-md-2 col-6">
                        <h6><b>BÉ ĂN - BÉ UỐNG</b></h6>
                        <a href="#">Sữa bột</a>
                        <a href="#">Bình sữa, phụ kiện</a>
                        <a href="#">Đồ dùng ăn uống</a>
                        <a href="#">Ăn dặm</a>
                    </div>
                    <div class="list-cate-footer col-md-2 col-6">
                        <h6><b>BÉ ĂN - BÉ UỐNG</b></h6>
                        <a href="#">Sữa bột</a>
                        <a href="#">Bình sữa, phụ kiện</a>
                        <a href="#">Đồ dùng ăn uống</a>
                        <a href="#">Ăn dặm</a>
                    </div>
                    <div class="list-cate-footer col-md-2 col-6">
                        <h6><b>BÉ ĂN - BÉ UỐNG</b></h6>
                        <a href="#">Sữa bột</a>
                        <a href="#">Bình sữa, phụ kiện</a>
                        <a href="#">Đồ dùng ăn uống</a>
                        <a href="#">Ăn dặm</a>
                    </div>
                    <div class="list-cate-footer col-md-2 col-6">
                        <h6><b>BÉ ĂN - BÉ UỐNG</b></h6>
                        <a href="#">Sữa bột</a>
                        <a href="#">Bình sữa, phụ kiện</a>
                        <a href="#">Đồ dùng ăn uống</a>
                        <a href="#">Ăn dặm</a>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="container">
                    <div class="info-footer row">
                        <div class="col-md-4 col-12 info-details">
                            <p>
                                <h6><b> LIÊN HỆ VỚI CHÚNG TÔI</b></h6>
                            </p>
                            <p><i class="fas fa-map-marker-alt"></i> Tòa nhà Hanoi Group - 442 Đội Cấn - Ba Đình - Hà Nội</p>
                            <p><i class="fas fa-phone-square-alt"></i> (04) 6678329 653 - (04) 543829 439</p>
                            <p><i class="fas fa-globe-americas"></i> Trực 8h00 -20h00 từ thứ 2 đến thứ 6</p>
                        </div>
                        <div class="col-md-2 col-12 personal-info">
                            <p>
                                <h6><b>THÔNG TIN</b></h6>
                            </p>
                            <a href="#">Tài khoản của tôi</a>
                            <a href="#">Sản phẩm yêu thích</a>
                            <a href="#">Lịch sử mua hàng</a>
                            <a href="#">Sử dụng thông tin</a>
                        </div>
                        <div class="col-md-2 col-12 personal-info">
                            <p>
                                <h6><b>HỖ TRỢ</b></h6>
                            </p>
                            <a href="#">Tài khoản của tôi</a>
                            <a href="#">Sản phẩm yêu thích</a>
                            <a href="#">Lịch sử mua hàng</a>
                            <a href="#">Sử dụng thông tin</a>
                        </div>
                        <div class="col-md-2 col-12 personal-info">
                            <p>
                                <h6><b>CHÍNH SÁCH</b></h6>
                            </p>
                            <a href="#">Tài khoản của tôi</a>
                            <a href="#">Sản phẩm yêu thích</a>
                            <a href="#">Lịch sử mua hàng</a>
                            <a href="#">Sử dụng thông tin</a>
                        </div>
                        <div class="col-md-2 col-12 personal-info">
                            <p>
                                <h6><b>LIÊN KẾT</b></h6>
                            </p>
                            <a href="#">Tài khoản của tôi</a>
                            <a href="#">Sản phẩm yêu thích</a>
                            <a href="#">Lịch sử mua hàng</a>
                            <a href="#">Sử dụng thông tin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/cartAction.js')}}"></script>
    {{-- <script src="{{asset('js/loadProductInCart.js')}}"></script> --}}
    
    <!--   Core JS Files   -->
    {{-- <script src="assets/js/core/jquery.3.2.1.min.js"></script> --}}
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
</body>

</html>