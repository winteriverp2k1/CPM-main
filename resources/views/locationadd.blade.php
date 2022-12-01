@extends('projecthome')
@section('content')
    <div class="container-fluid">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li> 
            @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{route('locaadd')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="locaname">Tên địa điểm</label>
                <input type="text" name = "locaname" id="locaname" class="form-control">
            </div>
            <div class="form-group">
                <label for="locadetail">Chi tiết địa điểm</label>
                <input type="text" name = "locadetail" id="locadetail" class="form-control">
            </div>
            <div class="form-group">
                <button style="cursor:pointer" type="submit" class="btn btn-primary">Thêm

                </button>
            </div>
        </form>
    </div>
@stop