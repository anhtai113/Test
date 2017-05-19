@extends('backend.master')
@section('content')

<div class="row">
<h1  style="background: #61F716; font-size: 30px solid #FC5B0A; padding-left: 20px;padding-top: 5px; border-radius: 10px;
width: 500px; height: 50px;margin-top: -8px;">
	Thêm Sản phẩm
</h1>
</div>
<div class="row">
	<div class="col-md-2">
		<a href="{{URL::route('admin.sanpham.getlist')}}" style="font-size: 30px; text-decoration: none; ">Trở về</a>
	</div>
	<div class="col-md-6">
		<form action="{{URL::route('admin.sanpham.postadd')}}" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
			<div class="row form-group">
				<label>Mã SP</label>
				<input type="text" name="masp" placeholder="Nhập tên mã sản phẩm" class="form-control">
				{!! $errors->first('masp') !!}
			</div>
			<div class="row form-group">
				<label>Tên sản phẩm</label>
				<input type="text" name="tensp" placeholder="Nhập tên sản phẩm" class="form-control">
				{!! $errors->first('tensp') !!}
			</div>
			<div class="row form-group">
				<label>Ảnh</label>
				<input type="file" name="anh"  class="form-control">
				{!! $errors->first('anh') !!}
			</div>
			<div class="row form-group">
				<label>Loại SP</label>
				<select class="form-control" name="loaisp">
					<option value=""><---Select Sản Phẩm---></option>
					@foreach($data as $data)
						<option value="{!! $data->id !!}">{!! $data->tenloai !!}</option>
					@endforeach
				</select>
				{!! $errors->first('loaisp') !!}
			</div>
			<div class="row form-group">
				<label>DVT</label>
				<input type="text" name="dvt"  class="form-control">
				{!! $errors->first('dvt') !!}
			</div>
			<div class="row form-group">
				<label>Giá mua</label>
				<input type="text" name="giamua"  class="form-control">
				{!! $errors->first('giamua') !!}
			</div>
			<div class="row form-group">
				<label>Giá bán</label>
				<input type="text" name="giaban"  class="form-control">
				{!! $errors->first('giaban') !!}
			</div>
			<div class="row form-group">
				<label>Ghi chú</label>
				<input type="text" name="ghichu"  class="form-control">
				{!! $errors->first('ghichu') !!}
			</div>
			<button type="submit" class="btn btn-primary">THÊM</button>
			<button class="btn btn-primary">Reset</button>
		</form>
	</div>
	<div class="col-md-4"></div>
</div>
@endsection