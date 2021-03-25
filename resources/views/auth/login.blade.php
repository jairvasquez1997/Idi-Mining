<!doctype html>
<html lang="es">


<!-- Mirrored from thememakker.com/templates/lucid/html/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Aug 2018 14:07:52 GMT -->
<head>
    <title>IDI-MINING | Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Desarrollado por www.pyrusstudio.com - www.pyrushd.com">

    <link rel="icon" href="{{asset('admin\images\favicon.ico')}}" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/color_skins.css')}}">
</head>

<body class="theme-green">
<!-- WRAPPER -->
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle auth-main">
            <div class="auth-box">
                <div class="top">
                    <img src="{{asset('admin\images\LOGO.png')}}" alt="Lucid">
                </div>
                <div class="card">
                    <div class="header">
                        <p class="lead">Ingrese a su cuenta</p>
                    </div>
                    <div class="body">
                        <form class="form-auth-small" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input type="text" class="form-control" id="signin-email" name="username"
                                       placeholder="Usuario" value="{{ old('username') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input type="password" class="form-control" id="signin-password" name="password"
                                       placeholder="Password">
                            </div>
                            <div class="form-group clearfix">
                                <label class="fancy-checkbox element-left">
                                    <input type="checkbox">
                                    <span>Recuérdame</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">INICIAR SESIÓN</button>
                            <div class="bottom">
                                <span>COPYRIGHT 2007 - 2020</span><br>
                                <span>&copy; MARCA Y PERSONAJES REGISTRADOS</span>
                            </div>
                            <!--<div class="bottom">
                                <span class="helper-text m-b-10"><i class="fa fa-lock"></i>
                                    <a href=""> ¿Se te olvidó tu contraseña?</a>
                                </span>
                               {{--<span>No tienes una cuenta?<a href="{{ route('login-user') }}"> Registro</a></span>--}}
                            </div>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->
</body>

<!-- Mirrored from thememakker.com/templates/lucid/html/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Aug 2018 14:07:52 GMT -->
</html>
