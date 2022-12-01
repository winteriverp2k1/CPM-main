@extends('projecthome')
@section('content')
    <div class = "container-fluid">
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
            <?php if($project->status == -1)
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
            <br>Miêu tả: {{$project->description}}<br>
            <img src="/images/{{$project->img}}" width="150" height="150">
        </div>
    </div>
    <div class="container container-fluid">
        <h2>Danh sách các tổ thi công thực hiện dự án này</h2>
        <?php foreach ($unit as $x) { ?>
            <h4><?php echo $x->Unit->name; ?> ?></h4>
        <?php } ?>
        <h2>Danh sách các phân đoạn thực hiện dự án này</h2>
        <?php foreach ($stage as $x) { ?>
            <h4><?php echo $x->Stage->name; ?> ?></h4>
        <?php } ?>
    </div>
@stop