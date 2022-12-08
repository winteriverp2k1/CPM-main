@extends('header_footer')
@section('content')
<h2>Chi tiết dự án</h2>
    <div class = "container-fluid">
        <div class="projectdetail">
            <div class="headnav">
                <img src="/images/{{$project->img}}" width="300" height="380" >
                <div class="media-body">
                    <ul class = "list-group">
                        <li class="list-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="fo"><span>Mã dự án</span>: <b>{{$project->id}}</b></p>
                                </div>
                                <div class="col-md-6">
                                    <p class="fo"><span>Tên dự án</span>: <b>{{$project->name}}</b></p>
                                </div>
                            </div:>
                        </li>
                        <li class="list-item">
                            <div class="row">
                                <div class="col-md-6">
                                <p class="fo"><span>Ngày bắt đầu</span>: <b>{{$project->started_date}}</b></p>
                                </div>
                                <div class="col-md-6">
                                <p class="fo"><span>Ngày kết thúc</span>: <b>{{$project->end_date}}</b></p>
                                </div>
                            </div:>
                        </li>
                        <li class="list-item">
                            <div class="row">
                                <div class="col-md-6">
                                <p class="fo"><span>Địa điểm</span>: <b>{{$project->location->name}}</b></p>
                                </div>
                                <div class="col-md-6">
                                <p class="fo"><span>Ngân sách</span>: <b>@php echo number_format($project->budget); @endphp</b></p>
                                </div>
                            </div:>
                        </li>
                        <li class="list-item">
                            <div class="row">
                                <div class="col-md-6">
                                <p class="fo"><span>Lợi nhuận</span>: <b>@php echo number_format($project->profit); @endphp</b></p>
                                </div>
                                <div class="col-md-6">
                                <p class="fo"><span>Diện tích</span>: <b>@php echo number_format($project->size); @endphp</b></p>
                                </div>
                            </div:>
                        </li>
                        <li class="list-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="fo"><span>Trạng thái</span>: 
                                        <b><?php if($project->status == -1)
                                        {
                                            echo "Ngừng";
                                        } else if($project->status == 0)
                                        {
                                            echo "Đang thực hiện";
                                        }
                                        else 
                                        {
                                            echo "Đã hoàn thành";
                                        }
                                        ?>
                                        </b>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                <p class="fo"><span>Miêu tả</span>: <b>{{$project->description}}</b></p>
                                </div>
                            </div:>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container container-fluid">
    <h2>Danh sách các tổ thi công thực hiện dự án này</h2>
    <h2>Danh sách các phân đoạn thực hiện dự án này</h2>    
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
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="status">Trạng thái</label>
                        <div class="col-md-4">
                            <select class="col-xs-4 text-center center" id="status" name="status" class="form-control">
                                <option value="-1">Chưa hoàn tất</option>
                                <option value="0">Đang thực hiện</option>
                                <option value="1">Đã hoàn tất</option>
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