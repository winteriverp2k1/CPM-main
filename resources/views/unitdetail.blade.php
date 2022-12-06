@extends('header_footer')
@section('content')
    <div class = "container-fluid">
        <div class="unitdetail">
            Mã nhóm thi công: {{$unit -> id}}<br>
            Tên nhóm thi công: {{$unit -> name}}<br>
            Ngày tạo: @php echo date("d/m/Y", $unit->created_date); @endphp <br>
        </div>
    </div>
@stop