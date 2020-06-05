<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Azzara Bootstrap 4 Admin Dashboard</title>
    <base href="{{asset('')}}">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta charset="utf-8">
    
    <link rel="icon" href="assets/img/logo_without_text.png" class="img-fluid" type="image/x-icon" />
    
    <!-- Fonts and icons -->
    <script src="https://kit.fontawesome.com/ac2db3b359.js" crossorigin="anonymous"></script>
    <!-- Slide -->
    <script src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/customFrontend.css">
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
                
                @yield('content')
                <!-- logo -->
                <div class="logo row my-5">
                    <div class="col-md-2 col-6">
                        <img src="assets/img/56227ede1b558_thumb900.jpg" class="img-fluid" alt="">
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
    
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $(".btn-submit").click(function(e){
            e.preventDefault();
            var user = $("input[name=userid]").val();
            var product = $("input[name=productid]").val();
            $.ajax({
                type:'POST',
                url:'/addtocart',
                data:{
                    user : user,
                    product : product
                },
                success: function (data) {
                    console.log(data);
                },
                error: function (data, textStatus, errorThrown) {
                    console.log(data);
                    
                },
                // success:function(data){
                    //     alert(data.success);
                    // }
                });
            });
            
        </script>
        
        <!--   Core JS Files   -->
        {{-- <script src="assets/js/core/jquery.3.2.1.min.js"></script> --}}
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
    </body>
    
    </html>
    