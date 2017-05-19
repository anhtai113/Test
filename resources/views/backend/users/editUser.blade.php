@extends('backend.master')
@section('content')
	<div class="row">
		<h1 style="background: #61F716; font-size: 30px solid #FC5B0A;border-radius: 5px; width: 500px;
		height: 50px;margin: -8px 0px 0px 150px;padding-left: 60px; padding-top: 3px;">
		Form chỉnh sửa Users
	</h1>
	</div>
	@foreach($data as $dt)
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-6">
				<form action="{{URL::route('admin.users.postedit',$id)}}" method="post" enctype="multipart/form-data">
				 <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
				
					<div class="form-group">
						<label>Tên</label>
						<input type="text" name="name" value="{!! $dt->name !!}" class="form-control">
						<div>
							{!! $errors->first('name') !!}
						</div>
					</div>
					<div>
						<label>Email</label>
						<input  name="email"  value="{!! $dt->email !!}" class="form-control">
						<div>
							{!! $errors->first('email') !!}
						</div>
					</div>
					<div>
						<label>Mật khẩu</label>
						<input type="password" name="matkhau" value="{!! $dt->password !!}" class="form-control">
						<div>{!! $errors->first('matkhau') !!}</div>
					</div>	
					<div>
						<label>Quyền</label>
						<input type="text" name="quyen" value="{!! $dt->quyen !!}" class="form-control">
					</div>
					<button type="submit" class="btn btn-info " style="width: 100px;margin-top: 10px;">Lưu</button>
					<button type="" class="btn btn-info " style="width: 100px;margin-top: 10px;">Reset</button>
					<a href="{{URL::route('admin.users.getlist')}}" class="btn btn-primary" style="width: 100px;margin-top: 10px;">Trở về</a>
				
				</form>
			</div>
			<div class="col-md-4"></div>
	@endforeach
		</div>							
	
	
@endsection