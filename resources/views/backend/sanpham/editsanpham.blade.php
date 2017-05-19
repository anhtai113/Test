@extends('backend.master')
@section('content')
	<div class="row">
		<h1 style="background: #61F716; font-size: 30px solid #FC5B0A;border-radius: 5px; width: 700px;
		height: 50px;margin: -8px 0px 0px 80px;padding-left: 60px; padding-top: 3px;">
		Form chỉnh sửa sản phẩm
	</h1>
	</div>
	@foreach($data as $dt)
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-6">
				<form action="{{URL::route('admin.sanpham.postedit',$dt->id)}}" method="post" enctype="multipart/form-data">
				 <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
				
					<div class="form-group">
						<label>Mã SP</label>
						<input type="text" name="masp" value="{!! $dt->ma_sp !!}" class="form-control">
						
						{!! $errors->first('masp') !!}
						
					</div>
					<div>
						<label>Tên SP</label>
						<input  type="text" name="tensp"  value="{!! $dt->ten_sp !!}" class="form-control">
						
						{!! $errors->first('tensp') !!}
						
					</div>
					<div>
						<label>Ảnh</label>
						<img src="{{asset('image/sanpham/'.$dt->image)}}">
						<input  type="file"  name="anh" value="{!! $dt->image !!}" class="form-control">
						
						{!! $errors->first('anh') !!}
						
					</div>
					<div>
						<label>Loai SP</label>
						<select class="form-control" name="loaisp">
							@foreach($data2 as $dt2)
								@if($dt->loai_sp == $dt2->id){
									<option selected="selected">{!! $dt2->tenloai !!}</option>
								}
								@else <option value="{!! $dt2->id !!}">{!! $dt2->tenloai !!}</option>
								@endif
							@endforeach
						</select>
						
						{!! $errors->first('loaisp') !!}
						
                    </div>                     <div>
<label>DVT</label>                         <input  type="text" name="dvt"
value="{!! $dt->dvt !!}" class="form-control">                         <div>
{!! $errors->first('dvt') !!}                         </div>
</div>                     <div>                         <label>Giá
mua</label>                         <input type="text" name="giamua"
value="{!! $dt->giamua !!}" class="form-control">
<div>{!! $errors->first('giamua') !!}</div>                     </div>
<div>                         <label>Giá bán</label>
<input type="text" name="giaban" value="{!! $dt->giaban!!}" class="form-
control">                         <div>{!! $errors->first('giaban') !!}</div>
</div>                       <div>                         <label>Ghi
chú</label>                         <input type="text" name="ghichu"
value="{!! $dt->ghichu !!}" class="form-control">
<div>{!! $errors->first('ghichu') !!}</div>                     </div>
<button type="submit" class="btn btn-info " style="width: 100px;margin-top:
10px;">Lưu</button>                     <button type="" class="btn btn-info "
style="width: 100px;margin-top: 10px;">Reset</button>                     <a
href="{{URL::route('admin.sanpham.getlist')}}" class="btn btn-primary"
style="width: 100px;margin-top: 10px;">Trở về</a>
				
				</form>
			</div>
			<div class="col-md-4"></div>
	@endforeach
		</div>							
	
	
@endsection