@extends('projecthome')
@section('content')
<div class="position-relative"><a class="btn btn-primary" href="{{route('projadd')}}" role="button">Thêm dự án</a></div>


<div class="container-fluid">
    <h2>Các dự án</h2>
    <table class="table table-striped">
        <tr>
            <th>Mã dự án</th>
            <th>Tên dự án</th>
            <th>Ngày bắt đầu</th>
            <th>Ngày kết thúc</th>
            <th>Vị trí</th>
            <th>Ngân sách</th>
            <th>Lợi nhuận</th>
            <th>Diện tích</th>
            <th>Trạng thái</th>
            <th>Miêu tả</th>
            <th>Ảnh mô tả</th>
        </tr>
        <?php foreach ($project as $x) { ?>
            <tr>
                <td><?php echo $x['id']; ?></td>
                <td><?php echo $x['name']; ?></td>
                <td><?php echo $x['started_date']; ?></td>
                <td><?php echo $x['end_date']; ?></td>
                <td><?php echo $x->Location->name; ?></td>
                <td><?php echo number_format($x->budget,2) ?></td>
                <td><?php echo number_format($x->profit,2) ?></td>
                <td><?php echo number_format($x->size,2) ?></td>

                <td><?php if ($x->status == -1) {
                        echo "Ngừng";
                    } else if ($x->status == 0) {
                        echo "Đang thực hiện";
                    } else {
                        echo "Đã hoàn thành";
                    }
                    ?></td>
                <td><?php echo $x['description']; ?></td>
                <td><?php echo $x['img']; ?></td>
                <td>
                    <a href="{{route('projedit',['id'=>$x->id])}}">Sửa</a>
                </td>
                <td>
                    <a href="{{route('projdetail',['id'=>$x->id])}}'">Chi tiết</a>
                </td>
                <td>
                    <a href="{{route('projdel',['id'=>$x->id])}}" >Xoá</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
@stop
<script type="text/javascript">
    function confirmation() {
        event.preventDefault()
        return confirm('Bạn có muốn xóa đối tượng này không');
    }
</script>