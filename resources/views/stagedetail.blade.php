@extends('projecthome')
@section('content')
    <div class = "container-fluid">
        <div class="stagedetail">
            Mã tiến độ:  <br>
            Tên dự án: {{$stage->name}} <br>
            Trạng thái: <input type="checkbox" name="is_enabled" value="checked"><br>
        </div>
    </div>
@stop