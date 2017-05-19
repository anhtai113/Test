<style type="text/css">
	
	#showroom:hover{
		border:3px solid #d6d6ff;
		border-style: outset;
	}
	#showroom img{
		/*margin-left: 5px;*/
		width: 280px;
		height: 300px;
	}
	#showroom .tensp{
		margin-left: 50px;
		font-size: 30px;
		color: green;
	}
</style>
@foreach($heo as $heo)
<div class="col-md-12">
	<div class="row" id="thit">
		<div class="col-md-3" id="showroom">
			<div class="row">
				<img src="{{asset('image/sanpham/'.$heo->image)}}" >
			</div>
			<div class="row tensp">
				{!! $heo->ten_sp !!}
			</div>
			<div class="row gia">
				<div class="col-md-8">
					<div><a style="font-size: 20px;">Giá </a>: &nbsp<a style="font-size:20px;color: red;">{!! $heo->giaban !!} VND</a></div>
				</div>
				<div class="col-md-4">
					<button  style="width:80px;height: 40px;font-size: 30px;padding-bottom:10px;margin-bottom: 5px;margin-left: -10px;">Mua</button>
				</div>
			</div>
		</div>
		<div class="col-md-3" id="showroom">
			<div class="row">
				<img src="{{asset('image/sanpham/'.$heo->image)}}" >
			</div>
			<div class="row tensp">
				{!! $heo->ten_sp !!}
			</div>
			<div class="row gia">
				<div class="col-md-8">
					<div><a style="font-size: 20px;">Giá </a>: &nbsp<a style="font-size:20px;color: red;">{!! $heo->giaban !!} VND</a></div>
				</div>
				<div class="col-md-4">
					<button  style="width:80px;height: 40px;font-size: 30px;padding-bottom:10px;margin-bottom: 5px;margin-left: -10px;">Mua</button>
				</div>
			</div>
		</div>
		<div class="col-md-3" id="showroom">
			<div class="row">
				<img src="{{asset('image/sanpham/'.$heo->image)}}" >
			</div>
			<div class="row tensp">
				{!! $heo->ten_sp !!}
			</div>
			<div class="row gia">
				<div class="col-md-8">
					<div><a style="font-size: 20px;">Giá </a>: &nbsp<a style="font-size:20px;color: red;">{!! $heo->giaban !!} VND</a></div>
				</div>
				<div class="col-md-4">
					<button  style="width:80px;height: 40px;font-size: 30px;padding-bottom:10px;margin-bottom: 5px;margin-left: -10px;">Mua</button>
				</div>
			</div>
		</div>
		<div class="col-md-3" id="showroom">
			<div class="row">
				<img src="{{asset('image/sanpham/'.$heo->image)}}" >
			</div>
			<div class="row tensp">
				{!! $heo->ten_sp !!}
			</div>
			<div class="row gia">
				<div class="col-md-8">
					<div><a style="font-size: 20px;">Giá </a>: &nbsp<a style="font-size:20px;color: red;">{!! $heo->giaban !!} VND</a></div>
				</div>
				<div class="col-md-4">
					<button  style="width:80px;height: 40px;font-size: 30px;padding-bottom:10px;margin-bottom: 5px;margin-left: -10px;">Mua</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach