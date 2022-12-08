@extends('header_footer')
@section('content')
<h2>Chỉnh sửa nhóm thi công</h2>
<form method="POST" action="{{ route('updateUnit',['id'=> $unit->id])}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="ma form-group">
            <label for="unitname">Tên nhóm thi công</label>
            <input type="text" name="unitname" id="unitname" class="form-control" value="{{ $unit->name }}">
        </div>
        <div class="ma form-group">
            <label for="created_date">Ngày tạo</label>
            <input type="date" name="created_date" placeholder="dd-mm-yyyy" id="created_date" class="form-control">
            </select>
            </div>
        <div class="ma form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Xác nhận</button>
        </div>
</form>
@stop