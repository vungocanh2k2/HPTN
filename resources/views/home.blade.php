@extends("layout.main")

@section("title", "Home")

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
                    <a class="active" href="#">Trang chủ</a>
                </li>
            </ul>
        </div>
    </div>
    <ul class="box-info">
        <li>
            <i class='bx bx-user-circle'></i>
            <span class="text">
                <h3>1020</h3>
                <p>Số khách hàng</p>
            </span>
        </li>
        <li>
            <i class='bx bx-cart'></i>
            <span class="text">
                <h3>2834</h3>
                <p>Đơn hàng</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-calendar-check'></i>
            <span class="text">
                <h3>1020</h3>
                <p>Số sản phẩm đã bán</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-dollar-circle'></i>
            <span class="text">
                <h3>2543000</h3>
                <p>Tổng số tiền</p>
            </span>
        </li>
    </ul>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Danh sách sản phẩm</h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hình Ảnh</th>
                        <th>Tên</th>
                        <th>Số tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img src="{{asset('img/people.png')}}"></td>
                        <td>vũ Ngọc Anh</td>
                        <td>234566</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img src="{{asset('img/people.png')}}"></td>
                        <td>vũ Ngọc Anh</td>
                        <td>234566</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img src="{{asset('img/people.png')}}"></td>
                        <td>vũ Ngọc Anh</td>
                        <td>234566</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><img src="{{asset('img/people.png')}}"></td>
                        <td>vũ Ngọc Anh</td>
                        <td>234566</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><img src="{{asset('img/people.png')}}"></td>
                        <td>vũ Ngọc Anh</td>
                        <td>234566</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="todo">
            <div class="head">
                <h3>Sản phẩm</h3>
            </div>
            <ul class="todo-list">
                <li class="completed">
                    <p>Bánh sinh nhật</p>
                    <p>20</p>
                </li>
                <li class="not-completed">
                    <p>Hoa</p>
                    <p>20</p>
                </li>
                <li class="completed">
                    <p>Quần Áo</p>
                    <p>20</p>
                </li>
                <li class="not-completed">
                    <p>Trang sức</p>
                    <p>20</p>
                </li>
                <li class="completed">
                    <p>Giầy dép</p>
                    <p>20</p>
                </li>
            </ul>
        </div>
    </div>
</main>
@endsection