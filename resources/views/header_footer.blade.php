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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
  </script>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://kit.fontawesome.com/3fa1e2cfae.js" crossorigin="anonymous"></script>
  <base href="{{asset('')}}">
  <link rel="stylesheet" type="text/css" href="style/cpm.css">
  <style type="text/css">
    div {
      font-family: sans-serif;
    }
  </style>

</head>

<body>
  <div class="container-fluid">
    <div class="headnav ">
      <a class="navbar-brand " href="/">
        <img src="images\construction-icon-11.png" alt="logo">
      </a>
      <h1 style="margin-left:25%;" class="banner"><a href="/">Quản lí dự án xây dựng</a></h1>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Brand/logo -->

      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('projlist')}}">Quản lý dự án</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('prouni')}}">Quản lý nhóm thi công</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('proloca')}}">Quản lý địa điểm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('prostaf')}}">Quản lý nhân viên</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('prosta')}}">Quản lý loại tiến độ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Thống kê</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/login">Đăng nhập</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Đăng xuất</a>
        </li>
      </ul>
      <div class="col20">
        <form action="{{ route('search') }}" method="GET">
          <input name="search" type="text" placeholder="Nhập từ khóa" />
          <input type="submit" value="Tìm kiếm" />
        </form>
      </div>

    </nav>
    @yield('content')

  </div>
</body>

<footer id="footer">
  <div class="social-banner">
    <div class="contain-content">
      <span>Các trang mạng xã hội: </span>
      <a href="# " class="social-banner-icon" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
      <a href="# " class="social-banner-icon" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
      <a href="# " class="social-banner-icon" target="_blank"><i class="fa-brands fa-square-youtube"></i></a>
      <a href="# " class="social-banner-icon" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
    </div>
  </div>
  <div class="row">
    <div class="box">
      <div class="col-1-3 ">
        <h4>
          <span><strong>Thông tin </strong></span>
        </h4>
        <ul class="ft">
          <li><a href="#">Giới thiệu</a></li>
          <li><a href="#">Tuyển dụng</a></li>
          <li><a href="#">Đối tác</a></li>
        </ul>
      </div>
    </div>
    <div class="box">
      <div class="col-1-3 ">
        <h4>
          <span><strong>Pháp lý </strong></span>
        </h4>
        <ul class="ft">
          <li><a href="#">Các điều khoản và điều kiện</a></li>
          <li><a href="#">Chính sách bảo mật thông tin</a></li>
          <li><a href="#">Điều kiện sử dụng cookie</a></li>
        </ul>
      </div>
    </div>
    <div class="box">
      <div class="col-1-3 ">
        <h4>
          <span><strong>Hỗ trợ</strong></span>
        </h4>
        <ul class="ft">
          <li><a href="#">Hỏi đáp</a></li>
          <li><a href="#">Chăm sóc khách hàng</a></li>
          <li><a href="#">Góp ý dịch vụ</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="thr">
    <hr>
  </div>
  <div class="footer-copyright">
    @ 2022 Six Boiz Pro IT Dep Trai Copyright. All Rights Reserved.
  </div>
</footer>

</html>