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
                        {{-- <div class="col-sm-12">
                                <h1 style="text-align: center">Quản lý ngươi</h1>
                            </div> --}}
                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                <li class="breadcrumb-item active">Quản lý vài viết</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 style="text-align: center">Quản lý bài viết</h3>
                                </div>

                                @if(session()->has('msg'))
                                <div class="alert" style="background: #5CB85C">
                                    <h4 style="text-align: center">{{ session()->get('msg') }}</h4>
                                </div>
                                @endif
                                <br>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <a href="{{route('manage-post.create')}}" class="btn btn-primary btn-small" style="width: 17%">
                                        <span class="btn-label">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                        Thêm bài viết
                                    </a>
                                    <p></p>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">ID</th>
                                                <th>Tên bài viết</th>
                                                <th>Ảnh tiêu đề</th>
                                                <th>Tóm tắt</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($post as $post)
                                            <tr>
                                                <td>{{$post->id}}</td>
                                                <td>{{$post->title}}</td>
                                                <td><img src="{{asset('images/'.$post->image)}}" alt="khong co anh" height="50px" width="50px"></td>
                                                <td width="40%">{{$post->description}}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <a href="{{route('manage-post.show', $post->slug)}}" data-toggle="tooltip" data-placement="bottom" title="View" class="btn btn-icon btn-primary btn-xs"><i class="fas fa-eye"></i> </a>
                                                        </div>
                                                        <div class="col-4">
                                                            <a href="{{route('manage-post.edit', $post->id)}}" data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-icon btn-secondary btn-xs"><i class="fas fa-pencil-alt"></i></a>
                                                        </div>
                                                        <form action="{{route('manage-post.destroy', $post->id)}}" method="post" class="test col-4">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-icon btn-danger btn-xs" onclick="return confirm('Bạn có muốn xóa bài viết này không?');" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
                <!-- /.col -->
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
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>

</html>