@extends('backend.master')
@section('content')
	<div class="row">
		<h1 style="background: #61F716; font-size: 30px solid #FC5B0A;border-radius: 5px; width: 700px;
		height: 50px;margin: -8px 0px 0px 80px;padding-left: 60px; padding-top: 3px;">
		Form chỉnh sửa bài viết
	</h1>
	</div>
	@foreach($data as $dt)
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-6">
				<form action="{{URL::route('admin.baiviet.postedit',$dt->id)}}" method="post" enctype="multipart/form-data">
				 <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
				
					<div class="form-group">
						<label>Người viết</label>
						<select class="form-control" name="name">
							@foreach($data2 as $dt2)
							@if($dt->id_user == $dt2->id)
								<option  selected="selected"value="{!! $dt2->id !!}">{!! $dt2->name !!}</option>
							@else
								<option value="{!! $dt2->id !!}">{!! $dt2->name !!}</option>
							@endif
						@endforeach

						</select>
						
							{!! $errors->first('name') !!}
						
					</div>
					<div>
						<label>Tiêu đề</label>
						<input  type="text" name="tieude"  value="{!! $dt->tieude !!}" class="form-control">
						<div>
							{!! $errors->first('tieude') !!}
						</div>
					</div>
					<div>
						<label>Nội dung</label>
						<textarea  class="form-control" name="noidung" rows="5" placeholder="hãy viết gì đó đi....">{!! $dt->noidung !!}</textarea>
						<script type="text/javascript">CKEDITOR.replace('noidung');</script>
							{!! $errors->first('noidung') !!}
						
					</div>
					<div>
						<label>Ảnh</label>
						<img src="{{asset('image/baiviet/'.$dt->image)}}" style="width: 50px; height: 50px; border-radius: 5px;">
						<input  type="file" name="anh"  class="form-control">
						<div>
							{!! $errors->first('anh') !!}
						</div>
					</div>
					<div>
						<label>Ghi chú</label>
						<textarea rows="5" placeholder="Hãy viết ghi chú ...." name="ghichu" class="form-control">{!! $dt->ghichu !!}</textarea>
						<script type="text/javascript">CKEDITOR.replace('ghichu');</script>
							{!! $errors->first('ghichu') !!}
						
					</div>
					
					
					<button type="submit" class="btn btn-info " style="width: 100px;margin-top: 10px;">Lưu</button>
					<button type="" class="btn btn-info " style="width: 100px;margin-top: 10px;">Reset</button>
					<a href="{{URL::route('admin.baiviet.getlist')}}" class="btn btn-primary" style="width: 100px;margin-top: 10px;">Trở về</a>
				
				</form>
			</div>
			<div class="col-md-4"></div>
	@endforeach
		</div>							
	
	
@endsection