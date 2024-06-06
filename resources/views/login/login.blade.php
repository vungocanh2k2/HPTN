<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
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
                        <input type="email" class="auth-form-input" placeholder="Email">
                        <div class="input-icon">
                            <input type="password" class="auth-form-input" placeholder="Password">
                            <i class="fa fa-eye show-password"></i>
                        </div>
                        <label class="btn active">
                            <input type="checkbox" name='email1' checked>
                            <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i>
                            <span> Nhớ mật khẩu.</span>
                        </label>
                        <div class="footer-action">
                            <input type="submit" value="Đăng nhập" class="auth-submit">
                        </div>
                    </form>
                    <div class="auth-forgot-password">
                        <a href="getotp.html">Quên Mật Khẩu ??</a>
                    </div>
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