<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themedesigner.in/demo/admin-press/main/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2017 19:52:57 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Desarrollado por www.pyrusstudio.com - www.pyrushd.com">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>REGISTRAR | CHICKENGKING</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('admin/css/colors/blue.css') }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url({{ asset('admin/images/background/login-register.jpg') }});">
            <div class="login-box card">
                <div class="card-body">
                    {!! Form::open(['route' => 'registrar-store','method'=>'POST','class'=>'form-horizontal form-material','id'=>'formulario']) !!} 
                    
                        {{ csrf_field() }}
                        <h3 class="box-title m-b-20">Regístrate</h3>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" name="username" required="" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="nombres" required="" placeholder="Nombres">
                            </div>



                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="apellidos" required="" placeholder="Apellidos">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" id="password" name="password" required="" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" id="confipass" required="" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-success p-t-0 p-l-10">
                                    <input id="checkbox-signup" type="checkbox" required="" >
                                    <label for="checkbox-signup"> Estoy de acuerdocon todos los 
                                        <a href="#">Términos</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" onclick="verificar()">Regístrate</button>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                <p>Ya tienes cuenta
                                    <a href="{{route('administrador')}}" class="text-info m-l-5">
                                        <b>Inicia Sesión </b>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('admin/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('admin/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('admin/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('admin/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
    <script>
        function verificar(){
            if ($('#password').val()!='' && $('#confipass').val()!='') {
                
            
            if ($('#password').val() === $('#confipass').val()) {
                document.forms["formulario"].submit();
            }else{
                alert('Contraseñas no coinciden');
            }
        }
        }
    </script>
</body>


<!-- Mirrored from themedesigner.in/demo/admin-press/main/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2017 19:48:35 GMT -->

</html>