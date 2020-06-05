@extends('layouts.frontend.app')
@section('content')
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
                                <a href=""><p><b>{{$category->name}}</b></p></a>
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
                <img src="assets/img/pck-kids.jpg" class="img-fluid py-4" alt="">
            </div>
        </div>
        <div class="headline-title row ">
            <div class="text-left col-md-11 col-10">
                <p>SẢN PHẨM NỔI BẬT</p>
            </div>
            <div class="text-right">
                <i class="far fa-arrow-alt-circle-left pr-1"></i>
                <i class="far fa-arrow-alt-circle-right "></i>
            </div>
        </div>
        
        <div class="product-popular row">
            <div class="col-md-4 col-12 px-0">
                <img src="assets/img/HTB1uDkyAuSSBuNjy0Flq6zBpVXaP.jpg_q50.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 col-12 px-0">
                <div class="product-info row">
                    <div class="col-md-5 col-6 px-0">
                        <a href="#"><img src="assets/img/Bottle-800x800.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md-7 p-4 p-lg-0 col-6 px-0 text-center text-product">
                        <p><b>Củi gỗ Jpan</b></p>
                        <p class="abondon-price">2.500.000đ</p>
                        <p class="current-price">2.350.000đ</p>
                        <button type="button" class="cf-buy">MUA NGAY</button>
                    </div>
                </div>
                <div class="product-info row">
                    <div class="col-md-5 col-6 px-0">
                        <a href="#"><img src="assets/img/Bottle-800x800.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md-7 p-4 p-lg-0 col-6 px-0 text-center text-product">
                        <p><b>Củi gỗ Jpan</b></p>
                        <p class="abondon-price">2.500.000đ</p>
                        <p class="current-price">2.350.000đ</p>
                        <button type="button" class="cf-buy">MUA NGAY</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 px-0">
                <div class="product-info row">
                    <div class="col-5 col-md-5 col-6 px-0">
                        <a href="#"><img src="assets/img/Bottle-800x800.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md-7 p-4 p-lg-0 col-6 px-0 text-center text-product">
                        <p><b>Củi gỗ Jpan</b></p>
                        <p class="abondon-price">2.500.000đ</p>
                        <p class="current-price">2.350.000đ</p>
                        <button type="button" class="cf-buy">MUA NGAY</button>
                    </div>
                </div>
                <div class="product-info row">
                    <div class="col-5 col-md-5 col-6 px-0">
                        <a href="#"><img src="assets/img/Bottle-800x800.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md-7 p-4 p-lg-0 col-6 px-0 text-center text-product">
                        <p><b>Củi gỗ Jpan</b></p>
                        <p class="abondon-price">2.500.000đ</p>
                        <p class="current-price">2.350.000đ</p>
                        <button type="button" class="cf-buy">MUA NGAY</button>
                    </div>
                </div>
            </div>
        </div>
        
        @foreach ($categories as $category)
        <div class="nav-products">
            {{-- cate here --}}
            <div class="title-category py-1 my-5" style="overflow: auto; white-space: nowrap;">
                <h5><b>{{$category->name}}</b></h5>
                <a href="#" class="text-left">Xem tất cả</a>
            </div>
            
            <div class="product-show row">
                {{-- product  --}}
                @foreach ($category->product as $product)
                <?php if ($count > 4) break; ?>
                
                <div class="col-md-3 col-6 pb-4 text-center">
                    <img src="{{ asset('images/'.json_decode($product->image)[0]) }}" alt="Khong co anh">
                    <div class="title-product-show text-center pt-4">
                        <a href="{{route('detail_product', $product->slug)}}">{{ $product->name }}</a>
                    </div>
                    @if ($product->promotion != null)
                    <div class="curent-price-product text-center">
                        <h6><b>{{number_format($product->promotion*1000, 0, ',', '.' )}}đ</b></h6>
                    </div>
                    <div class="abondon-price-product text-center">
                        {{number_format($product->price*1000, 0, ',', '.' )}}đ
                    </div>
                    @else
                    <div class="curent-price-product text-center">
                        <h6><b>{{number_format($product->price*1000, 0, ',', '.' )}}đ</b></h6>
                    </div>
                    @endif
                    <div class="row py-2 icon-view-details text-center">
                        <form action="">
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            <input type="text" name="userid" value="{{session_id()}}" hidden>
                            <input type="text" name="productid" value="{{$product->id}}" hidden>
                            <button class="btn-btn-cart btn-submit">
                                <i class="fas fa-cart-plus" ></i>
                            </button>
                        </form>
                    </div>
                </div>
                <?php $count++; ?>
                @endforeach
            </div>
        </div>
        @endforeach

        <h3>Danh sách bài viết</h3>
        <div class="nav-products">
            <div class="product-show row">
                @foreach ($posts as $post)
                <?php if ($count > 4) break; ?>
                <div class="col-md-3 col-6 pb-4 text-center">
                    <img src="{{ asset('images/'.json_decode($post->image)[0]) }}" alt="Khong co anh">
                    <div class="title-product-show text-center pt-4">
                        <a href="">{{ $post->title }}</a>
                    </div>
                </div>
                <?php $count++; ?>
                @endforeach
            </div>
        </div>
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
                    <i class="fas fa-cart-plus pr-1"></i> Giỏ hàng
                    <i class="fas fa-sort-down pl-2"></i>
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
@endsection
