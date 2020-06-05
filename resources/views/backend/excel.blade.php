@extends('layouts.backend.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            {{-- <div class="col-sm-12">
                <h1 style="text-align: center">Quản lý ngươi</h1>
            </div> --}}
            <div class="col-sm-12">
                <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Quản lý sản phẩm</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 align="center">Nhập sản phẩm qua file excel</h3>
                    </div>
                    <br />
                    <div class="card-body">
                        @if (\Session::has('msg'))
                        <div class="alert alert-danger" style="margin-left: 10px">
                            <h5> {!! \Session::get('msg') !!}</h5>
                        </div>
                        @elseif($errors->any())
                        <div class="alert alert-danger" style="margin-left: 10px">
                            <p>Thêm file thất bại, vui lòng kiểm tra lại định dạng hoặc dữ liệu file</p>
                        </div>
                        @endif
                        
                        <form method="post" enctype="multipart/form-data" action="{{ url('/import_excel/import') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <table class="table">
                                    
                                    <input type="file" name="file" class="form-control" required style="width: 50%">
                                    <br>
                                    <button class="btn btn-success">Nhập dữ liệu</button>
                                    <a class="btn btn-warning" href="{{ route('export') }}" style="margin-left: 10px">Xuất dữ liệu</a>
                                    <a class="btn btn-primary" href="{{route('manage-product.index')}}" style="margin-left: 10px">Quay về</a>
                                </table>
                            </div>
                        </form>
                        
                        <br />
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá sản phẩm</th>
                                            <th>Hình ảnh sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Màu sắc</th>
                                            <th>Kích cỡ</th>
                                            <th>mã giảm giá</th>
                                        </tr>
                                        @foreach($data as $row)
                                        <tr>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->price }}</td>
                                            <td><img src="{{asset('images/'.json_decode($row->image)[0])}}" alt="khong co anh" height="40px" width="40px"></td>
                                            <td>{{ $row->quantity }}</td>
                                            <td>{{ $row->color }}</td>
                                            <td>{{ $row->size }}</td>
                                            <td>{{ $row->promotion }}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection

