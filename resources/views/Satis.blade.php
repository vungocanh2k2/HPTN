@extends("layout.main")

@section("title", "Thống kê")

@section("content")
<main>
    <div class="head-title">
        <div class="left">
            <h1>Bảng điều khiển</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Bảng điều khiển</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Thống kê</a>
                </li>
            </ul>
        </div>
    </div>
    <canvas id="canvas" height="450" width="700"></canvas>
    <p>Biểu đồ cột</p>
    <canvas id="canvas1" height="450" width="700"></canvas>
    <p>Biểu đồ tròn</p>
</main>
<script src="{{asset('js/chart.js')}}"></script>
@endsection