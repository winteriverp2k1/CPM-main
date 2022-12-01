@extends('projecthome')
@section('content')
<form method="POST" action="{{ route('update',['id'=> $unit->id])}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="unitname">Tên nhóm thi công</label>
            <input type="text" name="unitname" id="unitname" class="form-control" value="{{ $unit->name }}">
        </div>
            <div class="form-group">
                <label for="created_date">Ngày tạo</label>
                <input type="date" name="created_date" id="created_date" class="form-control">
                </select>
            </div>
            <div class="form-group">
                <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
@stop