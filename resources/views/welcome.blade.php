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
            <ul class="nav nav-pills" style="background:#02040f;">
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
        <div class="row">
        <!-- slideshow -->
            <div class="col-md-8">
               @yield('slideshow')
            </div>
        <!-- login&singup -->
            <div class="col-md-4">
                
            </div>
            
        </div>
    <!-- footer -->  
        <div class="row">
            
        </div>
        
    </div>
</body>
</html>