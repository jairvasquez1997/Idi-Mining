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
                        <form class="form-auth-small"
                              action="{{ route('password.request') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group">
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       placeholder="Correo Electronico*"
                                       name="email"
                                       value="{{ $email }}"
                                       required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       placeholder="Nueva Contraseña*"
                                       name="password"
                                       required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input id="password-confirm"
                                       type="password"
                                       class="form-control"
                                       placeholder="Confirmar Contraseña*"
                                       name="password_confirmation" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                RESTABLECER CONTRASEÑA
                            </button>
                        </form>
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