@extends('layouts.frontend.app')
@section('content')
    <div class="col-md-12 col-12">
        <div class="category-product row">
            
            <div class="col-md-8 col-12 my-4" >
                <h3 style="text-align: center">Chi tiết sản phẩm</h3>
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
                                @foreach (explode(',',$product->color) as $color)
                            <input type="radio" id="{{$color}}" name="color" value="{{$color}}"  checked>
                                <label for="{{$color}}">{{$color}}</label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                    <div class="row py-3">
                        <div class="col-3"><b>Kích thước :</b></div>
                        <div class="col-9 pl-0">
                            <div class="radio-toolbar">
                                @foreach (explode(',',$product->size) as $size)
                                <input type="radio" id="{{$size}}" name="size" value="{{$size}}" checked>
                                <label for="{{$size}}">{{$size}}</label>
                                @endforeach
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
@endsection
<!-- logo -->
