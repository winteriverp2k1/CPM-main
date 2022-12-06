@extends('header_footer')
@section('content')
<div class="main-content">
            <h2>Đăng kí thành viên</h2>          
            <form>
             
            <div class="ma form-group">
                <label>Họ và Tên<span> *</span></label>
                <input type="text" placeholder="Nhập họ tên" name="fullname" class="form-control">
            </div>
            <div class="ma form-group">
                <label>Số điện thoại<span> *</span></label>
                <input type="text" placeholder="Nhập số điện thoại" name="number-phone" class="form-control">
            </div>
            <div class="ma form-group">
                <label>Mật khẩu<span> *</span></label>
                <input type="password" placeholder="Nhập mật khẩu" name="pw" class="form-control">
            </div>
            <div class="ma form-group">
                <label>Nhập lại mật khẩu<span> *</span></label>
                <input type="password" placeholder="Nhập lại mật khẩu" name="pw-2" class="form-control">
            </div>
            <div class="ma form-group">
                <label for="img">Ảnh đại diện<span> *</span></label>
                <input type="file" class="form-control" id="fileUpload" name="fileUpload">
            </div>         
            </form>
            <div class="row-content">
              <div class="col-xs-12">
                <hr>
              </div>
            </div>
            <div>
              <label>
                <input class="check-input" type="checkbox" name="agree"> Tôi đã đọc và đồng ý các điều khoản
              </label>
            </div>
            <div class="submit_register">
              <input type="submit" value="Đăng kí">
            </div>
            <div class="login">
              <span>Đã có tài khoản?<a href="/login"> Đăng nhập</a></span>
    
            </div>
          </div>
@stop