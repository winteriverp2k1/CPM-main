@extends('projecthome')
@section('content')
    <div class = "container-fluid">
        <div class="staffdetail">
            Mã nhân viên:  <br>
            Họ tên:  <br>
            Ngày tham gia: @php echo date("d/m/Y", $stf->join_date); @endphp <br>
            Số điện thoại:  <br>
            Chức vụ:
            Mã đơn vị thi công: 
            Ảnh đại diện: <img src="images/{{$stf->avatar}}">
            Tên tài khoản:  <br>
            Mật khẩu: <input type="password" name="password" minlength="8"><br>
        </div>
    </div>
@stop