@extends('backend.master')
@section('content')

<div class="row">
<h1  style="background: #61F716; font-size: 30px solid #FC5B0A; padding-left: 20px;padding-top: 5px; border-radius: 10px;
width: 500px; height: 50px;margin-top: -8px;">
	Thêm Đơn hàng
</h1>
</div>
<div class="row">
	<div class="col-md-2">
		<a href="{{URL::route('admin.donhang.getlist')}}" style="font-size: 30px; text-decoration: none; ">Trở về</a>
	</div>
	<div class="col-md-6">
		<form action="{{URL::route('admin.donhang.postadd')}}" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
			<div class="row form-group">
				<label>Tên khách hàng</label>
				<select class="form-control" name="idkh">
					<option value=""><------Select khách hàng------></option>
					@foreach($data1 as $dt1)
						<option value="{!! $dt1->id !!}">{!! $dt1->ten_kh !!}</option>
					@endforeach
				</select>
				{!!$errors->first('idkh')!!}
			</div>
			<div class="row form-group">
				<label>Sản phẩm</label>
				<select class="form-control" name="dssp">
					<option value=""><------Select Sản phẩm------></option>
					@foreach($data2 as $dt2)
						<option value="{!! $dt2->id !!}">{!! $dt2->ten_sp !!}</option>
					@endforeach
				</select>
				{!!$errors->first('dssp')!!}
			</div>
			<div class="row form-group">
				<label>Ngày mua</label>
				<input type="date" name="ngaymua" placeholder="Chọn ngày" class="form-control">
				{!!$errors->first('ngaymua')!!}
			</div>
			<div class="row form-group">
				<label>Thành tiền</label>
				<input type="text" name="ttien" class="form-control">
				{!!$errors->first('ttien')!!}
			</div>
			<div class="row form-group">
				<label>Trạng thái</label>
				<select class="form-control" name="trangthai">
					<option value=""><------Select trạng thái------></option>
					@foreach($data3 as $dt3)
						<option value="{!! $dt3->id !!}">{!! $dt3->tinhtrang !!}</option>
					@endforeach
				</select>
				{!!$errors->first('trangthai')!!}
			</div>
			<div class="row form-group">
				<label>Ghi chú</label>
				<input type="text" name="ghichu" class="form-control">
				{!!$errors->first('ghichu')!!}
			</div>
			<button type="submit" class="btn btn-primary">THÊM</button>
			<button class="btn btn-primary">Reset</button>
		</form>
	</div>
	<div class="col-md-4"></div>
</div>
@endsection