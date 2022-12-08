@extends('header_footer')
@section('content')
    <div class="container-fluid">
        <h2>Danh sách các địa điểm</h2></h2>
        <table class="table table-striped">
            <tr>
                    <th>Mã địa điểm</th>
                    <th>Tên địa điểm</th>
                    <th>Chi tiết</th>
                    <th>Hành động</th>
            </tr>
            @foreach ($location as $l)
                <tr>
                    <td>{{$l->id}}</td>
                    <td>{{$l->name}}</td>
                    <td>{{$l->detail}}</td> 
                    <td class="bar">
                    <a href="{{route('locadel',['id'=>$l->id])}}">Xóa</a>
                    </td>                  
                </tr>
            @endforeach
        </table>
        {{$location->links()}}
    </div>
    <div class="btnadd">
        <a href="{{route('locadd')}}">Thêm địa điểm</a>
    </div>
@stop 
