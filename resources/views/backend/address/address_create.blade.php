@extends('layouts.backend.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            {{-- <div class="col-sm-12">
                <h1 style="text-align: center">Quản lý ngươi</h1>
            </div> --}}
            <div class="col-sm-12">
                <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Quản lý Voucher</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                
                <!-- Horizontal Form -->
                <div class="card card-info">
                    <div class="card-header" style="text-align: center">
                        <h3>Thêm mới địa chỉ</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="col-12">
                        <div class="private-information">
                            <form action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="px-0 col-12 pl-0">
                                       
                                        <div class="row">
                                            <div class="text-right col-4 pl-0" style="margin-top: 20px; ">
                                                Tỉnh / TP *
                                            </div>
                                            <div class="col-6 px-0">
                                                <div class="form-group">
                                                    <select id="country" name="province" class="form-control" style="margin-top: 5px;" required>
                                                    <option value="" selected disabled>Chọn Tỉnh/Thành phố</option>
                                                    @foreach($provinces as $key => $province)
                                                    <option value="{{$key}}"> {{$province}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="text-right col-4 pl-0" style="margin-top: 20px;" >
                                                Quận / Huyện *
                                            </div>
                                            <div class="col-6 px-0">
                                                <div class="form-group">
                                                    <select name="district" id="state" class="form-control" style="margin-top: 5px;" required>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="text-right col-4 pl-0" style="margin-top: 20px;">
                                                Phường / Xã *
                                            </div>
                                            <div class="col-6 px-0">
                                                <div class="form-group">
                                                    <select name="ward" id="city" class="form-control" style="margin-top: 5px;" required>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>    
                                </div>
                                <div class="py-3 col-md-12" id="multiple-button">
                                    <button type="submit" class="btn-gradient17" style="width: 200x; margin-left:60px;">Tạo địa chỉ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
                
            </div>
            
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    
    {{-- <script type="text/javascript">
        $('#country').change(function(){
            var provinceID = $(this).val();    
            if(provinceID){
                $.ajax({
                    type:"GET",
                    url:"{{url('get-district-list')}}?province_id="+provinceID,
                    success:function(res){               
                        if(res){
                            $("#state").empty();
                            $("#state").append('<option value="">Chọn Quận/Huyện</option>');
                            $.each(res,function(key,value){
                                $("#state").append('<option value="'+key+'">'+value+'</option>');
                            });
                            
                        }else{
                            $("#state").empty();
                        }
                    }
                });
            }else{
                $("#state").empty();
                $("#city").empty();
            }      
        });
        $('#state').on('change',function(){
            var districtID = $(this).val();    
            if(districtID){
                $.ajax({
                    type:"GET",
                    url:"{{url('get-ward-list')}}?district_id="+districtID,
                    success:function(res){               
                        if(res){
                            $("#city").empty();
                            $("#city").append('<option value="">Chọn Phường/Xã</option>');
                            $.each(res,function(key,value){
                                $("#city").append('<option value="'+key+'">'+value+'</option>');
                            });
                            
                        }else{
                            $("#city").empty();
                        }
                    }
                });
            }else{
                $("#city").empty();
            }
        });
    </script>  --}}
</section>

<!-- /.content -->
@endsection