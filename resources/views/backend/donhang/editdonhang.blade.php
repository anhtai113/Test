@extends('backend.master')
@section('content')
	<div class="row">
		<h1 style="background: #61F716; font-size: 30px solid #FC5B0A;border-radius: 5px; width: 700px;
		height: 50px;margin: -8px 0px 0px 80px;padding-left: 60px; padding-top: 3px;">
		Form chỉnh sửa đơn hàng
	</h1>
	</div>
	@foreach($data as $dt)
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-6">
				<form action="{{URL::route('admin.donhang.postedit',$dt->id)}}" method="post" enctype="multipart/form-data">
				 <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
				
					<div class="form-group">
						<label>Khách hàng</label>
						<select class="form-control" name="idkh">
							@foreach($data2 as $dt2)
							@if($dt->id_kh == $dt2->id)
								<option  selected="selected"value="{!! $dt2->id !!}">{!! $dt2->ten_kh !!}</option>
							@else
								<option value="{!! $dt2->id !!}">{!! $dt2->ten_kh !!}</option>
							@endif
						@endforeach

						</select>
						
							{!! $errors->first('idkh') !!}
						
					</div>
					<div>
						<label>Danh Sach SP</label>
						<select class="form-control" name="dssp">
							@foreach($data3 as $dt3)
							@if($dt->ds_sp == $dt3->id)
								<option  selected="selected"value="{!! $dt3->id !!}">{!! $dt3->ten_sp !!}</option>
							@else
								<option value="{!! $dt3->id !!}">{!! $dt3->ten_sp !!}</option>
							@endif
						@endforeach

						</select>
							{!! $errors->first('dssp') !!}
						
					</div>
					<div>
						<label>Ngày mua</label>
						<input type="date" name="ngaymua" class="form-control" value="{!! $dt->ngaymua !!}">
							{!! $errors->first('ngaymua') !!}
						
					</div>
					<div>
						<label>Thành tiền</label>
						
						<input  type="text" name="ttien"  class="form-control" value="{!! $dt->thanhtien !!}">
						<div>
							{!! $errors->first('ttien') !!}
						</div>
					</div>
					<div>
						<label>Trạng thái</label>
						<select class="form-control" name="trangthai">
							@foreach($data4 as $dt4)
							@if($dt->trangthai == $dt4->id)
								<option  selected="selected"value="{!! $dt4->id !!}">{!! $dt4->tinhtrang !!}</option>
							@else
								<option value="{!! $dt4->id !!}">{!! $dt4->tinhtrang !!}</option>
							@endif
						@endforeach

						</select>
							{!! $errors->first('trangthai') !!}
						
					</div>
					<div>
						<label>Ghi chú</label>
						<textarea rows="5" class="form-control" name="ghichu">{!! $dt->ghichu !!}</textarea>
						<script type="text/javascript">CKEDITOR.replace('ghichu');</script>
						{!! $errors->first('ghichu') !!}
					</div>
					
					
					<button type="submit" class="btn btn-info " style="width: 100px;margin-top: 10px;">Lưu</button>
					<button type="" class="btn btn-info " style="width: 100px;margin-top: 10px;">Reset</button>
					<a href="{{URL::route('admin.donhang.getlist')}}" class="btn btn-primary" style="width: 100px;margin-top: 10px;">Trở về</a>
				
				</form>
			</div>
			<div class="col-md-4"></div>
	@endforeach
		</div>							
	
	
@endsection