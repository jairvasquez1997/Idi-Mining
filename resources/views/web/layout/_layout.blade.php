<!DOCTYPE html>
<html class="" lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">
    <title>IDI-MINING</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic' rel='stylesheet'
          type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700' rel='stylesheet' type='text/css'>
    <link type="text/css" href="{{asset('web/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('web/css/lib/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet">
    <!-- Font Icon -->
    <link type="text/css" href="{{asset('web/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('web/css/lib/cortana.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/vendor/toastr/toastr.min.css')}}">
    <!-- Revolution Slider -->
    <link type="text/css" href="{{asset('web/rs-plugin/css/settings.css')}}" rel="stylesheet">
    <!-- Owl Carousel -->
    <link type="text/css" href="{{asset('web/css/lib/owl.carousel.css')}}" rel="stylesheet">
    <!-- Select into div
    <link type="text/css" href="css/lib/select2.min.css')}}" rel="stylesheet">-->
    <!-- Magnific Popup -->
    <link type="text/css" href="{{asset('web/css/lib/magnific-popup.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link type="text/css" href="{{asset('web/css/style.css')}}" rel="stylesheet">

    <style>
        .test {
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: #6999;
        }
        .menu-carro.open-carro {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
}
.menu-carro {
    position: absolute;
    top: calc(100% + 30px);
    right: 15px;
    background-color: #111;
    max-width: 380px;
    width: 100%;
    opacity: 0;
    visibility: hidden;
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    transform: translateY(10px);
    -webkit-transition: all .4s ease;
    -moz-transition: all .4s ease;
    -ms-transition: all .4s ease;
    transition: all .4s ease;
}

    </style>
    @yield('styles')
</head>

<body>
    <div id="wrapper">

    @include('web.layout._header')
    <div id="page-wrap">
        <!-- HOME MEDIA -->
       @yield('content')

        <!-- FOOTER -->
    @include('web.layout._footer')
    <!-- END / FOOTER -->
    </div>
    </div>
    <!-- JQUERY -->
    @routes
    

    <script src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/js/lib/jquery-1.11.3.min.js')}}"></script>
    
    <!-- Bootstrap -->
    <script type="text/javascript" src="{{asset('web/js/lib/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/js/lib/jquery.bootstrap-touchspin.min.js')}}"></script>
    <!-- Revolution Slider -->
    <script type="text/javascript" src="{{asset('web/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{asset('web/js/lib/owl.carousel.min.js')}}"></script>
    <!-- Overflow Text -->
    <script type="text/javascript" src="{{asset('web/js/lib/overflow-text.js')}}"></script>
    <!-- Easing -->
    <script type="text/javascript" src="{{asset('web/js/lib/jquery.easing.min.js')}}"></script>
    <!-- Select to div -->
    <script type="text/javascript" src="{{asset('web/js/lib/select2.min.js')}}"></script>
    <!-- Parallax -->
    <script type="text/javascript" src="{{asset('web/js/lib/jquery.parallax-1.1.3.js')}}"></script>
    <!-- Waypoint -->
    <script type="text/javascript" src="{{asset('web/js/lib/waypoints.min.js')}}"></script>
    <!-- Count To -->
    <script type="text/javascript" src="{{asset('web/js/lib/jquery.countTo.js')}}"></script>
    <!-- Magnific Popup -->
    <script type="text/javascript" src="{{asset('web/js/lib/jquery.magnific-popup.min.js')}}"></script>
    <!-- Image Loaded -->
    <script type="text/javascript" src="{{asset('web/js/lib/imagesloaded.pkgd.min.js')}}"></script>
    <!-- Isotope -->
    <script type="text/javascript" src="{{asset('web/js/lib/isotope.pkgd.min.js')}}"></script>
    <!-- Custom jQuery -->
    <script type="text/javascript" src="{{asset('web/js/scripts.js')}}"></script>

    <script src="{{asset('admin/vendor/toastr/toastr.js')}}"></script>

    <!--<script>
        function i(){
            var a=e(".carro-btn"),i=e("#page-wrap");
            a.each(function(){
                e(this).on("click",function(){e(this).siblings(".menu-carro").toggleClass("open-cart")})
            }),
            0==i.find(".header").length&&i.on("click",function(){
                e(".menu-carro").removeClass("open-cart")})}
    </script>-->
    <script>
        $(function () {

            var sound = true;
            var v = document.getElementsByTagName("audio")[0];
            var button_play = document.getElementById("button_play");

            var audio_accion = {
                iniciar: function (v) {
                    v.play();
                },
                detener: function (v) {
                    v.pause();
                }
            };

            audio_accion.iniciar(v);
            button_play.addEventListener("click", function () {
                if (sound) {
                    v.pause();
                    button_play.innerHTML = '<i class="fa fa-volume-up" style="font-size: 2.7em;"></i>';
                    sound = false;
                } else {
                    v.play();
                    button_play.innerHTML = '<i class="fa fa-volume-off" style="font-size: 2.7em;"></i>';
                    sound = true;
                }
            });
        });

    </script>
    @yield('scripts')
</body>

</html>
