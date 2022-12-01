@extends('projecthome')
@section('content')
<h2>Create user</h2>
<form method="POST" action="{{ route('updateStage',['id'=> $stage->id])}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="stagename">Tên tiến độ</label>
                <input type="text" name="stagename" id="stagename" class="form-control" value="{{ $stage->name }}">
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
@stop