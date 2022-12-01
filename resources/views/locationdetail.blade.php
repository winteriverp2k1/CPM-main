@extends('projecthome')
@section('content')
    <div class = "container-fluid">
        <div class="locationdetail">
            Mã địa điểm: {{$loca->id}} <br>
            Tên địa điểm: {{$loca->name}} <br>
            Chi tiết: <textarea>{{$loca->detail}}</textarea>
        </div>
    </div>
@stop