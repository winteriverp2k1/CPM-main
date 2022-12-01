<!-- Long-->
@extends('projecthome')
@section('content')
    <div class="container-fluid">
        <div class="row">   
            @foreach($location as $l)
            <div class="product col-md-3 col-sm-3 col-lg-3">
                <a href="{{route('locadetail', ['id'=>$l->id])}}">{{$l->name}}</a><br>
            </div>   
            @endforeach              
        </div>
    </div>
@stop 
