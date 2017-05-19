@extends('backend.master')
@section('content')
<h1  style="background: #61F716; font-size: 30px solid #FC5B0A; padding-left: 20px;padding-top: 5px; border-radius: 10px;
width: 500px; height: 50px;margin-top: -8px;">
	Quảng lý users
</h1>
<div class="row">
	<div class="col-md-4">
		
  		<a href="{{URL::route('admin.users.getadd')}}" class="btn btn-primary">Thêm</a>
	
	</div>
	<div class="col-md-8"></div>
</div>
<table class="table table-hover">
	<thead>
		<th>STT</th>
		<th>Tên</th>
		<th>Email</th>
		<th>Mật khẩu</th>
		<th>Quyền</th>
		<th>Edit</th>
		<th>Delete</th>
	</thead>
	<tbody>
	<?php $stt = 1;?>
	@foreach($data as $dt)
		<tr>
		<td>{!! $stt++!!}</td>
		<td>{!! $dt->name !!}</td>
		<td>{!! $dt->email!!}</td>
		<td>{!! $dt->password !!}</td>
		<td>{!! $dt->quyen !!}</td>
		<td><a href="{{URL::route('admin.users.getedit',$dt->id)}}"><span class="glyphicon glyphicon-pencil" title="Chỉnh sửa"></span></a></td>
		<td><a  onclick="return confirmDel('Bạn có muốn xóa !')" href="{{URL::route('admin.users.getdelete',$dt->id)}}" data-toggle="tooltip"><span class="glyphicon glyphicon-trash" title="Xóa"></span></a></td></tr>
	@endforeach
	</tbody>
	
</table>
@endsection