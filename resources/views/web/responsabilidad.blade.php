@extends('web.layout._layout')
@section('content')
    @include('audio01')
    <section id="sub-header" class="section bg-parallax pb-0" data-background="{{asset('web/img/bg/demo.jpg')}}">
        <div class="bg-overlay-black bg-overlay-5"></div>
        <div class="container">
            <div class="sub-wrapper">
                <h1> RESPONSABILIDAD SOCIAL</h1>
                <div class="breadcrumb-container clearfix">
                    <span>ESTÁS AQUÍ: </span>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('/')}}">Home</a>
                        </li>
                        <li>
                            Actividades
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
    <section class="section bg-white pt-70 pb-60  textura">
        <div class="container">
            <div class="row">
                <div class="col-md-12  col-sm-12 col-xs-12">
                    @if(Request::is('responsabilidad/exposicion'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">ACTIVIDADES PARA LA COMUNIDAD DE NUESTRO ENTORNO</h2>

                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">
                                        <p>
                                            Aparte de nuestras actividades comerciales, nos identificamos con acciones
                                            sociales de apoyo a
                                            las zonas de nuestro entorno; también hemos realizado actividades de
                                            recreación para nuestra
                                            juventud; ejemplo de ello celebramos el Día del Niño, asimismo para un
                                            sector de nuestra zona
                                            hicimos Una Chocolatada por Navidad, de este modo hacemos actividades de
                                            apoyo y así nos
                                            identificamos con nuestro entorno y de nuestra comunidad para ayudarlos a
                                            innovar en sus
                                            negocios y que de esta manera puedan generar sus propios ingresos. Solo con
                                            desarrollo de
                                            innovaciones las pymes se mantendrán activas y podrán ampliar su cuota de
                                            mercado, de este
                                            modo NO perecerán.
                                        </p>

                                        <p>
                                            Observemos alguna de nuestras actividades a la comunidad de parte de nuestra
                                            empresa:
                                        </p>

                                        <div class="isotope-grid-wrapper" data-isotope-column="3" data-column-gap="30"
                                             data-column-md="3" data-column-sm="2" data-column-xs="1"
                                             data-column-tn="1">
                                            <div class="isotope-grid-row">
                                                <div class="isotope-grid">
                                                    <div class="grid-sizer"></div>
                                                    <!-- <div class="gutter-sizer"></div> -->

                                                    <div class="portfolio-item building">
                                                        <div class="portfolio-media hover-link">
                                                            <iframe width="370" height="247"
                                                                    src="https://www.youtube.com/embed/yCWg7VMzPiU"
                                                                    frameborder="0" allow="autoplay; encrypted-media"
                                                                    allowfullscreen></iframe>
                                                            <a href="https://www.youtube.com/watch?v=yCWg7VMzPiU"
                                                               class="overlay video">
                                                                <i class="fa fa-link"></i>
                                                            </a>
                                                        </div>
                                                        <!-- /hover-link -->
                                                        <h5 class=" text-center">
                                                            <a href="https://www.youtube.com/watch?v=yCWg7VMzPiU"
                                                               class="video">
                                                                Chocolatada realizada en diciembre 2009 en la zona
                                                                denominada San Diego, ubicado al
                                                                final de la carretera al IPEN
                                                            </a>
                                                        </h5>
                                                    </div>

                                                    <div class="portfolio-item building">
                                                        <div class="portfolio-media hover-link">
                                                            <iframe width="370" height="247"
                                                                    src="https://www.youtube.com/embed/g2mbJq96UDI"
                                                                    frameborder="0" allow="autoplay; encrypted-media"
                                                                    allowfullscreen></iframe>

                                                            <a href="https://www.youtube.com/watch?v=g2mbJq96UDI"
                                                               class="overlay video">
                                                                <i class="fa fa-link"></i>
                                                            </a>
                                                        </div>
                                                        <!-- /hover-link -->
                                                        <h5 class=" text-center">
                                                            <a href="https://www.youtube.com/watch?v=g2mbJq96UDI"
                                                               class="video">
                                                                Otra actividad en homenaje a nuestra futura generación,
                                                                se hizo la celebración por el día
                                                                del niño frente a nuestra Sede.
                                                            </a>
                                                        </h5>
                                                    </div>

                                                    <div class="portfolio-item building">
                                                        <div class="portfolio-media hover-link">
                                                            <iframe width="370" height="247"
                                                                    src="https://www.youtube.com/embed/WveuHdhSv3s"
                                                                    frameborder="0" allow="autoplay; encrypted-media"
                                                                    allowfullscreen></iframe>

                                                            <a href="https://www.youtube.com/watch?v=WveuHdhSv3s"
                                                               class="overlay video">
                                                                <i class="fa fa-link"></i>
                                                            </a>
                                                        </div>
                                                        <!-- /hover-link -->
                                                        <h5 class=" text-center">
                                                            <a href="https://www.youtube.com/watch?v=WveuHdhSv3s"
                                                               class="video">
                                                                VISITA DEL PAPA A LIMA. Nuestra devoción por el Líder de
                                                                la Iglesia Católica, quien nos
                                                                visitó Lima y allí estuvimos para saludarlo, ya que la
                                                                Vez que vino el Papa Juan Pablo no
                                                                pudimos estar presentes.
                                                            </a>
                                                        </h5>
                                                    </div>

                                                    <div class="portfolio-item office">
                                                        <div class="portfolio-media hover-link">
                                                            <a href="{{asset('web/img/innovaciones/actividades/Foto-10.jpg')}}"
                                                               class="gallery-item-3">
                                                                <img src="{{asset('web/img/innovaciones/actividades/Foto-10.jpg')}}"
                                                                     alt=""/>
                                                            </a>
                                                        </div>
                                                        <!-- /hover-link -->
                                                        <h5 class=" text-center">
                                                            Acompañamiento a los habitantes del Sector de Cerro partido
                                                            en las faldas de un Cerro
                                                            camino al IPEN “RACSO”. donde en presencia de un Arqueólogo,
                                                            se solicitó para que haga
                                                            una Investigación que dicha zona, NO es zona arqueológica
                                                            como lo nombro el INC. El
                                                            estudio de este profesional, permitirá dilucidar que no es
                                                            zona arqueológica y esto servirá
                                                            para gestionar la titulación del lugar donde viven que son
                                                            más de 15 años.
                                                        </h5>
                                                    </div>

                                                </div>
                                                <!-- /isotope-grid -->
                                            </div>
                                            <!-- /isotope-grid-row -->
                                        </div>


                                    </div>
                                </div>
                                <!-- /page-grid -->
                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif( Request::is('responsabilidad/actividades'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">NUESTRO SALA DE EXPOSICIÓN</h2>
                                <div class="mb-20">
                                    <img src="{{asset('web/img/responsabilidad/sala-de-exposiciones.jpg')}}" alt=""/>
                                    <!-- /work-slider -->
                                </div>
                                <!-- /work-item-slider-wrapper -->
                                <div class="divider pt-20"></div>
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">
                                        <p>
                                            En nuestro salón de exposición se llevó a cabo un Curso para estudiantes
                                            sobre METODOLOGIA
                                            PRACTICA PARA EL ENTENDIMIENTO DE LAS MATEMATICAS como apoyo a la Comunidad.
                                        </p>
                                        <p>
                                            Esta exposición se llevó a cabo con niños de los niveles Primaria y
                                            Secundaria en presencia de sus
                                            padres sobre las Operaciones combinadas y el significado de cada término. Se
                                            tomaron 03
                                            rectángulos iguales de corrospun y se les hizo cortar en 2, 4 y 8 partes;
                                            para después sumar una
                                            pieza de cada rectángulo cortado. Es decir, sumar solo por cortes
                                            1/2+1/4+1/8.
                                        </p>
                                        <p>
                                            Luego de ello se hicieron cortes de 3 y 6 partes y ejecutar las operaciones
                                            mixtas, la enseñanza es
                                            con la práctica sin necesidad de complicar la enseñanza y todo es vía
                                            raciocinio práctico con
                                            participación directa de los mismos niños.
                                        </p>

                                        <p>
                                            Esta metodología es imponente, porque nunca se olvidan y entienden las
                                            razones de las
                                            matemáticas dejo atrás el MITO de que las Matemáticas son difíciles. Hoy
                                            2018 tenemos un
                                            auditorio apropiado Audio visual con Proyectores Profesionales para
                                            enseñanza Multimedia y un
                                            Módulo para la enseñanza de Electricidad y Mecánica paraTécnicos Prácticos;
                                            para Jóvenes y
                                            adultos.
                                        </p>
                                    </div>
                                </div>
                                <!-- /page-grid -->
                                <!-- /page-grid -->
                            </main>
                        </div>
                @endif
                <!-- /site-content -->
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
        $('.video').magnificPopup({
            // disableOn: 700,
            // mainClass: 'mfp-fade',
            // removalDelay: 160,
            // preloader: false,
            // fixedContentPos: false,
            type: 'iframe',
            iframe: {
                patterns: {
                    youtube: {
                        index: 'youtube.com/',
                        id: function (url) {
                            var m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
                            if (!m || !m[1]) return null;
                            return m[1];
                        },
                        src: '//www.youtube.com/embed/%id%?autoplay=1'
                    }
                },
                srcAction: 'iframe_src',
            }
        });

        $('.gallery-item-3').magnificPopup({
            items: [
                {
                    src: '../img/innovaciones/actividades/Foto-10.jpg',
                    title: 'Visita de antropólogo a las faldas de cerro partido'
                },
                {
                    src: '../img/innovaciones/actividades/Foto-11.jpg',
                    title: 'Visita de antropólogo a las faldas de cerro partido'
                },
            ],
            gallery: {
                enabled: true,
                navigateByImgClick: true,
            },
            mainClass: 'mfp-img-mobile',
            type: 'image'
        });
    </script>
@endsection
