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
        <h2>Thêm nhóm thi công</h2>
        <form method="POST" action="{{route('unitadd')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="ma form-group">
                <label class="lab" for="unitname">Tên nhóm thi công</label>
                <input type="text" name="unitname" id="unitname" class="form-control">
            </div>
            <div class="ma form-group">
                <label class="lab" class="lab" for="created_date">Ngày tạo</label>
                <input type="date" name="created_date" id="created_date" class="form-control">
            </div>
            <div class="ma form-group">
                <button style="cursor:pointer" type="submit" class="btn btn-primary">Xác nhận</button>
            </div>
        </form>
    </div>
@stop