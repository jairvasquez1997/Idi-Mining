<!doctype html>
<html lang="en">
<!-- Mirrored from thememakker.com/templates/lucid/html/light/page-forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Aug 2018 14:09:01 GMT -->
<head>
    <title>:: Lucid :: Forgot Password</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Desarrollado por www.pyrusstudio.com - www.pyrushd.com">

    <link rel="icon" href="{{asset('admin\assets\images\favicon.ico')}}" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/color_skins.css')}}">
</head>

<body class="theme-cyan">
<!-- WRAPPER -->
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle auth-main">
            <div class="auth-box">
                <div class="top">
                    <img src="{{asset('admin\assets\images\LOGO.png')}}" alt="Lucid">
                </div>
                <div class="card">
                    <div class="header">
                        <p class="lead">Restablecer mi contraseña</p>
                    </div>
                    <div class="body">
                        <p>Ingrese tu dirección de correo electrónico que utilizo cuando se registro en la Web
                            ChickenKing.</p>
                        <p>Le enviaremos a su correo electrónico un enlace para restablecer su contraseña.</p>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-auth-small"
                              action="{{ route('password.email') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       placeholder="Correo Electronico*"
                                       name="email"
                                       value="{{ old('email') }}"
                                       required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">ENVIAR</button>
                        </form>
                        <div class="bottom">
                            <span class="helper-text">¿Conoce su contraseña?
                                <a href="{{ route('administrador') }}">Login</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->
</body>
<!-- Mirrored from thememakker.com/templates/lucid/html/light/page-forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Aug 2018 14:09:01 GMT -->
</html>