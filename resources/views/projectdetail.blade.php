@extends('projecthome')
@section('content')

<div class="container-fluid">
    <div class="projectdetail">
        Mã dự án: {{$project->id}} <br>
        Tên dự án: {{$project->name}} <br>
        Ngày bắt đầu: {{$project->started_date}}<br>
        Ngày kết thúc: {{$project->end_date}} <br>
        Địa điểm: {{$project->location->name}}
        Ngân sách: @php echo number_format($project->budget); @endphp <br>
        Lợi nhuận: @php echo number_format($project->profit); @endphp<br>
        Diện tích: @php echo number_format($project->size); @endphp <br>
        Trạng thái:
        <?php if ($project->status == -1) {
            echo "Ngừng";
        } else if ($project->status == 0) {
            echo "Đang thực hiện";
        } else {
            echo "Đã hoàn thành";
        }
        ?>
        <br>Miêu tả: {{$project->description}}<br>
        <img src="/images/{{$project->img}}" width="150" height="150">
    </div>
</div>
<div class="container container-fluid">
    <h2>Danh sách các tổ thi công thực hiện dự án này</h2>
    <?php foreach ($unit_pj as $x) { ?>
        <h4><?php echo $x->Unit->name; ?> ?></h4>
    <?php } ?>
    <h2>Danh sách các phân đoạn thực hiện dự án này</h2>
    <div>
        @foreach ($stage_pj as $x)
            x - {{ $x->id_stage }} <br />
        @endforeach
    </div>
</div>

<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Thêm giai đoạn
</button>
<br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="add_project_stage" method="POST" action="{{route('projstageadd',['id'=> $project->id])}}">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm giai đoạn</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    {{ csrf_field() }}
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="stage_id">Chọn giai đoạn</label>
                        <div class="col-md-4">
                            <select class="col-xs-4 text-center center" id="stage_id" name="stage_id" class="form-control">
                                <?php foreach ($stage as $x) { ?>
                                    <!-- <option value="<?php echo $x['id']; ?>"><?php echo $x['name']; ?></option> -->
                                    <option value="{{$x->id}}">{{$x->name}}</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button id="submit-from-modal" class="btn" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#unit_modal">
    Thêm nhóm thi công
</button>
<br>
<!-- Modal -->
<div class="modal fade" id="unit_modal" tabindex="-1" role="dialog" aria-labelledby="unit_modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="add_unit_stage" method="POST" action="{{route('projunitadd',['id'=> $project->id])}}">
                <div class="modal-header">
                    <h5 class="modal-title" id="unit_modalLabel">Thêm nhóm thi công</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    {{ csrf_field() }}
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="unit_id">Chọn nhóm thi công</label>
                        <div class="col-md-4">
                            <select class="col-xs-4 text-center center" id="unit_id" name="unit_id" class="form-control">
                                <?php foreach ($unit as $x) { ?>
                                    <!-- <option value="<?php echo $x['id']; ?>"><?php echo $x['name']; ?></option> -->
                                    <option value="{{$x->id}}">{{$x->name}}</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button id="submit-from-modal" class="btn" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop