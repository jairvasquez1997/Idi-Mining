@extends('web.layout._layout')
@section('content')
    @include('audio01')
    <section id="sub-header" class="section bg-parallax pb-0" data-background="{{asset('web/img/bg/demo.jpg')}}">
        <div class="bg-overlay-black bg-overlay-5"></div>
        <div class="container">
            <div class="sub-wrapper">
                <h1>ESCUELAS TÉCNICAS</h1>


                <div class="breadcrumb-container clearfix">
                    <span>ESTÁS AQUÍ: </span>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('/')}}">Home</a>
                        </li>
                        <li>ESCUELAS TÉCNICAS</li>

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
                    @if(Request::is('escuela/mina'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">Escuela para Trabajar en Mina en el área de Mantenimiento
                                    Eléctrico</h2>
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/escuela/escuela-para-trabajar-en-mina-1.jpg')}}" alt=""/>
                                </div>

                                <div class=" mb-20">
                                    <img src="{{asset('web/img/escuela/escuela-para-trabajar-en-mina-2.jpg')}}" alt=""/>
                                </div>
                            </main>
                        </div>
                    @elseif(Request::is('escuela/tecnicas'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">Escuelas Técnicas</h2>
                                <div class="mb-20">
                                    <img src="{{asset('web/img/escuela/escuelas-tecnicas-mina.jpg')}}" alt=""/>
                                    <!-- /work-slider -->
                                </div>

                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">
                                        <p>Como nuestras actividades están relacionadas a la investigación y Desarrollo en
                                            la rama de
                                            la Ingeniería Mecánica y Eléctrica, y nuestros profesionales que tienen una
                                            amplia
                                            experiencia en el equipamiento diverso del ambiente minero y petrolero; esto nos
                                            permite
                                            brindar todo este Know How a la juventud que desea desarrollarse o trabajar en
                                            este
                                            campo Minero o Petrolero que es muy interesante.</p>

                                        <p>
                                            Por tal razón teniendo la INFRAESTRUCUTRA adecuada, las HERRAMIENTAS necesarias
                                            y
                                            LOS CONOCIMIENTOS de ingeniería del respectivo equipamiento, nos permiten
                                            brindar
                                            una Enseñanza de formación objetiva, corta y específica para los Jóvenes y
                                            adultos que
                                            desean seguir desarrollándose en este campo.
                                        </p>
                                        <p>
                                            Nuestra Institución ha diseñado escuelas de formación técnica <strong
                                                    class="color-blue">Presencial y Online</strong>,
                                            eminentemente prácticas; porque poseemos una infraestructura y herramientas de
                                            análisis y trabajo para el desarrollo de nuestras actividades.
                                        </p>
                                        <p>Estas escuelas de formación están abiertas para el público interesado en conocer
                                            esta
                                            actividad particular, para ello se comunicará por este medio para las
                                            inscripciones
                                            correspondientes, las personas interesadas pueden hacer una inscripción
                                            escribirnos al
                                            correo: <strong class="color-blue">“adm@idi-mining.com”.</strong>
                                        </p>
                                        <p>
                                            Habrá escuelas de formación práctica en las siguientes especialidades:
                                        </p>
                                        <ul style="color: #444; font-family: 'Rubik', sans-serif">
                                            <li type="disc">Escuela para Trabajar en Mina en el área de Mantenimiento
                                                Eléctrico.
                                            </li>
                                            <li type="disc">Escuela de Informática para Programador y control del
                                                Mantenimiento. Para Adultos.
                                            </li>
                                            <li type="disc">Escuela de Inventores e Innovadores. Para niños, Jóvenes y
                                                Adultos.
                                            </li>
                                            <li type="disc">Escuela de Electricidad Domiciliaria e Industrial. Para Niños,
                                                Jóvenes y adultos.
                                            </li>
                                            <li type="disc">Escuela de Electricidad Domiciliaria e Industrial. Para Niños,
                                                Jóvenes y adultos.
                                            </li>
                                            <li type="disc">Robótica. Para armado de vehículos prototipos en movimiento;
                                                para niños y jóvenes.
                                            </li>
                                        </ul>
                                        <p>
                                            Solicite información escribiéndonos a nuestra dirección: <strong
                                                    class="color-blue">adm@idi-mining.com.</strong>
                                        </p>
                                    </div>
                                </div>
                            </main>
                        </div>
                    @elseif(Request::is('escuela/inventores'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">Escuela para Innovadores e Inventores</h2>
                                <div class="mb-20">
                                    <img src="{{asset('web/img/escuela/formacion-gratuita.jpg')}}" alt=""/>
                                    <!-- /work-slider -->
                                </div>

                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">
                                        <h4>
                                            CLASES DE FORMACIÓN GRATUITA PARA DESARROLLAR SU IMAGINACIÓN CREATIVA,
                                            PARA INNOVAR E INVENTAR
                                        </h4>
                                        <p>
                                            Inscripciones: abiertas para este Mes de Octubre, Vacantes limitadas. <br>
                                            GRUPOS DE ENSEÑANZA Y HORARIOS:
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                NIÑOS EN GENERAL HASTA 14 AÑOS : <br>
                                                JOVENES DE 15-20 AÑOS : <br>
                                                INSCRIPCIONES EN GENERAL : <br>
                                            </div>
                                            <div class="col-md-6">
                                                sábado de 09:00 a.m. – 11:00 a.m. <br>
                                                sábado de 04:00 p.m. – 06:00 p.m. <br>
                                                Lunes a Viernes de 09:00 a.m. -11:00 a.m. <br>
                                                Tardes de 04:00 p.m. – 07:00 p.m. en nuestra Sede
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </div>
                    @elseif(Request::is('escuela/robotica'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">Robótica</h2>
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/actualidades/robotica-para-ninos.jpg')}}" alt=""/>
                                </div>
                            </main>

                            <div class="page-grid">
                                <!-- GRID 9 COLUMNS -->
                                <div class="page-content col-12">
                                    <p>
                                        Urb. San Antonio, Jr. El Bosque I1-15. <br>
                                        Inscripciones abiertas desde este Mes de Setiembre
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="col-md-3 col-md-pull-9 col-sm-12 col-xs-12">
                    <div id="sidebar" class="sidebar">
                        <div id="widget-area">
                            <aside class="widget widget_linklist">
                                <ul>
                                    <li @if(Request::is('escuela/tecnicas')) class="active" @endif>
                                        <a href="{{route('escuela','tecnicas')}}"
                                           class="btn btn-gray fullwidth text-left">Escuelas Técnicas</a>
                                    </li>
                                    <li @if(Request::is('escuela/mina')) class="active" @endif>
                                        <a href="{{route('escuela','mina')}}"
                                           class="btn btn-gray fullwidth text-left">
                                            Escuela para Trabajar en mina en el área de Mantenimiento Eléctrico
                                        </a>
                                    </li>
                                    <li >
                                        <a href="#" class="btn btn-gray fullwidth text-left">Escuela de Informática para
                                            Programador y control del Mantenimiento</a>
                                    </li>
                                    <li @if(Request::is('escuela/inventores')) class="active" @endif>
                                        <a href="{{route('escuela','inventores')}}"
                                           class="btn btn-gray fullwidth text-left">
                                            Escuela para Innovadores e Inventores
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="btn btn-gray fullwidth text-left">Escuela para Mecánicos de Mina
                                            Subterránea
                                        </a>
                                    </li>
                                    <li @if(Request::is('escuela/robotica')) class="active" @endif>
                                        <a href="{{route('escuela','robotica')}}"
                                           class="btn btn-gray fullwidth text-left">Robótica</a>
                                    </li>
                                </ul>
                            </aside>
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
