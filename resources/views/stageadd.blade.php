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
        <form method="POST" action="{{route('stageadd')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="stagename">Tên tiến độ</label>
                <input type="text" name="stagename" id="stagename" class="form-control">
            </div>
            <div class="form-group">
                <label for="is_enabled">Hoạt động</label>
                <select name="is_enabled" id="is_enabled" class="form-control">
                    <option value="1">True</option>
                    <option value="0">False</option>
                </select>
            </div>
            <div class="form-group">
                <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@stop