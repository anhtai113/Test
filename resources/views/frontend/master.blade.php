<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WEBSITE THƯƠNG MẠI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Test Laravel</title>
    <!-- link bootstrap 3 -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- my cript -->
    <script type="text/javascript" src="{{asset('js/myscript.js')}}"></script>
    <!-- rich editor -->
    <script type="text/javascript" src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
    <!-- slideshow -->
    <script type='text/javascript' src="{{asset('js/jquery.mobile.customized.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/jquery.easing.1.3.js')}}"></script> 
    <script type='text/javascript' src="{{asset('js/camera.min.js')}}"></script> 
    <script type="text/javascript" src="{{asset('js/jquery.marquee.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/jquery.marquee.min.js')}}"></script>
</head>
<body>
    <div class="container">
    <!-- header -->
        <div class="row">
            <img src="{{asset('image/banerqt.png')}}" width="100%" height="150px">
        </div>
    <!-- navbar -->    
        <div class="row">
            <ul class="nav nav-pills" style="background:#02040f;padding-top: 7px;">
                <li role="presentation" class="active"><a href="">TRANG CHỦ</a></li>
                <li role="presentation" ><a href="">THỊT</a></li>
                <li role="presentation" ><a href="">THỰC PHẨM</a></li>
                <li role="presentation" ><a href="">HOA QUẢ</a></li>
                <li role="presentation"><a href="">SHOP THỜI TRANG</a></li>
                <li role="presentation"><a href="">TUYỂN DỤNG</a></li>
                <li role="presentation"><a href="">CHÍNH SÁCH</a></li>
                <li>
                    <form  action="" class="navbar-form navbar-left" role="search">
                      <div class="form-group">
                        <input type="text" class="form-control" name="tk" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-default">Tìm kiếm</button>
                    </form>
                </li>
            </ul>
        </div>
    <!-- content -->  
        <!-- content row 1 -->
        <div class="row">
        <!-- slideshow -->
            <div class="col-md-8" style="border: 1px solid; height: 400px; padding: 170px 0px 0px 200px;margin-top: 5px; width:800px;">
                @include('frontend.marquee.slideshow')
            </div>
        <!-- login&singup -->
            <div class="col-md-4" style="border: 1px solid; height: 400px;margin-top: 5px;margin-left: 5px;width: 360px;" >
                @include('frontend.login')
            </div>
            
        </div>
        <!-- content row 2 -->
        <div class="row">
            <h1 style="color:#0000a5; background: #82ff8a;width: 100%;height: 50px;font-size: 30px;padding-left: 300px;padding-top: 5px;">
                THỊT VỪA NGON VỪA NGỌT
            </h1>
            @include('frontend.content.listthit')
        </div>
    <!-- footer -->  
        <div class="row" style="margin-top: 10px;">
            @include('frontend.footer.footer')
        </div>
        
    </div>
</body>
</html>