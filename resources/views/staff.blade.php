@extends('header_footer')
@section('content')
    <div class="container-fluid">
        <h2>Danh sách nhân viên</h2>
        <table class="table table-striped">
            <tr>
                <th>Mã nhân viên</th>
                <th>Họ và tên</th>
                <th>Số điện thoại</th>
                <th>Vai trò</th>
                <th>Đơn vị thi công</th>
                <th>Ngày tham gia</th>
                <th>Ảnh đại diện</th>
            </tr>
            
                <tr>
                    <td></td>
                    <td></td>
                    <td></td> 
                    <td class="bar " colspan="3">
                        <a href="#">Sửa</a>
                        <a href="#">Chi tiết</a>
                        <a href="#">Xóa</a>
                    </td>                 
                </tr>

        </table>
    </div>
    <div class="btnadd">
        <a href="#">Thêm thành viên</a>
    </div>
@stop 
