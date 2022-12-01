<!-- Long-->
@extends('trangchu')
@section('content')
<div class="container container-fluid">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{route('insert')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="col-md-4 control-label" for="id">PROJECT ID</label>
            <div class="col-md-4">
                <input id="id" name="id" placeholder="PROJECT ID" class="form-control input-md" required="" type="text" disabled>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">TÊN DỰ ÁN</label>
            <div class="col-md-4">
                <input id="name" name="name" placeholder="PROJECT NAME" class="form-control input-md" required="" type="text">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="budget">NGÂN SÁCH</label>
            <div class="col-md-4">
                <input id="budget" name="budget" placeholder="BUDGET" class="form-control input-md" required="" type="text">

            </div>
        </div>
        <!-- Datepicker Basic-->
        <div class="display: block">
            <label for="started_date">Chọn ngày thực hiện...</label>
            <input data-date-format='yyyy-mm-dd' name="started_date" placeholder="Chọn ngày thực hiện" type="date" id="started_date">

        </div>
        <!-- Datepicker Basic-->
        <div class="display: block">
            <label for="end_date">Chọn ngày kết thúc...</label>
            <input data-date-format='yyyy-mm-dd' name="end_date" placeholder="Chọn ngày kết thúc" type="date" id="end_date">

        </div>
        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="locations">VỊ TRÍ</label>
            <div class="col-md-4">
                <select id="locations" name="locations" class="form-control">
                    <?php foreach ($location as $x) { ?>
                        <option value="<?php echo $x['id']; ?>"><?php echo $x['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="profit">DANH THU ƯỚC TÍNH DỰ ÁN</label>
            <div class="col-md-4">
                <input id="profit" name="profit" placeholder="profit" class="form-control input-md" required="" type="text">
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="size">DIỆN TÍCH</label>
            <div class="col-md-4">
                <input id="size" name="size" placeholder="size" class="form-control input-md" required="" type="text">
            </div>
        </div>
        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="status">TRẠNG THÁI DỰ ÁN</label>
            <div class="col-md-4">
                <select id="status" name="status" class="form-control">
                    <option value="-1">Tạm ngưng</option>
                    <option value="0">Đang thực hiện</option>
                    <option value="1">Hoàn tất</option>
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="description">Chi tiết dự án</label>
            <div class="col-md-4">
                <input id="description" name="description" placeholder="description" class="form-control input-md" required="" type="text">
            </div>
        </div>
        <!-- File Button -->
        <div class="form-group">
            <label for="img">Hình dự án:</label>
            <input type="file" class="form-control" id="fileUpload" name="fileUpload">
        </div>
        <input type="submit" value="Submit">
    </form>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
<script type="text/javascript">
    // Data Picker Initialization
    $('.datepicker').datepicker({
        inline: true
    });
    var start = document.getElementById('started_date');
    var end = document.getElementById('end_date');

    start.addEventListener('change', function() {
        if (start.value)
            end.min = start.value;
    }, false);
    end.addEventLiseter('change', function() {
        if (end.value)
            start.max = end.value;
    }, false);
</script>
@stop