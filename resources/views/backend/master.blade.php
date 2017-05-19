<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Test Laravel</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/myscript.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12" >
				<h3 style="background: #1FC7FF;font-size: 40px;C;height: 100px;width: 100%;color: #0A12FC;padding-top: 20px;padding-left: 300px;">Welcome to Quản Trị</h3>
			</div>
			
		</div>
		<!-- header -->
		<div class="row">
			<div class="col-md-2">
				<ul class="nav nav-pills nav-stacked">
				  <li role="presentation" class="active"><a href="{{URL::route('admin.users.getlist')}}">Users</a></li>
				  <li role="presentation"><a href="{{URL::route('admin.sanpham.getlist')}}">Quản lý sản phầm</a></li>
				  <li role="presentation"><a href="{{URL::route('admin.baiviet.getlist')}}">Bài viết</a></li>
				  <li role="presentation"><a href="{{URL::route('admin.donhang.getlist')}}">Đơn hàng</a></li>
				  <li role="presentation"><a href="{{URL::route('admin.khachhang.getlist')}}">khách hàng</a></li>
				</ul>
            </div>
            <!-- menu -->
			<div class="col-md-10">
				@yield('content')
			</div>
		</div>
	</div>

</body>
</html>