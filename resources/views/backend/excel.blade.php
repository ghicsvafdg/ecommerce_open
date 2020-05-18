
<!DOCTYPE html>
<html>
<head>
    <title>Import Excel File in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <br />
    
    <div class="container">
        <h3 align="center">Import Excel File in Laravel</h3>
        <br />
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
                   
                    <input type="file" name="file" class="form-control" required>
                    <br>
                    <button class="btn btn-success">Import User Data</button>
                    <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
                    <a class="btn btn-primary" href="{{route('manage-product.index')}}">Quay về</a>
                </table>
            </div>
        </form>
        
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Customer Data</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Category_id</th>
                            <th>Tag_id</th>
                            <th>Slug</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Quantity</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Promotion</th>
                            <th>Description</th>
                            <th>Detail</th>
                        </tr>
                        @foreach($data as $row)
                        <tr>
                            <td>{{ $row->category_id }}</td>
                            <td>{{ $row->tag_id }}</td>
                            <td>{{ $row->slug }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->price }}</td>
                            <td>{{ $row->image }}</td>
                            <td>{{ $row->quantity }}</td>
                            <td>{{ $row->color }}</td>
                            <td>{{ $row->size }}</td>
                            <td>{{ $row->promotion }}</td>
                            <td>{{ $row->description }}</td>
                            <td>{{ $row->detail }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

