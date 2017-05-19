@extends('backend.master')
@section('content')

<div class="row">
<h1  style="background: #61F716; font-size: 30px solid #FC5B0A; padding-left: 20px;padding-top: 5px; border-radius: 10px;
width: 500px; height: 50px;margin-top: -8px;">
	Thêm users
</h1>
</div>
<div class="row">
	<div class="col-md-2">
		<a href="{{URL::route('admin.users.getlist')}}" style="font-size: 30px; text-decoration: none; ">Trở về</a>
	</div>
	<div class="col-md-6">
		<form action="{{URL::route('admin.users.postadd')}}" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
			<div class="row form-group">
				<label>Tên đăng nhập</label>
				<input type="text" name="name" placeholder="Nhập tên đăng nhập" class="form-control">
				{!!$errors->first('name')!!}
			</div>
			<div class="row form-group">
				<label>Mật khẩu</label>
				<input type="password" name="matkhau" placeholder="Nhập mật khẩu" class="form-control">
				{!!$errors->first('matkhau')!!}
			</div>
			<div class="row form-group">
				<label>Email</label>
				<input name="email" placeholder="Nhập email" class="form-control">
				{!!$errors->first('email')!!}
			</div>
			<div class="row form-group">
				<label>Quyền</label>
				<select class="form-control" name="quyen">
					<option value=""><---Select Quyền---></option>
					@foreach($data as $data)
						<option value="{!! $data->id !!}">{!! $data->quyen !!}</option>
					@endforeach
				</select>
				{!!$errors->first('quyen')!!}
			</div>
			<button type="submit" class="btn btn-primary">THÊM</button>
			<button class="btn btn-primary">Reset</button>
		</form>
	</div>
	<div class="col-md-4"></div>
</div>
@endsection