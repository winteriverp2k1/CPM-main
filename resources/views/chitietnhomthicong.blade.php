<!--Long-->
@extends('projecthome')
@section('content')

    <div class="container-fluid">
        <h2>Danh sach</h2>
        <table class="table table-striped">
            <tr>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
            </nav>
            </tr>
            <tr>
                <th>Mục 1</th>
                <th>Mục 2</th>
                <th>Mục 3</th>
                <th>Mục 4</th>
                <th>Mục 5</th>
                <th>Mục 6</th>
            </tr>
            <tr>
                <td>Noi dung Mục 1</td>
                <td>Noi dung Mục 2</td>
                <td>Noi dung Mục 3</td>
                <td>Noi dung Mục 4</td>
                <td>Noi dung Mục 5</td>
                <td>Noi dung Mục 6</td>
                <td><a href="#"> them</a></td>
                <td><a href="#"> sua</a></td>
                <td><a href="#"> xoa</a></td>
            </tr>
        </table>


    </div>


@stop 
