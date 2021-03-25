<!-- PRELOAD -->
<div id="preload" class="preload">
    <div class="flat"></div>
    <div class="square"></div>
    <div class="square-2"></div>
    <div class="square-3"></div>
    <div class="square-4"></div>
</div>
<!-- /END PRELOAD -->

<!-- HEADER 6 -->
<header class="header head6">
    <div class="searchbar">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-search"></i>
                </span>
                <input type="text" name="search" value="" placeholder="Buscar"/>
                <span class="input-group-btn">
                    <button type="button" class="btn-close"></button>
                </span>
            </div>
            <!-- /input-group -->
        </div>
        <!-- /container -->
    </div>
    <!-- /searchbar -->

    <div class="top-header top-header-3">
        <div class="container">
            <div class="top-left">
                <ul class="social-header">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- /top-left -->
            <div class="top-right">
                <ul class="info-header">
                    <li>
                        <i class="icon icon-paper-plane"></i>
                        adm@idi-mining.com &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                        nataly.cardenas@idi-mining.com &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                        luscelia.quispe@idi-mining.com
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="{{route('contacto')}}">
                            CONTÁCTENOS
                        </a>
                    </li>
                    <li>
                        <div id="google_translate_element"></div>
                        <script type="text/javascript">
                            function googleTranslateElementInit() {
                                new google.translate.TranslateElement({
                                    pageLanguage: 'es',
                                    includedLanguages: 'en,es',
                                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                }, 'google_translate_element');
                            }
                        </script>
                        <script type="text/javascript"
                                src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    </li>
                </ul>
                <!-- /info-header -->
            </div>
            <!-- /top-right -->
        </div>
        <!-- /container -->
    </div>
    <!-- /top-header -->

    <div class="main-header main-header-4">
        <div class="container">
            <!-- LOGO -->
            <div class="logo">
                <a href="{{route('/')}}">
                    <img src="{{asset('web/img/logo.png')}}" alt="logo">
                </a>
            </div><!-- /#logo -->
            <!-- END / LOGO -->

            <!-- MOBILE MENU -->
            <div class="mobile-nav-menu" data-menu-number="4">
                <span class="icon">&nbsp;</span>
            </div><!-- /mobile-nav-menu -->
            <!-- /END MOBILE MENU -->  

            <div class="carro-btn">
                <a href="#">
                    <span class="fa fa-shopping-cart"></span>
                </a>
            </div>
            
            <div class="cart-btn">
                <a href="#">
                    <span class="fa fa-user"></span>    
                </a>
            </div>

            <div class="menu-cart">
                <div class="inner">
                    <div class="navbar-actions-wrap">
                        <div class="navbar-actions d-flex align-items-center">
                            <!--<a href="javascript:;" class="navbar__action-btn" style="margin-left: 0px;"><i class="fa fa-user-o" style="font-weight: bold;"></i> Mi cuenta</a>-->
                            <div class="sesion" style="padding-bottom: 0px;padding-top: 10px;">
                            <ul class="list-unstyled">
                            @if(Auth::guest())
                                <li class="nav__item"><a href="{{ route('web.login') }}" class="blanco">Iniciar Sesión</a></li>
                            @else
                                <li class="nav__item" style="margin-right: 32px;"><a href="{{ route('cliente.pedidos') }}" class="blanco" style="line-height: 50px; ">Mis Pedidos</a></li>
                                <li class="nav__item" style="margin-right: 32px;"><a href="{{ route('web.logout') }}" class="blanco" style="line-height: 50px; ">Cerrar Sesión</a></li>
                            @endif
                            </ul>
                        </div>
                        </div>
                    </div>
                </div><!-- /inner -->
            </div><!-- /menu-cart -->

            <div class="menu-carro">
                <web-carrito-header></web-carrito-header>
            </div>

            <!-- NAVIGATION -->
            <nav class="navigation nav4" data-menu-type="1199">
                <ul class="nav text-uppercase">

                    <li class="menu-item-has-children">
                        <a href="#">
                            NUESTRA EMPRESA
                            <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('empresa','que-es')}}">Qué es Idi Mining & Industries
                                    S.A.C.</a>
                            </li>
                            <li>
                                <a href="{{route('empresa','significa')}}">Qué significa I+D+I</a>
                            </li>
                            <li>
                                <a href="{{route('empresa','mision_vision')}}">Nuestra Misión y
                                    Visión</a>
                            </li>
                            <li>
                                <a href="{{route('empresa','estructura')}}">Estructura Orgánica</a>
                            </li>
                            <li>
                                <a href="{{route('empresa','sede')}}">Nuestra Sede</a>
                            </li>
                            <li>
                                <a href="{{route('empresa','logo')}}">Nuestro Logo</a>
                            </li>
                            <li>
                                <a href="{{route('empresa','lider')}}">Palabras de Nuestro Líder</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="#">
                            SERVICIOS
                            <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('servicio','objetivo')}}">Objeto Social</a>
                            </li>
                            <li>
                                <a href="{{route('servicio','mineria_petroleo')}}">IDI para Minería y
                                    Petróleo</a>
                            </li>
                            <li>
                                <a href="{{route('servicio','otros_sectores')}}">IDI para otros
                                    Sectores</a>
                            </li>
                            <li>
                                <a href="{{route('servicio','premiados')}}">Premiados por INNOTEC
                                    2010</a>
                            </li>
                            <li>
                                <a href="{{route('servicio','empresas')}}">Servicios para Empresas</a>
                            </li>
                            <!--
                            <li>
                                <a href="/servicio/actividades.php">Actividades para la
                                    Comunidad</a>
                            </li>-->
                        </ul>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="#">
                            INNOVACIONES
                            <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('innovacion','innovaciones')}}">El científico y visionario
                                    Albert einstein</a>
                            </li>
                            <li>
                                <a href="{{route('innovacion','nuestra')}}">Nuestras Innovaciones</a>
                            </li>
                            <li>
                                <a href="{{route('innovacion','nuevos')}}">Investigaciones en Proceso</a>
                            </li>
                            <li>
                                <a href="{{route('innovacion','desarrollados')}}">INVESTIGACIONES POR
                                    EJECUTAR Y TRABAJOS DESARROLLADOS</a>
                            </li>
                            <li>
                                <a href="{{route('innovacion','actividades')}}">ACTIVIDADES DIVERSAS Y
                                    VISITAS DE INVESTIGACIÓN</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">ESCUELAS TÉCNICAS<span class="fa fa-angle-down"></span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('escuela','tecnicas')}}">Escuelas Técnicas</a>
                            </li>
                            <li>
                                <a href="{{route('escuela','mina')}}">Escuela para
                                    Trabajar en mina en el área de Mantenimiento Eléctrico</a>
                            </li>
                            <li>
                                <a href="{{route('contacto')}}">
                                    Escuela de Informática para Programador y control del Mantenimiento</a>
                            </li>
                            <li>
                                <a href="{{route('escuela','inventores')}}">
                                    Escuela para Innovadores e Inventores</a>
                            </li>
                            <li>
                                <a href="{{route('contacto')}}">Escuela para Mecánicos de Mina
                                    Subterránea</a>
                            </li>
                            <li>
                                <a href="{{route('escuela','robotica')}}">Robótica</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('actualidades')}}">
                            ACTUALIDADES
                        </a>
                        <ul class="sub-menu">

                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            RESPONSABILIDAD SOCIAL
                            <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>

                                <a href="{{route('responsabilidad','exposicion')}}">NUESTRO SALA DE
                                    EXPOSICIÓN</a>

                            </li>
                            <li>

                                <a href="{{route('responsabilidad','actividades')}}">ACTIVIDADES
                                    PARA LA COMUNIDAD DE NUESTRO ENTORNO</a>

                            </li>
                            <!--<li class="menu-item-has-children">
                                <a href="#">
                                Actividades de proyección social
                                    <span class="fa fa-angle-right"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="#">Día del Niño</a></li>
                                    <li><a href="#">Día del Diseño</a></li>
                                </ul>
                            </li>

                            <li>
                            <a href="#">Apoyo para inventar produscto, para Pymes</a>
                            </li>

                            <li>

                            <a href="#">Apoyo a Inventore Inéditos</a>

                            </li>
                            -->
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('productos.mostrar')}}">
                            TIENDA
                        </a>
                    </li>
                    <!--
                    <li class="menu-item-has-children">
                        <a href="#">
                            MISCELÁNEOS
                            <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">Actividades de Proyección Social</a>
                            </li>
                        </ul>
                    </li>
                    -->
                    
                </ul><!-- /nav -->
            </nav>
            <!-- END / NAVIGATION -->
        </div><!-- /container -->
    </div>
    <!-- /main-header -->
</header>
<!-- /header -->
<!-- END / HEADER 6 -->
