<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mật khẩu</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
</head>

<body>
    <!-- Form without bootstrap -->
    <div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">
                        LoveShop
                    </h2>
                    <form class="login-form">
                        <input type="text" class="auth-form-input" placeholder="Nhập mã OTP">
                        <div class="input-icon">
                            <input type="password" class="auth-form-input" placeholder="Mật Khẩu Mới">
                            <i class="fa fa-eye show-password"></i>
                        </div>
                        <div class="footer-action">
                            <input type="submit" value="ĐỔI MẬT KHẨU" class="auth-submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="auth-action-right">
                <div class="auth-image">
                    <img src="{{asset('img/vector.jpg')}}" alt="login">
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/common.js')}}"></script>
</body>

</html>