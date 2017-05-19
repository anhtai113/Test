@extends('backend.master')
@section('content')
<h1  style="background: #61F716; font-size: 30px solid #FC5B0A; padding-left: 20px;padding-top: 5px; border-radius: 10px;
width: 500px; height: 50px;margin-top: -8px;">
	Quảng lý Sản phầm
</h1>
<div class="row">
	<div class="col-md-4">
		
  		<a href="{{URL::route('admin.sanpham.getadd')}}" class="btn btn-primary">Thêm</a>
	
	</div>
	<div class="col-md-8"></div>
</div>
<table class="table table-hover">
	<thead>
		<th>STT</th>
		<th>Mã SP</th>
		<th>Tên SP</th>
		<th>Ảnh</th>
		<th>Loại SP</th>
		<th>DVT</th>
		<th>Giá mua</th>
		<th>Giá bán</th>
		<th>Ghi chú</th>
		<th>Edit</th>
		<th>Delete</th>
	</thead>
	<tbody>
	<?php $stt = 1;?>
	@foreach($data as $dt)
		<tr>
		<td>{!! $stt++!!}</td>
		<td>{!! $dt->ma_sp !!}</td>
		<td>{!! $dt->ten_sp !!}</td>
		<td><img src="{{asset('image/sanpham/'.$dt->image)}}" style="width:30px;height: 30px;border-radius: 5px;"></td>
		<td>{!! $dt->loai_sp !!}</td>
		<td>{!! $dt->dvt !!}</td>
		<td>{!! $dt->giamua !!}</td>
		<td>{!! $dt->giaban !!}</td>
		<td>{!! $dt->ghichu !!}</td>
		<td><a href="{{URL::route('admin.sanpham.getedit',$dt->id)}}"><span class="glyphicon glyphicon-pencil" title="Chỉnh sửa"></span></a></td>
		<td><a  onclick="return confirmDel('Bạn có muốn xóa !')" href="{{URL::route('admin.sanpham.getdelete',$dt->id)}}" data-toggle="tooltip"><span class="glyphicon glyphicon-trash" title="Xóa"></span></a></td></tr>
	@endforeach
	</tbody>
	
</table>
@endsection