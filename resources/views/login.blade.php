@extends('header_footer')
@section('content')

<div class="container mt-3">
        <h2>Đăng nhập</h2>
        <form action="{{route('login')}}" method="POST">
          @csrf
          <div class="ma mb-3 mt-3">
            <label class="email"><i class="fa fa-envelope"></i>Email<span>*</span></label>
            <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email">
          </div>
          <div class="ma mb-3">
            <label class="pw"><i class="fa fa-unlock-alt"></i>Password<span>*</span></label>
            <input type="password" class="form-control" id="pw" placeholder="Nhập mật khẩu "  name="password">
            
          </div>
          <div class=" ma form-check mb-3">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember"> Nhớ tài khoản
            </label>
          </div>
          <div class="submit_login mt-3">
            <input type="submit" value="Đăng nhập">
          </div>
    
          <div class="forgot-create">
            <h6>
              <a href="#">Quên mật khẩu</a>
            </h6>
            <h6>
              <a  href="/register">Tạo tài khoản mới</a>
            </h6>
          </div>
          
        </form>
        <div class="sign-up"> <h2>or</h2> </div> 
        <div class="social_login">
          <div class="icon_social">
            <a href="#"><i class="fab sm fa-facebook-square"></i></a>
            <a href="#"><i class="fab sm fa-twitter"></i></a>     
          </div>
        </div>
      </div>
@stop 