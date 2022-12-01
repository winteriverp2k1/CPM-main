@extends('trangchu')
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
        <form method="POST" action="{{route('unitadd')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="unitname">Tên nhóm thi công</label>
                <input type="text" name="unitname" id="unitname" class="form-control">
            </div>
            <div class="form-group">
                <label for="created_date">Ngày tạo</label>
                <input type="date" name="created_date" id="created_date" class="form-control">
            </div>
            <div class="form-group">
                <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@stop