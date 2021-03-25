@extends('web.layout._layout')
@section('content')
    @include('audio01')
    <section id="sub-header" class="section bg-parallax pb-0" data-background="{{asset('web/img/bg/demo.jpg')}}">
        <div class="bg-overlay-black bg-overlay-5"></div>
        <div class="container">
            <div class="sub-wrapper">
                <h1> NUESTRA EMPRESA</h1>
                <div class="breadcrumb-container clearfix">
                    <span>ESTÁS AQUÍ: </span>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('/')}}">Home</a>
                        </li>
                        <li>
                            Nuestra Empresa
                        </li>
                    </ul>
                </div>
                <!-- /breadcrumb -->
            </div>
            <!-- /sub-wrapper -->
        </div>
        <!-- /container -->
    </section>
    <!-- END / SUB HEADER -->

    <!-- CONTENT -->
    <section class="section bg-white pt-70 pb-60 textura">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3 col-sm-12 col-xs-12">

                    @if(Request::is('empresa/que-es'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">QUÉ ES IDI MINING & INDUSTRIES S.A.C.</h2>
                                <div class="mb-20">
                                    <img src="{{asset('web/img/empresa/que-es-idi-mining.jpg')}}" alt=""/>
                                </div>
                                <!-- /work-slider -->
                                <!-- /work-item-slider-wrapper -->


                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">
                                        <p class="font-berlin"><span
                                                    class="font-cambria">“IDI MINING & INDUSTRIES”</span> Somos una
                                            empresa que realiza actividades de
                                            <span class="font-cambria">INVESTIGACIÓN,DESARROLLO e INNOVACIÓN”</span>
                                            para Minería y Otras Industrias.
                                            Nuestra empresa posse un Instituto de Inovación e Investigación, donde
                                            brinda apoyo
                                            gratuito en diversas actividades de formación a esta corriente del
                                            Desarrollo de Innovaciones.
                                        </p>
                                        <p class="font-berlin"><span
                                                    class="font-cambria">IDI MINING & INDUSTRIES S.A.C.</span> es una
                                            Empresa de Base Tecnológica cuya
                                            característica
                                            principal es la actividad de I + D + I, por ello estamos preparados para
                                            deducir
                                            impuestos dentro de las actividades de la Ley N° 30309.</p>
                                        <p class="font-berlin">Nacimos como alternativa para brindar Soluciones Técnicas
                                            de Ingeniería,
                                            Oportunas y con Creatividad; a los múltiples Problemas Operativos en el
                                            ambiente minero
                                            y Petrolero, hoy brindamos soluciones en toda actividad de producción, sobre
                                            todo en el Sector Minero Metalúrgico y Petrolero; que siempre requieren de
                                            una
                                            Solución pragmática en tiempo, Espacio y economía.</p>
                                    </div>
                                    <!-- /page-content -->


                                    <!-- /page-media -->
                                </div>
                                <!-- /page-grid -->


                                <!-- /page-grid -->
                            </main>
                        </div>
                        <!-- /site-content -->
                    @elseif(Request::is('empresa/significa'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">¿Qué se entiende por I+D e Innovación Tecnológica?</h2>
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/empresa/que-significa-idi.jpg')}}" alt=""/>
                                    <!-- /work-slider -->
                                </div>
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">
                                        <h4><strong class="color-red">I</strong>: Investigación</h4>
                                        <p>Indagación original y planificada que persiga descubrir nuevos conocimientos
                                            y
                                            una
                                            superior comprensión en el ámbito científico y tecnológico.</p>
                                        <h4><strong class="color-red">D</strong>: Desarrollo</h4>
                                        <p>Aplicación de los resultados de la Investigación (...) para la fabricación de
                                            nuevos
                                            materiales o productos o para el diseño de nuevos procesos o sistemas de
                                            producción,
                                            así como para la mejora tecnológica sustancial de materiales, productos,
                                            procesos
                                            y sistemas prexistentes.</p>
                                        <h4><strong class="color-red">I</strong>: Innovación Tecnológica</h4>
                                        <p>
                                            Es la Actividad cuyo resultado sea un nuevo invento o diseño, un nuevo
                                            proceso,
                                            nuevo sistema, etc., etc. para la obtención de
                                            un nuevo producto con las respectivas nuevas características en Tecnología,
                                            en
                                            comparación al producto existente con
                                            anterioridad.
                                        </p>
                                    </div>
                                    <!-- /page-content -->
                                    <!-- /page-media -->
                                </div>
                                <!-- /page-grid -->
                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('empresa/mision_vision'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">NUESTRA MISIÓN Y VISIÓN</h2>
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/empresa/mision-y-vision.jpg')}}" alt=""/>
                                </div>
                                <!-- /work-slider -->

                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">
                                        <div class="col-md-6">
                                            <h4 class="color-blue">NUESTRA MISIÓN</h4>
                                            <p>
                                                Realizar <span class="color-red">actividades de I+D+i</span> En Todos
                                                Los
                                                Sectores Del Aparato Productivo, En Especial Para El Sector
                                                Minero Y Petrolero. Hacer Gestión de nuestra propia Tecnología para los
                                                distintos sectores productivos ,
                                                Aportando Con Nuestra Capacidad Creativa e Innovadora Para el Desarrollo
                                                de
                                                Una Identidad Propia en nuestro País. <span
                                                        class="color-blue">PERÚ.</span>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="color-blue">NUESTRA VISIÓN</h4>
                                            <p>
                                                Liderar las actividades de I+D+i y que nos permita perfeccionar y
                                                desarrollar innovación tecnológica,
                                                generando Nuevos Productos y Nuevas oportunidades ; promoviendo nueva
                                                tecnología en bienes y servicios
                                                para la solución de diversos problemas técnicos de producción . Para el
                                                desarrollo de la persona, para el
                                                Desarrollo de las empresas y comprometernos con el cuidado del medio
                                                ambiente donde nos encontramos.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /page-content -->


                                    <!-- /page-media -->
                                </div>
                                <!-- /page-grid -->


                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('empresa/estructura'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">ESTRUCTURA ORGÁNICA</h2>
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/empresa/estructura-organica.jpg')}}" alt=""/>
                                    <!-- /work-slider -->
                                </div>
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">
                                    </div>
                                    <!-- /page-content -->
                                    <!-- /page-media -->
                                </div>
                                <!-- /page-grid -->
                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('empresa/sede'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">UBICACIÓN DE NUESTRA SEDE</h2>
                                <P>¿Cómo llegan a nuestra institución?</P>
                                <p>Según este plano de Ubicación satelital, llegar al Ovalo de Pte. Piedra y seguirla
                                    Av. San Juan</p>
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/correcciones/nuestra-sede1.jpg')}}" alt=""/>
                                    <!-- /work-slider -->
                                </div>
                                <p>Urb. San Antonio Jr. El Bosque I 1-16, Zona Ecológica - Lima 06 – PERÚ</p>
                                <p><strong>E-mail: </strong> adm@idi-mining.com</p>
                                <p><strong>Teléfono:</strong> 980 662 393, 991 178 157</p>
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">

                                    </div>
                                    <!-- /page-content -->


                                    <!-- /page-media -->
                                </div>
                                <!-- /page-grid -->
                                <h2 class="section-header">NUESTRA OFICINA DE ATENCIÓN</h2>
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/empresa/nuestra-sede2.jpg')}}" alt=""/>
                                    <!-- /work-slider -->
                                </div>
                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('empresa/logo'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">NUESTRO LOGO</h2>
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/empresa/nuestro-logo.jpg')}}" alt=""/>
                                    <!-- /work-slider -->
                                </div>
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">
                                    </div>
                                    <!-- /page-content -->


                                    <!-- /page-media -->
                                </div>
                                <!-- /page-grid -->


                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('empresa/lider'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">PALABRAS DE NUESTRO LÍDER</h2>
                                <div class=" mb-20">
                                    <a href="{{asset('web/img/empresa/palabras.jpg')}}" class="image-link">
                                        <img src="{{asset('web/img/empresa/palabras.jpg')}}" alt=""/>
                                    </a>
                                    <!-- /work-slider -->
                                </div>
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">
                                    </div>
                                    <!-- /page-content -->
                                    <!-- /page-media -->
                                </div>
                                <!-- /page-grid -->
                                <!-- /page-grid -->
                            </main>
                        </div>

                    @endif
                </div>
                <!-- /col -->

                <div class="col-md-3 col-md-pull-9 col-sm-12 col-xs-12">
                    <div id="sidebar" class="sidebar">
                        <div id="widget-area">
                            <aside class="widget widget_linklist">
                                <ul>
                                    <li @if(Request::is('empresa/que-es')) class="active" @endif>
                                        <a href="{{route('empresa','que-es')}}" class="btn btn-gray fullwidth text-left">Qué es Idi
                                            Mining &
                                            Industries S.A.C.</a>
                                    </li>
                                    <li @if(Request::is('empresa/significa')) class="active" @endif>
                                        <a href="{{route('empresa','significa')}}" class="btn btn-gray fullwidth text-left">Qué
                                            significa I+D+I</a>
                                    </li>
                                    <li @if(Request::is('empresa/mision_vision')) class="active" @endif>
                                        <a href="{{route('empresa','mision_vision')}}" class="btn btn-gray fullwidth text-left">Nuestra
                                            Misión y Visión</a>
                                    </li>
                                    <li @if(Request::is('empresa/estructura')) class="active" @endif>
                                        <a href="{{route('empresa','estructura')}}" class="btn btn-gray fullwidth text-left">Estructura
                                            Orgánica</a>
                                    </li>
                                    <li @if(Request::is('empresa/sede')) class="active" @endif>
                                        <a href="{{route('empresa','sede')}}" class="btn btn-gray fullwidth text-left">Nuestra
                                            Sede</a>
                                    </li>
                                    <li @if(Request::is('empresa/logo')) class="active" @endif>
                                        <a href="{{route('empresa','logo')}}" class="btn btn-gray fullwidth text-left">Nuestro
                                            Logo</a>
                                    </li>
                                    <li @if(Request::is('empresa/lider')) class="active" @endif>
                                        <a href="{{route('empresa','lider')}}" class="btn btn-gray fullwidth text-left">Palabras de
                                            Nuestro
                                            Líder</a>
                                    </li>
                                </ul>

                            </aside>
                            <!-- /widget_linklist -->


                        </div>
                        <!-- /widget-area -->
                    </div>
                    <!-- /sidebar -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- END / CONTENT -->
@endsection
@section('scripts')
    <script>
        $('.image-link').magnificPopup({
            showCloseBtn: true,
            closeOnBgClick: true,
            enableEscapeKey: true,
            closeOnContentClick: true,
            closeBtnInside: true,
            type: 'image'
        }).magnificPopup('open');

    </script>
@endsection
