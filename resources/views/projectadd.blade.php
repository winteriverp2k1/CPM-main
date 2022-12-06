@extends('header_footer')
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
        <h2>Thêm dự án xây dựng</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="form-group col-md-6">
                        <label class="control-label" for="id">Project ID</label>
                        <div >
                            <input id="id" name="id"  placeholder="PROJECT ID" class="input-md  pjadd_input" required="" type="text" disabled>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group col-md-6">
                        <label class="control-label " for="name">Tên dự án</label>
                        <div >
                            <input id="name" name="name" placeholder="" class="input-md  pjadd_input" required="" type="text">
                        </div>
                    </div>
            </div>


            <div class="row">
                      <!-- Text input-->
                <div class="form-group col-md-6">
                    <label class=" control-label" for="budget">Ngân sách</label>
                    <div >
                        <input id="budget" name="budget" placeholder="" class="form-control input-md pjadd_input" required="" type="text">
                    </div>
                </div>
                <!-- Datepicker Basic-->
                <div class="form-group col-md-6">
                    <label  for="started_date">Chọn ngày thực hiện</label>
                    <div >
                        <input data-date-format='yyyy-mm-dd' name="started_date" placeholder="" type="date" id="started_date" class="form-control pjadd_input">
                    </div>
                </div>
            </div>


            <div class="row">
                 <!-- Datepicker Basic-->
                <div class="form-group col-md-6">
                        <label for="end_date">Chọn ngày kết thúc</label>
                        <div>
                            <input data-date-format='yyyy-mm-dd' name="end_date" placeholder="" type="date" id="end_date" class="form-control">
                        </div>           
                </div>
                    <!-- Select Basic -->
                <div class="form-group col-md-6">
                        <label class="control-label" for="locations">Vị trí</label>
                        <div>
                            <select id="locations" name="locations" class="form-control">
                                <?php foreach ($location as $x) { ?>
                                    <option value="<?php echo $x['id']; ?>"><?php echo $x['name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                </div>
  
            </div>
         

            <div class="row">
                <!-- Text input-->
                <div class="form-group  col-md-6">
                    <label class="control-label" for="profit">Danh thu ước tính dự án</label>
                    <div>
                        <input id="profit" name="profit" placeholder="" class="form-control input-md" required="" type="text">
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group  col-md-6">
                    <label class="control-label" for="size">Diện tích</label>
                    <div >
                        <input id="size" name="size" placeholder="" class="form-control input-md" required="" type="text">
                    </div>
                </div>
            </div>




            <div class="row">
                <!-- Select Basic -->
                <div class="form-group  col-md-6">
                    <label class=" control-label" for="status">Trạng thái dự án</label>
                    <div >
                        <select id="status" name="status" class="form-control">
                            <option value="-1">Tạm ngưng</option>
                            <option value="0">Đang thực hiện</option>
                            <option value="1">Hoàn tất</option>
                        </select>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group  col-md-6">
                    <label class="control-label" for="description">Chi tiết dự án</label>
                    <div >
                        <input id="description" name="description" placeholder="" class="form-control input-md" required="" type="text">
                    </div>
                </div>
            </div>




            <div class="row">
                <!-- File Button -->
                <div class="form-group  col-md-12">
                        <label class=" control-label" for="img">Hình dự án:</label>
                        <div >
                            <input type="file" class="form-control" id="fileUpload" name="fileUpload">
                        </div>
                </div>
               

            </div> 
            <div class="row">
                <div class="ma form-group col-md-12" style="margin-left:0px">
                            <button style="cursor:pointer" type="submit" class="btn btn-primary">Thêm</button>
                </div>
            </div> 
        </div>


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