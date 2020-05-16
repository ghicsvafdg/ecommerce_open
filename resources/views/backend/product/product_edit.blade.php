<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | General Form Elements</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
    
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="{{ route('logoutt') }}" class="nav-link">Đăng Xuất</a>
            </li>
          </ul>
          
          
          
          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                  
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  
                </a>
                
              </div>
            </li>
            
          </ul>
        </nav>
        <!-- /.navbar -->
        
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          
          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
              </div>
            </div>
            
            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <a href="{{route('user')}}" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Quản lý người dùng
                  </p>
                </a>
              </ul>
              <br>
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <a href="{{ route('manage-product.index') }}" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Quản lý sản phẩm
                  </p>
                </a>
              </ul>
              <br>
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <a href="{{ route('manage-post.index') }}" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Quản lý bài viết
                  </p>
                </a>
              </ul>
              <br>
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <a href="{{ route('manage-tag.index') }}" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Quản lý thẻ tag
                  </p>
                </a>
              </ul>
              <br>
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <a href="{{ route('manage-category.index') }}" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Quản lý danh mục
                  </p>
                </a>
              </ul>
              <br>
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <a href="{{route('manage-banner.index')}}" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Quản lý banner
                  </p>
                </a>
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>
        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                <li class="breadcrumb-item active">Quản lý sản phẩm</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card card-info">
                        <div class="card-header" style="text-align: center">
                            <h3>Chỉnh sửa thông tin sản phẩm</h3>
                        </div>
                        <!-- form start -->
                        <form class="form-horizontal" action="{{route('manage-product.update', $product->id)}}" method="post" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tên sản phẩm</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name" value="{{$product->name}}" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Danh mục sản phẩm</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="category">
                                            <option value="1">cate</option>
                                            <option value="2" selected>cate2</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tag của sản phẩm</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="tag">
                                            <option value="3">tag1</option>
                                            <option value="4" selected>tag2</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Ảnh</label>
                                    <div class="col-sm-10">
                                        @foreach ($image as $img)
                                        <img src="{{asset('images/'.$img)}}" alt="" height="100" width="100">
                                        @endforeach
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Thay ảnh (không bắt buộc)</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="filename[]" id="file" accept="image/*" multiple/>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Số lượng</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="quantity" class="form-control" value="{{$product->quantity}}">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Các màu của sản phẩm (nếu có)</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="color" class="form-control" value="{{$product->color}}">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Các size của sản phẩm (nếu có)</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="size" class="form-control" value="{{$product->size}}">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Giá gốc 1 sản phẩm (nghìn VNĐ)</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="price" class="form-control" value="{{number_format( $product->price, 0, ',', ' ' )}}">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Giá khuyến mại 1 sản phẩm (nếu có) (nghìn VNĐ)</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="promition" class="form-control" 
                                        value="@isset($product->promotion){{number_format( $product->promotion, 0, ',', ' ')}}@endisset">
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form class="form-horizontal" action="{{route('manage-product.update', $product->id)}}" method="post" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Tên sản phẩm</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="name" value="{{$product->name}}" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Danh mục sản phẩm</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="category">
                                                        <option value="1">cate</option>
                                                        <option value="2" selected>cate2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Tag của sản phẩm</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="tag">
                                                        <option value="1">tag1</option>
                                                        <option value="2" selected>tag2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Ảnh</label>
                                                <div class="col-sm-10">
                                                    @foreach ($image as $img)
                                                    <img src="{{asset('images/'.$img)}}" alt="" height="100" width="100">
                                                    @endforeach
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label  class="col-sm-2 col-form-label">Thay ảnh (không bắt buộc)</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="filename[]" id="file" accept="image/*" multiple/>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label  class="col-sm-2 col-form-label">Số lượng</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="quantity" class="form-control" value="{{$product->quantity}}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label  class="col-sm-2 col-form-label">Các màu của sản phẩm (nếu có)</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="color" class="form-control" value="{{$product->color}}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label  class="col-sm-2 col-form-label">Các size của sản phẩm (nếu có)</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="size" class="form-control" value="{{$product->size}}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label  class="col-sm-2 col-form-label">Giá gốc 1 sản phẩm (nghìn VNĐ)</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="price" class="form-control" value="{{number_format( $product->price, 0, ',', ' ' )}}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label  class="col-sm-2 col-form-label">Giá khuyến mại 1 sản phẩm (nếu có) (nghìn VNĐ)</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="promition" class="form-control" 
                                                    value="@isset($product->promotion){{number_format( $product->promotion, 0, ',', ' ')}}@endisset">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label  class="col-sm-2 col-form-label">Mô tả</label>
                                                <div class="col-sm-10">
                                                    <textarea name="description" id="editor2" cols="30" rows="10" 
                                                    class="form-control">{{$product->description}}</textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label  class="col-sm-2 col-form-label">Chi tiết sản phẩm</label>
                                                <div class="col-sm-10">
                                                    <textarea name="detail" class="form-control" id="editor1">{{$product->detail}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="" style="margin-left: 50%">
                                            <button type="submit" class="btn btn-info">Cập nhật</button>
                                        </div>
                                        <br>
                                        <!-- /.card-footer -->
                                    </form>
                                </div>
                                <!-- /.card -->
                                
                            </div>
                            
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.0.4
                </div>
                <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
                reserved.
            </footer>
            
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
        
        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- bs-custom-file-input -->
        <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                bsCustomFileInput.init();
            });
        </script>
    </body>
    
    </html>