@extends('layouts.frontend.app')
@section('content')


<div class="nav-products">
    {{-- cate here --}}
    <div class="title-category py-1 my-5" >
        <h4 style="text-align: center">Sản phẩm trong danh mục {{$name}} </h4>
    </div>

    <div class="product-show row">
        {{-- product  --}}
        @foreach ($product as $product)
        <div class="col-md-3 col-6 pb-4 text-center">
            <img src="{{ asset('images/'.json_decode($product->image)[0]) }}" alt="Khong co anh">
            <div class="title-product-show text-center pt-4">
            <a href="{{route('detail-product', $product->slug)}}">{{ $product->name }}</a>
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
        @endforeach
    </div>
</div>
@endsection
