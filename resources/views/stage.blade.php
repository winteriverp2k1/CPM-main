<!-- Long-->
@extends('projecthome')
@section('content')
<div class="container-fluid">
        <h2>Danh sách tiến độ</h2>
        <a>
        <table class="table table-striped">
            <tr>
                <th>Mã tiến độ</th>
                <th>Tên tiến độ</th>
                <th>Hoạt động</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($stage as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->name }}</td>
                <td>@php if($s->is_enabled == 1)
                    echo "True";
                    else echo "False";
                     @endphp</td>
                <td><a href="{{ route('stageupdate',['id'=>$s->id]) }}">Sửa</a></td>
                <td><a href="{{ route('stagedel',['id'=>$s->id]) }}">Xóa</a></td>
            </tr>
            @endforeach
        </table>
    </div>
@stop 