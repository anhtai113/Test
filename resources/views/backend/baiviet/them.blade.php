@extends('backend.master')
@section('content')

<div class="row">
<h1  style="background: #61F716; font-size: 30px solid #FC5B0A; padding-left: 20px;padding-top: 5px; border-radius: 10px;
width: 500px; height: 50px;margin-top: -8px;">
	Thêm bài viết
</h1>
</div>
<div class="row">
	<div class="col-md-2">
		<a href="{{URL::route('admin.baiviet.getlist')}}" style="font-size: 30px; text-decoration: none; ">Trở về</a>
	</div>
	<div class="col-md-6">
		<form action="{{URL::route('admin.baiviet.postadd')}}" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
			<div class="row form-group">
				<label>Người viết</label>
				<select class="form-control" name="name">
					@foreach($data as $dt)
						<option value="{!! $dt->id !!}">{!! $dt->name !!}</option>
					@endforeach
				</select>
				{!!$errors->first('name')!!}
			</div>
			<div class="row form-group">
				<label>Tiêu đề</label>
				<input  type="text" name="tieude" placeholder="Nhập tiêu đề" class="form-control">
				{!!$errors->first('tieude')!!}
			</div>
			<div class="row form-group">
				<label>Nội dung</label>
				<textarea class="form-control" rows="5"  name="noidung"  placeholder="Mô tả...">{!! old('ghichu') !!}</textarea>
                <script type="text/javascript">CKEDITOR.replace('noidung'); </script>
				{!!$errors->first('noidung')!!}
			</div>
			<div class="row form-group">
				<label>Ảnh</label>
				<input type="file" name="anh" class="form-control">
				{!!$errors->first('anh')!!}
			</div>
			<div class="row form-group">
				<label>Ghi chú</label>
				<textarea class="form-control" rows="5"  name="ghichu"  placeholder="Mô tả...">{!! old('ghichu') !!}</textarea>
                <script type="text/javascript">CKEDITOR.replace('ghichu'); </script>
				{!!$errors->first('ghichu')!!}
			</div>
			
			<button type="submit" class="btn btn-primary">THÊM</button>
			<button class="btn btn-primary">Reset</button>
		</form>
	</div>
	<div class="col-md-4"></div>
</div>
@endsection