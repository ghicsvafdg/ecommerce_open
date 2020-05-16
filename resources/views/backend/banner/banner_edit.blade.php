<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Simple Tables</title>
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
                <li class="breadcrumb-item active">Quản lý banner</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              
              <!-- Horizontal Form -->
              <div class="card card-info">
                <div class="card-header" style="text-align: center">
                  <h3>Thêm mới banner</h3>
                </div>
                <div class="card">
                  <h1>Vị trí hiển thị banner</h1>
                  <div class="row">
                      <div class="col-8">
                          <h2>Trang chủ</h2>
                          <img src="{{asset('images/index_section.png')}}" alt="" height="400" width="500" >
                      </div>
                      <div class="col-4">
                          <h2>Trang chi tiết sản phẩm</h2>
                          <img src="{{asset('images/detail_section.png')}}" alt="" height="600" width="300">
                      </div>
                      <div class="col-8">
                          <h2>Trang danh mục sản phẩm</h2>
                          <img src="{{asset('images/cate_section.png')}}" alt="" height="400" width="500">
                      </div>
                      <div class="col-4">
                          <h2>Quy tắc</h2>
                          <table class="text-center table table-bordered table-striped">
                              <tr>
                                  <td>Khu vực</td>
                                  <td>Số lượng banner tối đa</td>
                              </tr>
                              <tr>
                                  <td>1</td>
                                  <td>5</td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>4</td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>1</td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>1</td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>2</td>
                              </tr>
                              <tr>
                                  <td>6</td>
                                  <td>5</td>
                              </tr>
                          </table>
                      </div>
                  </div>
              </div>
              <div class="card">
                  <div class="card-header">
                      <h3>Sửa thông tin banner khu vực {{$banner->section}}</h3>
                  </div>
                  
                  <form action="{{route('manage-banner.update',$banner->id)}}" method="POST" enctype="multipart/form-data" class="form-group">
                      @method('PATCH')           
                      @csrf
                      <div class="card-body">
                      
                          <label>Chọn khu vực: </label>
                          <select class="form-control @error('section') is-invalid @enderror" name="section" value="" disabled>
                              <option selected value="{{$banner->section}}">{{$banner->section}}</option>
                          </select>
                          @error('section')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                          <label>Tên banner: </label>
                          <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ $banner->name }}" required>
                          @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                          <label>Upload Banner</label><br>
                          <strong>định dạng: jpeg,png,jpg,gif,svg | tối đa: 2MB mỗi ảnh</strong>
                          <input type="file" class="form-control" name="filename[]" id="file" accept="image/*" multiple />
                      </div>    
                      <div class="card-footer">
                          <div class="row">
                              <div class="col-6 text-right">
                                  <a href="{{route('manage-banner.index')}}" class="btn btn-danger">Hủy</a>
                              </div>
                              <div class="col-6 text-left">
                                  <button type="submit" class="btn btn-secondary">Sửa</button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
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
          </div>
        </div>
      </section>
    </div>
  </div>
  
  <!-- ./wrapper -->
  
  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
</body>

</html>