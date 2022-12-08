@extends('header_footer')
@section('content')
<h2>Chỉnh sửa tiến độ xây dựng</h2>
<form method="POST" action="{{ route('updateStage',['id'=> $stage->id])}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="ma form-group">
                <label for="stagename">Tên tiến độ</label>
                <input type="text" name="stagename" id="stagename" class="form-control" value="{{ $stage->name }}">
            </div>
            <div class="ma form-group">
                <label for="is_enabled">Hoạt động</label>
                <select name="is_enabled" id="is_enabled" class="form-control">
                    <option value="1">Đang tiến hành</option>
                    <option value="0">Đã ngừng</option>
                </select>
            </div>
            <div class="ma form-group">
                <button style="cursor:pointer" type="submit" class="btn btn-primary">Xác nhận</button>
            </div>
        </form>
@stop