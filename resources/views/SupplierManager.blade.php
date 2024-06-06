@extends("layout.main")

@section("title", "Quản lý nhà cung cấp")

@section("content")
<!-- MAIN -->
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
                    <a class="active" href="#">Quản lý nhà cung cấp</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="table-data">
        <div class="order">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Họ và tên</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>vũ ngọc anh</td>
                        <td>0123456</td>
                        <td>thái bình</td>
                        <td>
                            <form action="">
                                <a href="" i class='bx bxs-message-square-add'></i>Thêm</a>
                                <a href="" i class='bx bx-edit-alt'></i>Sửa</a>
                                <a href="" i class='bx bxs-eraser'></i>Xóa</a>
                                <a href="" i class='bx bx-low-vision'></i>Xem</a>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>vũ ngọc anh</td>
                        <td>0123456</td>
                        <td>thái bình</td>
                        <td>
                            <form action="">
                                <a href="" i class='bx bxs-message-square-add'></i>Thêm</a>
                                <a href="" i class='bx bx-edit-alt'></i>Sửa</a>
                                <a href="" i class='bx bxs-eraser'></i>Xóa</a>
                                <a href="" i class='bx bx-low-vision'></i>Xem</a>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>vũ ngọc anh</td>
                        <td>0123456</td>
                        <td>thái bình</td>
                        <td>
                            <form action="">
                                <a href="" i class='bx bxs-message-square-add'></i>Thêm</a>
                                <a href="" i class='bx bx-edit-alt'></i>Sửa</a>
                                <a href="" i class='bx bxs-eraser'></i>Xóa</a>
                                <a href="" i class='bx bx-low-vision'></i>Xem</a>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>vũ ngọc anh</td>
                        <td>0123456</td>
                        <td>thái bình</td>
                        <td>
                            <form action="">
                                <a href="" i class='bx bxs-message-square-add'></i>Thêm</a>
                                <a href="" i class='bx bx-edit-alt'></i>Sửa</a>
                                <a href="" i class='bx bxs-eraser'></i>Xóa</a>
                                <a href="" i class='bx bx-low-vision'></i>Xem</a>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
</main>
@endsection