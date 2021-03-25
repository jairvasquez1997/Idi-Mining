
.<!doctype html>
<html lang="en">


<!-- Mirrored from thememakker.com/templates/lucid/html/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Aug 2018 14:06:30 GMT -->
<head>
    <title>Administrador | IDI-MINING</title>
    <meta charset="utf-8">
    <meta name="description" content="Desarrollado por www.pyrusstudio.com - www.pyrushd.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="icon" href="{{asset('admin\images\favicon.ico')}}" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/2.6.95/css/materialdesignicons.css"
          media="all" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="{{asset('admin/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/toastr/toastr.min.css')}}"> 
    
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/color_skins.css')}}">
    <link rel="stylesheet" href="{{asset('admin/sweetalert2.min.css')}}">
    <link href="{{asset('admin/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css">
    @yield('styles')


</head>
<body class="theme-green">

<!-- Page Loader -->
<div class="page-loader-wrapper" style=" background: #062d45">
    <div class="loader">
        <div class="m-t-30"><img src="{{asset('admin\images\cargando.png')}}"
                                 width="48" height="48" alt="PyrusHD"></div>
        <p>Cargando...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

    @include('admin.header')

    @include('admin.menu')

    <div id="main-content">
        <div class="container-fluid">
            @yield('titulo')

            @yield('content')


        </div>
    </div>

</div>

<!-- Javascript -->
@routes
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="142911585732970"
  theme_color="#51BD72"
  logged_in_greeting="Cualquier consulta escríbanos al Soporte Técnico de PYRUS."
  logged_out_greeting="Cualquier consulta escríbanos al Soporte Técnico de PYRUS.">
      </div>
<script src="{{asset('admin/bundles/libscripts.bundle.js')}}"></script>


<script src="{{asset('admin/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{asset('admin/bundles/chartist.bundle.js')}}"></script>
<script src="{{asset('admin/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob-->
<script src="{{asset('admin/vendor/toastr/toastr.js')}}"></script>

<script src="{{asset('admin/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('admin/sweetalert2.min.js')}} "></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script src="{{asset('admin/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('admin/dataTables.responsive.min.js')}}"></script>
{{--<script src="https://js.pusher.com/4.1/pusher.min.js"></script>--}}
<script>
    $(document).ready(function () {


        $('#basic-datatable').DataTable({
            language: {
                paginate: {
                    next: 'Siguiente',
                    previous: 'Anterior'
                }
            }
        });
    });
</script>
<script src="{{asset('js/app.js')}}"></script>
<script>
    var audio = new Audio('http://pyruserp.com/APP/estancia/audio.mp3');
    audio.loop = true;
  
    window.Echo.private('new-pedido').listen('EventPedido', (e) => {
        let rol = '{{ auth()->user()->rol }}';
        if (rol == 'admin') {
            newOrder();
        }

    });
    //ALERTA DE NUEVO PEDIDO PARA BUSINESS
    function newOrder() {
         audio.play();
        Swal.fire({
            title: 'Mensaje',
            text: '¡Tienes un nuevo pedido!',
            type: 'info',
            animation: false,
            customClass: {
                popup: 'animated tada'
            }
        }).then((result) => {

            if (result.value) {
                audio.pause();
            }
        });
    }
</script>

@yield('scripts')
</body>

<!-- Mirrored from thememakker.com/templates/lucid/html/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Aug 2018 14:07:23 GMT -->
</html>
