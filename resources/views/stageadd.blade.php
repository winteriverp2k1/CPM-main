@extends('header_footer')
@section('content')
    <div class="container-fluid">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h2>Thêm tiến độ xây dựng</h2>
        <form method="POST" action="{{route('stageadd')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="ma form-group">
                <label for="stagename">Tên tiến độ</label>
                <input type="text" name="stagename" id="stagename" class="form-control">
            </div>
            <div class="ma form-group">
                <label for="is_enabled">Hoạt động</label>
                <select name="is_enabled" id="is_enabled" class="form-control">
                    <option value="1">Đang tiến hành</option>
                    <option value="0">Đã ngừng</option>
                </select>
            </div>
            <div class="ma form-group">
                <button style="cursor:pointer" type="submit" class="btn btn-primary">Thêm tiến độ</button>
            </div>
        </form>
    </div>
@stop
