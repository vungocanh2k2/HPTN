<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- CDN Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>



    <title>Trang quản lý của hàng LOVESHOP</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="/home" class="brand">
            <i class='bx bxl-shopify'></i>
            <span class="text">LoveShop</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="/home">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Trang chủ</span>
                </a>
            </li>
            <li class="active">
                <a href="/staff">
                    <i class='bx bxs-user'></i>
                    <span class="text">Quản lý nhân viên</span>
                </a>
            </li>
            <li class="active">
                <a href="/acc">
                    <i class='bx bxs-user-account'></i>
                    <span class="text">Quản lý tài khoản</span>
                </a>
            </li>
            <li class="active">
                <a href="/client">
                    <i class='bx bx-male-female'></i>
                    <span class="text">Quản lý khách hàng</span>
                </a>
            </li>
            <li class="active">
                <a href="/product">
                    <i class='bx bxs-group'></i>
                    <span class="text">Quản lý sản phẩm </span>
                </a>
            </li>
            <li class="active">
                <a href="/supplier">
                    <i class='bx bxs-user-detail'></i>
                    <span class="text">Quản lý nhà cung cấp </span>
                </a>
            </li>
            <li class="active">
                <a href="">
                    <i class='bx bx-money-withdraw'></i>
                    <span class="text">Quản lý hóa đơn </span>
                </a>
            </li>
            <li class="active">
                <a href="#">
                    <i class='bx bx-money-withdraw'></i>
                    <span class="text">Quản lý doanh thu </span>
                </a>
            </li>
            <li class="active">
                <a href="/house">
                    <i class='bx bx-home-alt'></i>
                    <span class="text">Quản lý kho </span>
                </a>
            </li>
            <li class="active">
                <a href="/satis">
                    <i class='bx bx-signal-4'></i>
                    <span class="text">Thống Kê </span>
                </a>
            </li>
            <li class="active">
                <a href="/exportfile">
                    <i class='bx bxs-download'></i>
                    <span class="text">Xuất File</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="/" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav class="menu">
            <i class='bx bx-menu'></i>
            <div class="menu-sub">
                <a href="#" class="notification">
                    <i class='bx bxs-bell'></i>
                    <span class="num">8</span>
                </a>
                <a href="#" class="profile">
                    <img src="{{asset('img/people.png')}}"></script>
                </a>
            </div>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            @yield('content')
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="{{asset('js/script.js')}}"></script>

</body>

</html>