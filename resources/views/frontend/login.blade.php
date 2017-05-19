<style type="text/css">
	#login{
		padding-top: 50px;
		margin-left: 30px;
	}
	#login label{
		margin-left: 100px;
	}
	#login input{
		width: 250px;
		margin-left: 20px;
	}
	#login button {
		width: 150px;
		margin-top: 10px;
		margin-left: 70px;
	}

</style>

<form action="" method="post" id="login">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="row">
	    <label>Tên Đăng Nhập</label>
	</div>
	 <div class="row">
	    <input type="text" name="tdn" class="form-control">
	</div>
	 <div class="row">
	    <label>Mật Khẩu</label>
	</div>
	 <div class="row">
	    <input type="password" name="matkhau" class="form-control">
	</div>
	<div class="row">
	    <button type="submit" class="btn btn-default">Đăng Nhập</button>
	</div>
</form>