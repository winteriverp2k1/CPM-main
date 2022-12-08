@extends('header_footer')
@section('content')
    <div class="container-fluid">
        <h2>Danh sách nhóm thi công</h2>
        <table class="table table-striped">
            <tr>
                <th>Mã nhóm thi công</th>
                <th>Tên nhóm thi công</th>
                <th>Ngày tạo</th>
                <th colspan="3">Hành động</th>
            </tr>      
            @foreach ($unit as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->created_date}}</td>
                <td class="bar " colspan="2">
                    <a href="{{route('unitupdate',['id'=>$u->id]) }}">Sửa</a>
                    <a href="{{route('unitdet',['id'=>$u->id])}}">Chi tiết</a>
                    <a href="{{route('unitdel',['id'=>$u->id])}}">Xóa</a>
                </td>
            </tr>
            @endforeach
        </table>
        {{$unit->links()}}
    </div>
    <div class="btnadd">
        <a href="{{route('unitad')}}">Thêm đơn vị thi công</a>
    </div>
@stop 
