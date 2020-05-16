
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
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            Upload Validation Error<br><br>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <form method="post" enctype="multipart/form-data" action="{{ url('/import_excel/import') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <table class="table">
                    {{-- <tr>
                        <td width="40%" align="right"><label>Select File for Upload</label></td>
                        <td width="30">
                            <input type="file" name="select_file" />
                        </td>
                        <td width="30%" align="left">
                            <input type="submit" name="upload" class="btn btn-primary" value="Upload">
                        </td>
                        <button class="btn btn-success">Import User Data</button>
                        <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
                    </tr>
                    <tr>
                        <td width="40%" align="right"></td>
                        <td width="30"><span class="text-muted">.xls, .xslx</span></td>
                        <td width="30%" align="left"></td>
                    </tr> --}}
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import User Data</button>
                    <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
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

