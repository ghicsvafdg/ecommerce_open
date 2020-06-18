@extends('layouts.frontend.app')
@section('content')
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
    <a href="{{route('pc', $category->id )}}" class="text-left">Xem tất cả</a>
    </div>

    <div class="product-show row">
        {{-- product  --}}
        @foreach ($category->product as $product)
        <div class="col-md-3 col-6 pb-4 text-center">
            <img src="{{ asset('images/'.json_decode($product->image)[0]) }}" alt="Khong co anh">
            <div class="title-product-show text-center pt-4">
            <a href="{{route('detail-product', $product->slug)}}">{{ $product->name }}</a>
            <br>
            Tag: <a href="{{route('pt', $product->categories->id )}}">{{$product->tags->name}}</a> Category: <a href="{{route('pc', $product->categories->slug )}}">{{$product->categories->name}}</a>
            </div>
            <div class="price-products">
                @if ($product->promotion != null)
                <div class="curent-price-product">
                    <h6><b>{{number_format($product->promotion*1000, 0, ',', '.' )}}đ</b></h6>
                </div>
                <div class="abondon-price-product">
                    {{number_format($product->price*1000, 0, ',', '.' )}}đ
                </div>
                @else
                <div class="curent-price-product">
                    <h6><b>{{number_format($product->price*1000, 0, ',', '.' )}}đ</b></h6>
                </div>
                @endif
            </div>
            <form action="">
                <input type="radio" name="productsize{{$product->id}}" value="{{explode(',',$product->size)[0]}}" hidden checked>
                <input type="radio" name="productcolor{{$product->id}}" value="{{explode(',',$product->color)[0]}}" hidden checked>
                <input type="text" name="productquantity" value="1" hidden>
                <input type="button" value="Thêm vào giỏ hàng" class="cf-buy" onClick="cartAdd('{{$product->id}}')"/>
            </form>
        </div>
        <?php $count++; ?>
        @endforeach
    </div>
</div>
@endforeach
@endsection
