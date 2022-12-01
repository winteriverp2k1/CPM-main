<!-- Long-->
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>CPM</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
            <!-- Latest compiled JavaScript -->
            <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" >
    </script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css"> 

    <base href="{{asset('')}}">
    <link rel="stylesheet" type="text/css" href="styles/prod_style.css">
    <style type="text/css">
        div {
            border: 1px solid gray;
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <h1 class="banner"> Quản lí dự án xây dựng</h1>
        <!-- Grey with black text -->
       
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="{{route('projlist')}}">Quản lý dự án</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Quản lý nhóm thi công</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Quản lý địa điểm</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Quản lý nhân viên</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Quản lý loại tiến độ</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Thống kê</a>
            </li>


            <li style="margin-left:100px">
                <a class="navbar-brand" href="#">
                    <img src="bird.jpg" alt="logo" style="width:40px;">
                </a>

            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Dang nhap</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Dang xuat</a>
            </li>
        </ul>


        <!--User-->
  
        </nav>
        <hr> @yield('content')<hr>       
        <p class="fooer"> BT nhóm
        </p>
     
    </div>
</body>

</html>