<!-- Long-->
@extends('projecthome')
@section('content')
    <div class="container-fluid">
        <h2>Danh sách nhóm thi công</h2>
        <a>
        <table class="table table-striped">
            <tr>
                <th>Mã nhóm thi công</th>
                <th>Tên nhóm thi công</th>
                <th>Ngày tạo</th>
                <th></th>
                <th></th>
            </tr>      
            @foreach ($unit as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->created_date}}</td>
                <td><a href="{{route('unitupdate',['id'=>$u->id]) }}">Sửa</a></td>
                <td><a href="{{route('unitdel',['id'=>$u->id])}}">Xóa</a></td>
            </tr>
            @endforeach
        </table>
    </div>
@stop 
