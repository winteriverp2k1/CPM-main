@extends('header_footer')
@section('content')
<div class="container">


    <div class="row">
        <div class="col col-md-4">
            
            <div class="card" style="width:100% ; border:0px">

                <i class="fa-solid fa-house"  style="font-size:100px; margin:20px 0px; color:red"></i>
                    
                <div class="card-body">
                    <h4 class="card-title">Dự án</h4>
                    <p class="card-text">Tổng các dự án đang có là <span>{{$project_count}}</span></p>               
                    <a href="/projectlist" style="background-color:red" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
        </div>
        <div class="col col-md-4">
            
            <div class="card" style="width:100% ; border:0px">

        
                <i class="fa-solid fa-people-group" style="font-size:100px; margin:20px 0px;color: dodgerblue; "></i>
                <div class="card-body">
                    <h4 class="card-title">Nhóm thi công</h4>
                    <p class="card-text">Tổng các nhóm đang thi công là <span>{{$unit_count}}</span></p>
                    <a href="/unit" style="background-Color: dodgerblue;" class="btn btn-primary">Xem chi tiết</a>

                </div>
            </div>
        </div>
        <div class="col col-md-4">
            
            <div class="card" style="width:100% ; border:0px ">

      
                <i class="fa-solid fa-location-dot" style="font-size:100px; margin:20px 0px ;color: darkviolet;"></i>
                <div class="card-body">
                    <h4 class="card-title">Địa điểm</h4>
                    <p class="card-text">Tổng các địa điểm đang thi công là <span>{{$location_count}}</span></p>
                    <a href="/location" style="background-Color: darkviolet;" class="btn btn-primary">Xem chi tiết</a>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
       
        <div class="col col-md-4">
            
            <div class="card" style="width:100% ; border:0px">

         
                <i class="fa-solid fa-list-check" style="font-size:100px; margin:20px 0px ;color: darkgreen;"></i>    
                <div class="card-body">
                    <h4 class="card-title">Tiến độ</h4>
                    <p class="card-text">Số các tiến độ dự án là <span>{{$stage_count}}</span></p>
                    <a href="/stage"style="background-Color: darkgreen;" class="btn btn-primary">Xem chi tiết</a>

                </div>
            </div>
        </div>
        <div class="col col-md-4">
            
            <div class="card" style="width:100% ; border:0px">

            
                <i class="fa-sharp fa-solid fa-square-check" style="font-size:100px; margin:20px 0px;color: lightseagreen;"></i>  
                <div class="card-body">
                    <h4 class="card-title">Hoàn thành</h4>
                    <p class="card-text">Tổng các dự án đã hoàn thành là <span>{{$p_count}}</span></p>
                    <a href="#" style="background-Color: lightseagreen;" class="btn btn-primary">Xem chi tiết</a>

                </div>
            </div>
        </div>
    </div>


          
</div>
<script src="https://kit.fontawesome.com/35bbdc7cce.js" crossorigin="anonymous"></script>

  

@stop