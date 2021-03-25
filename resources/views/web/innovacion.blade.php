@extends('web.layout._layout')
@section('content')
    @include('audio02')
    <section id="sub-header" class="section bg-parallax pb-0" data-background="{{asset('web/img/bg/demo.jpg')}}">
        <div class="bg-overlay-black bg-overlay-5"></div>
        <div class="container">
            <div class="sub-wrapper">
                <h1> INNOVACIONES</h1>


                <div class="breadcrumb-container clearfix">
                    <span>ESTÁS AQUÍ: </span>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('/')}}">Home</a>
                        </li>
                        <li>
                            Innovaciones
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
                <div class="col-md-12  col-sm-12 col-xs-12">
                    @if(Request::is('innovacion/actividades'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">ACTIVIDADES DIVERSAS Y VISITAS DE INVESTIGACIÓN</h2>

                                <!-- /work-item-slider-wrapper -->
                                <div class="isotope-grid-wrapper" data-isotope-column="3" data-column-gap="30"
                                     data-column-md="3" data-column-sm="2" data-column-xs="1"
                                     data-column-tn="1">
                                    <div class="isotope-grid-row">
                                        <div class="isotope-grid">
                                            <div class="grid-sizer"></div>

                                            <div class="portfolio-item building">
                                                <div class="portfolio-media hover-link">
                                                    <a href="{{asset('web/img/innovaciones/actividades/Foto-1.jpg')}}"
                                                       class="gallery-item-1">
                                                        <img src="{{asset('web/img/innovaciones/actividades/Foto-1.jpg')}}" alt=""/>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    Investigaciones realizadas en Australia, Perth y Sydney
                                                </h5>
                                            </div>

                                            <div class="portfolio-item building">
                                                <div class="portfolio-media hover-link">
                                                    <a href="{{asset('web/img/innovaciones/actividades/Foto-6.jpg')}}"
                                                       class="gallery-item-2">
                                                        <img src="{{asset('web/img/innovaciones/actividades/Foto-6.jpg')}}" alt=""/>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    Reencuentro con grandes hombre egresados del alma mater la UNI
                                                </h5>
                                            </div>

                                            <div class="portfolio-item building">
                                                <div class="portfolio-media hover-link">
                                                    <img src="{{asset('web/img/innovaciones/actividades/Foto-9.jpg')}}" alt=""/>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    Supervisión de instalación de Trafo 5 MVA en una
                                                    minera
                                                </h5>
                                            </div>

                                            <div class="portfolio-item building">
                                                <div class="portfolio-media hover-link">
                                                    <img src="{{asset('web/img/innovaciones/actividades/Foto-12.jpg')}}" alt=""/>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    Nuestra aula de formacion y exposicion
                                                </h5>
                                            </div>

                                            <div class="portfolio-item museum">
                                                <div class="portfolio-media hover-link">
                                                    <img src="{{asset('web/img/innovaciones/actividades/Foto-13.jpg')}}" alt=""/>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    Inauguracion de nuevo taller en mina pallancata
                                                </h5>
                                            </div>

                                        </div>
                                        <!-- /isotope-grid -->
                                    </div>
                                    <!-- /isotope-grid-row -->
                                </div>
                                <!-- /isotope-grid-wrapper -->

                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('innovacion/desarrollados'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">INVESTIGACIONES POR EJECUTAR Y TRABAJOS DESARROLLADOS</h2>

                                <!-- /work-item-slider-wrapper -->
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
                                                            src="https://www.youtube.com/embed/71w5g-YzLNw"
                                                            frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>

                                                    <a href="https://www.youtube.com/watch?v=71w5g-YzLNw"
                                                       class="overlay video">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="https://www.youtube.com/watch?v=71w5g-YzLNw" class="video">
                                                        Problemas de conectores de locomotoras a bateria
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="portfolio-item building">
                                                <div class="portfolio-media hover-link">
                                                    <iframe width="370" height="247"
                                                            src="https://www.youtube.com/embed/2A-y1jxMidY"
                                                            frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>

                                                    <a href="https://www.youtube.com/watch?v=2A-y1jxMidY"
                                                       class="overlay video">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="https://www.youtube.com/watch?v=2A-y1jxMidY" class="video">
                                                        Proceso de Carga de los Skips de mando hidráulico
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="portfolio-item building">
                                                <div class="portfolio-media hover-link">
                                                    <iframe width="370" height="247"
                                                            src="https://www.youtube.com/embed/9NuMB4IkNlM"
                                                            frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    <a href="https://www.youtube.com/watch?v=9NuMB4IkNlM"
                                                       class="overlay video">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="https://www.youtube.com/watch?v=9NuMB4IkNlM" class="video">
                                                        Carga de Skips, mandos hidráulicos (Vídeo 2)
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="portfolio-item building">
                                                <div class="portfolio-media hover-link">
                                                    <iframe width="370" height="247"
                                                            src="https://www.youtube.com/embed/k32QxevBCFA"
                                                            frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    <a href="https://www.youtube.com/watch?v=k32QxevBCFA"
                                                       class="overlay video">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="https://www.youtube.com/watch?v=k32QxevBCFA" class="video">
                                                        Mandos hidráulicos y proceso de descarga de skip. (Vídeo 3)
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="portfolio-item museum">
                                                <div class="portfolio-media hover-link">
                                                    <iframe width="370" height="247"
                                                            src="https://www.youtube.com/embed/F-bXfplIuqk"
                                                            frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    <a href="https://www.youtube.com/watch?v=F-bXfplIuqk"
                                                       class="overlay video">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="https://www.youtube.com/watch?v=F-bXfplIuqk" class="video">
                                                        Condiciones de una S.E. en Interior Mina
                                                    </a>
                                                </h5>
                                            </div>

                                            <!-- /portfolio-item -->
                                            <div class="portfolio-item office">
                                                <div class="portfolio-media hover-link">
                                                    <iframe width="370" height="247"
                                                            src="https://www.youtube.com/embed/al0xtTisZxc"
                                                            frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    <a href="https://www.youtube.com/watch?v=al0xtTisZxc"
                                                       class="overlay video">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="https://www.youtube.com/watch?v=al0xtTisZxc" class="video">
                                                        Causas de Fallas en Aisladores Problemas
                                                    </a>
                                                </h5>
                                            </div>

                                            <!-- /portfolio-item -->

                                            <div class="portfolio-item urban">
                                                <div class="portfolio-media hover-link">
                                                    <iframe width="370" height="247"
                                                            src="https://www.youtube.com/embed/u7wbi6sQJyk"
                                                            frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    <a href="https://www.youtube.com/watch?v=u7wbi6sQJyk"
                                                       class="overlay video">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="https://www.youtube.com/watch?v=u7wbi6sQJyk" class="video">
                                                        Exposición de Finalistas del Concurso Innotec 2010
                                                    </a>
                                                </h5>
                                            </div>
                                            <!-- /portfolio-item -->

                                            <div class="portfolio-item house">
                                                <div class="portfolio-media hover-link">
                                                    <iframe width="370" height="247"
                                                            src="https://www.youtube.com/embed/kvXMaJN5Kzs"
                                                            frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    <a href="https://www.youtube.com/watch?v=kvXMaJN5Kzs"
                                                       class="overlay video">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="https://www.youtube.com/watch?v=kvXMaJN5Kzs" class="video">
                                                        Proceso de Bloqueo y Señalización para Mantenimiento de Torre de
                                                        Enfriamiento en Antamina
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="portfolio-item house">
                                                <div class="portfolio-media hover-link">
                                                    <iframe width="370" height="247"
                                                            src="https://www.youtube.com/embed/cZcTPRRm2ak"
                                                            frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    <a href="https://www.youtube.com/watch?v=cZcTPRRm2ak"
                                                       class="overlay video">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="https://www.youtube.com/watch?v=cZcTPRRm2ak" class="video">
                                                        Nuevo Campamento Minero en Las Bambas
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="portfolio-item house">
                                                <div class="portfolio-media hover-link">
                                                    <iframe width="370" height="247"
                                                            src="https://www.youtube.com/embed/JwUYcJpGBzg"
                                                            frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    <a href="https://www.youtube.com/watch?v=JwUYcJpGBzg"
                                                       class="overlay video">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="https://www.youtube.com/watch?v=JwUYcJpGBzg" class="video">
                                                        Construcción y Medición de Pozo a Tierra Horizontal en Fundición
                                                        "Metalúrgica Del Pacífico, Industrial S.R.L."
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="portfolio-item house">
                                                <div class="portfolio-media hover-link">
                                                    <iframe width="370" height="247"
                                                            src="https://www.youtube.com/embed/X0rZmqz6_ng"
                                                            frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    <a href="https://www.youtube.com/watch?v=X0rZmqz6_ng"
                                                       class="overlay video">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="https://www.youtube.com/watch?v=X0rZmqz6_ng" class="video">
                                                        Trabajo de una Locomotora con Nuestras Innovaciones del Kit Y
                                                        Supergramp en la Compañía Minera Casapalca
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="portfolio-item house">
                                                <div class="portfolio-media hover-link">
                                                    <iframe width="370" height="247"
                                                            src="https://www.youtube.com/embed/sc46dyOqWU0"
                                                            frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    <a href="https://www.youtube.com/watch?v=sc46dyOqWU0"
                                                       class="overlay video">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="https://www.youtube.com/watch?v=sc46dyOqWU0" class="video">
                                                        Instalaciones en una Galería Principal con Nuestras Innovaciones
                                                        del
                                                        Kit Insulating y La Supergramp
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="portfolio-item house">
                                                <div class="portfolio-media hover-link">
                                                    <iframe width="370" height="247"
                                                            src="https://www.youtube.com/embed/WIuWM5IxkMI"
                                                            frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    <a href="https://www.youtube.com/watch?v=WIuWM5IxkMI"
                                                       class="overlay video">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="https://www.youtube.com/watch?v=WIuWM5IxkMI" class="video">
                                                        Capacitación a Personal de la Empresa Contratista para un
                                                        Trabajo la
                                                        Línea de 33 Kv, en Mina Catalina Huanca, Ayacucho
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="portfolio-item house">
                                                <div class="portfolio-media hover-link">
                                                    <iframe width="370" height="247"
                                                            src="https://www.youtube.com/embed/BfYIZBQ-O1M"
                                                            frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    <a href="https://www.youtube.com/watch?v=BfYIZBQ-O1M"
                                                       class="overlay video">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="https://www.youtube.com/watch?v=BfYIZBQ-O1M" class="video">
                                                        Un alto en el trabajo en la provincia de sucre (QUEROBAMBA),
                                                        Ayacucho para conocer las bondades de nuestra naturaleza de la
                                                        zona
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="portfolio-item house">
                                                <div class="portfolio-media hover-link">
                                                    <iframe width="370" height="247"
                                                            src="https://www.youtube.com/embed/DtZl62Krhs8"
                                                            frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    <a href="https://www.youtube.com/watch?v=DtZl62Krhs8"
                                                       class="overlay video">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="https://www.youtube.com/watch?v=DtZl62Krhs8" class="video">
                                                        Supervisión de Cumplimiento del Procedimiento de Revelar Tensión
                                                        Antes de Trabajar en la Línea de 33 Kv, que Alimenta a la Mina
                                                        Catalina Huanca
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="portfolio-item house">
                                                <div class="portfolio-media hover-link">
                                                    <iframe width="370" height="247"
                                                            src="https://www.youtube.com/embed/DYvPifunHgg"
                                                            frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    <a href="https://www.youtube.com/watch?v=DYvPifunHgg"
                                                       class="overlay video">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="https://www.youtube.com/watch?v=DYvPifunHgg" class="video">
                                                        Proceso de Bloqueo Múltiple por Participación de Varias
                                                        Especialidades en el Mantenimiento de la Torre de Enfriamiento
                                                        de
                                                        los Molinos en Antamina
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="portfolio-item house">
                                                <div class="portfolio-media hover-link">
                                                    <iframe width="370" height="247"
                                                            src="https://www.youtube.com/embed/xQ--Ryc6EqQ"
                                                            frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    <a href="https://www.youtube.com/watch?v=xQ--Ryc6EqQ"
                                                       class="overlay video">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="https://www.youtube.com/watch?v=xQ--Ryc6EqQ" class="video">
                                                        Retorno de Cuzco a Lima, después del Trabajo en la mina “Las
                                                        Bambas”
                                                    </a>
                                                </h5>
                                            </div>

                                        </div>
                                        <!-- /isotope-grid -->
                                    </div>
                                    <!-- /isotope-grid-row -->
                                </div>
                                <!-- /isotope-grid-wrapper -->

                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('innovacion/innovaciones'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">INNOVACIONES</h2>
                                <div class="mb-20">
                                    <img src="{{asset('web/img/innovaciones/innovaciones.jpg')}}" alt=""/>
                                    <!-- /work-slider -->
                                </div>
                                <!-- /work-item-slider-wrapper -->
                                <div class="divider pt-20"></div>
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">
                                        <h4>El Científico y Visionario – Albert Einstein (por Paulo Coelho)</h4>

                                        <p>Los Dos son la misma Persona: ALBERT EINSTEIN, que tanto se adelantó a su
                                            tiempo
                                            al desarrollar una teoría que evolucionó el Mundo y el pensamiento
                                            filosófico.
                                            Por otro lado, era una persona que, a pesar de que sabía que la mayor parte
                                            de
                                            los fenómenos físicos se puede explicar, era consciente que no podía
                                            comprenderlo
                                            todo. Mantuvo su Corazón y su Mente abiertos, reverenciando también las
                                            cosas
                                            que no podía colocar o plasmarlo en una ecuación matemática. Einstein no era
                                            un hombre religioso, pero tenía un profundo respeto por la vida y por el ser
                                            humano. En el mundo de hoy, cuando la gente tiene explicaciones para todo y
                                            ridiculizan
                                            cualquier tema que no se encuadre dentro del pequeño universo que han
                                            creado,
                                            vale la pena recordar algunas de las palabras del mayor y más importante
                                            científico
                                            del siglo XX que a continuación anotamos: Nada sucede porque si, … “Dios no
                                            juega
                                            a los dados con el Universo”.</p>
                                        <p>Los mediocres son siempre críticos. “Los espíritus generosos, al buscar un
                                            camino
                                            diferente y utilizar su inteligencia con valor y honestidad, siempre
                                            encontrarán
                                            una oposición feroz por parte de las mentes mediocres. Pero la imaginación
                                            es
                                            más importante que la cultura, porque el hombre que solo es culto, termina
                                            rodeado
                                            de límites, mientras que la imaginación puede dar la vuelta al mundo”.</p>
                                        <p>Respeto al Misterio. “El sentimiento más importante y más bello que el hombre
                                            puede
                                            experimentar es su respeto al misterio; este es la fuente de todo el Arte y
                                            la
                                            Ciencia. Quien no puede contemplar el mundo con espanto, es que tiene los
                                            ojos
                                            cerrados.</p>
                                        <p>Ciencia y Religión. “La religiosidad cósmica es la más fuerte y la más
                                            poderosa
                                            de
                                            todas las herramientas de investigación científica. La Ciencia sin la
                                            Religión
                                            está incompleta y la religión sin ciencia es ciega. Todas las religiones,
                                            artes
                                            o ciencias, son frutos del mismo árbol, cuya única aspiración es hacer más
                                            digna
                                            la vida del hombre, o sea, permitir que el individuo se eleve por encima de
                                            la
                                            simple existencia física y sea libre”.
                                        </p>
                                        <p>Dejar espacio a la Improvisación. “Si las leyes de la matemática quieren ser
                                            la
                                            base
                                            de la realidad, entonces no pueden ser fijas. Si las leyes de la matemática
                                            son
                                            fijas, entonces no están basadas en la realidad. Si yo supiese exactamente a
                                            donde quiero llegar, no podría llamarlo investigación, ¿No es cierto? Sobre
                                            su
                                            mayor descubrimiento. “A veces me pregunto cómo llegué a la Teoría de la
                                            Relatividad:
                                            creo que una persona normal nunca deja de pensar en términos de espacio y
                                            tiempo,
                                            pero como mi desarrollo intelectual fue lento y atrasado, solo empecé a
                                            pensar
                                            en esos términos cuando ya era casi un adulto”.</p>
                                        <p>La muerte es el Demonio. “El más tonto de todos los temores es el miedo a
                                            morir,
                                            ya que con los muertos nunca puede pasar nada malo. Y el peor castigo del
                                            demonio
                                            fue hacernos pagar un alto precio por todo lo bueno que ofrece la vida: o
                                            bien
                                            es malo para la salud, o hace que nos torturemos el alma, o engorda”.</p>
                                        <p>Sobre sí mismo. “No es que yo sea más inteligente o experto que los demás; mi
                                            mejor
                                            cualidad es no abandonar enseguida un problema. Cuando analizo mi forma de
                                            pensar,
                                            llego a la conclusión de que el Don de la Imaginación siempre tuvo para mí
                                            mucha
                                            más importancia que la capacidad de acumular información; si no hubiese sido
                                            físico, sería músico, porque pienso como un compositor y veo mi vida como si
                                            fuese músico”.</p>
                                        <p>………….. son palabras de Albert Einstein, el Científico más importante de la
                                            Historia………</p>
                                    </div>
                                </div>
                                <!-- /page-grid -->
                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('innovacion/nuestra'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">Nuestras Innovaciones</h2>

                                <!-- /work-item-slider-wrapper -->

                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">
                                        <p>Nuestra empresa tiene varias innovaciones propias que ha desarrollado para el
                                            sector
                                            minero e industrias productivas.</p>
                                        <p>Estas innovaciones son desarrolladas después de varios años de investigación
                                            y
                                            sobre
                                            todo por la experiencia vivencial de los gestores, debido a que en algún
                                            momento
                                            desarrollaron su trabajo en minería cuando eran supervisores, jefes de área
                                            y
                                            jefes del área de mantenimiento, tanto en minas nacionales como
                                            extranjeras.</p>
                                        <p>Todo el Know how del equipo de innovadores con que cuenta nuestra
                                            institución,
                                            nos
                                            permite desarrollar los servicios de una manera eficiente, profesional y con
                                            responsabilidad y en algunos casos las innovaciones pueden salir de los
                                            mismos
                                            clientes y que en base a un trabajo conjunto, coordinado y concertado, se
                                            llegan
                                            a resultados satisfactorios.
                                        </p>
                                        <p>Nuestra institución es muy respetuosa de la propiedad intelectual de los
                                            gestores
                                            de la idea innovadora, por ello promueve y dirige la consolidación del
                                            trámite
                                            correspondiente ante INDECOPI (Antes ITINTEC) para apoyar en patentarlo.</p>
                                        <p>Una buena idea no es todo, se necesita bastante trabajo para darle forma,
                                            imagen,
                                            diseño, rediseño, etc. y aceptación en el mercado. Mucho tiene que ver con
                                            la
                                            psicología de los clientes para que nuestros productos lleguen a los que
                                            verdaderamente
                                            lo saben valorar desde el punto de vista de resultados satisfactorios.</p>
                                        <p>Las innovaciones que hasta la actualidad hemos desarrollado y están
                                            trabajando,
                                            son
                                            el inicio de nuestras actividades y que evidentemente la actividad de I+D+i
                                            es
                                            un trabajo constante y para ello es importante las habilidades de conceptuar
                                            el problema y la habilidad de ser siempre creativos.</p>
                                        <p>Seguidamente vamos a conocer nuestras innovaciones y una breve descripción
                                            del
                                            uso
                                            de las mismas. (Si desea mayor información al respecto, estas son brindadas
                                            a
                                            nuestros clientes y a empresas mineras que tienen esta necesidad y desean
                                            ahorrar
                                            sus costos.).</p>

                                    </div>
                                </div>
                                <!-- /page-grid -->
                                <div class="isotope-grid-wrapper" data-isotope-column="3" data-column-gap="30"
                                     data-column-md="3" data-column-sm="2" data-column-xs="1"
                                     data-column-tn="1">
                                    <div class="isotope-grid-row">
                                        <div class="isotope-grid">
                                            <div class="grid-sizer"></div>
                                            <!-- <div class="gutter-sizer"></div> -->

                                            <div class="portfolio-item office">
                                                <div class="portfolio-media hover-link">
                                                    <img src="{{asset('web/img/correcciones/sensor-de-atascamiento.jpg')}}" alt=""/>
                                                    <a href="{{route('innovacion.detalle','sensor')}}" class="overlay">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class="text-center">
                                                    <a href="{{route('innovacion.detalle','sensor')}}">
                                                        Sensor de Atascamiento del Módulo (skip/jaula) en el momento de
                                                        izaje
                                                    </a>
                                                </h5>
                                            </div>
                                            <!-- /portfolio-item -->

                                            <div class="portfolio-item building">
                                                <div class="portfolio-media hover-link">
                                                    <img src="{{asset('web/img/innovaciones/desatoro-de-tolva.jpg')}}" alt=""/>
                                                    <a href="{{route('innovacion.detalle','desatoro')}}" class="overlay">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class="text-center">
                                                    <a href="{{route('innovacion.detalle','desatoro')}}">
                                                        <?php
                                                        $texto = "Desatoro de tolva de mineral sin riesgo de accidente";
                                                        echo substr($texto, 0, 70) . "";
                                                        ?>
                                                    </a>
                                                </h5>
                                            </div>
                                            <!-- /portfolio-item -->

                                            <div class="portfolio-item museum">
                                                <div class="portfolio-media hover-link">
                                                    <img src="{{asset('web/img/correcciones/Supergramp-seguro.jpg')}}" alt=""/>
                                                    <a href="{{route('innovacion.detalle','supergramp')}}" class="overlay">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class="text-center">
                                                    <a href="{{route('innovacion.detalle','supergramp')}}">
                                                        La Supergramp. Sujetadores que no soltará al trolley, aún en
                                                        curvas
                                                        cerradas</a>
                                                </h5>
                                            </div>
                                            <!-- /portfolio-item -->

                                            <div class="portfolio-item building">
                                                <div class="portfolio-media hover-link">
                                                    <img src="{{asset('web/img/correcciones/KIT-INSULATING.jpg')}}" alt=""/>
                                                    <a href="{{route('innovacion.detalle','insulating')}}" class="overlay">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class="text-center">
                                                    <a href="{{route('innovacion.detalle','insulating')}}">
                                                        El Kit Insulating, resuelve los problemas de sostenimiento y
                                                        buen aislamiento de conductores aéreos (Trolley)
                                                        <!--                                                    --><?php
                                                        //                                                    $texto = "El Kit Insulating, resuelve los problemas de sostenimiento de conductores aéreos DC";
                                                        //                                                    echo substr($texto, 0, 70) . "";
                                                        //                                                    ?>
                                                    </a>
                                                </h5>
                                            </div>
                                            <!-- /portfolio-item -->

                                            <div class="portfolio-item urban">
                                                <div class="portfolio-media hover-link">
                                                    <img src="{{asset('web/img/innovaciones/transformacion-de-locomotora.jpg')}}"
                                                         alt=""/>
                                                    <a href="{{route('innovacion.detalle','locomotora')}}" class="overlay">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class="text-center">
                                                    <a href="{{route('innovacion.detalle','locomotora')}}">
                                                        Transformación de Locomotora a batería, a Trolley.
                                                    </a>
                                                </h5>
                                            </div>
                                            <!-- /portfolio-item -->

                                            <div class="portfolio-item house">
                                                <div class="portfolio-media hover-link">
                                                    <img src="{{asset('web/img/correcciones/The-Dielectric-floor.jpg')}}" alt=""/>
                                                    <a href="{{route('innovacion.detalle','dielectric')}}" class="overlay">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class="text-center">
                                                    <a href="{{route('innovacion.detalle','dielectric')}}">
                                                        The Dielectric Floor trabaja en presencia de agua, es más que
                                                        una manta
                                                        <?php
                                                        //$texto = "The Dielectric floor, es más que una manta. La manta dieléctrica no sirve en mina";
                                                        //echo substr($texto, 0, 70) . "";
                                                        ?>

                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="portfolio-item house">
                                                <div class="portfolio-media hover-link">
                                                    <img src="{{asset('web/img/innovaciones/beauty-module.jpg')}}" alt=""/>
                                                    <a href="{{route('innovacion.detalle','beauty')}}" class="overlay">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class="text-center">
                                                    <a href="{{route('innovacion.detalle','beauty')}}">
                                                        <?php
                                                        $texto = "Beauty Module. Módulo 3 en 1 para Salones spa y de belleza";
                                                        echo substr($texto, 0, 70) . "";
                                                        ?>

                                                    </a>
                                                </h5>
                                            </div>

                                            <!--<div class="portfolio-item house">
                                                <div class="portfolio-media hover-link">
                                                    <img src="{{asset('web/img/portfolio/8big.jpg')}}" alt=""/>
                                                    <a href="detalle/detalle_speed.php" class="overlay">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <h5 class="text-center">
                                                    <a href="detalle/detalle_speed.php">
                                                        Speed Control
                                                    </a>
                                                </h5>
                                            </div>-->

                                            <!-- /portfolio-item -->
                                        </div>
                                        <!-- /isotope-grid -->
                                    </div>
                                    <!-- /isotope-grid-row -->
                                </div>
                                <!-- /isotope-grid-wrapper -->

                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('innovacion/nuevos'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">Investigaciones en Proceso</h2>

                                <!-- /work-item-slider-wrapper -->
                                <div class="isotope-grid-wrapper" data-isotope-column="3" data-column-gap="30"
                                     data-column-md="3" data-column-sm="2" data-column-xs="1"
                                     data-column-tn="1">
                                    <div class="isotope-grid-row">
                                        <div class="isotope-grid">
                                            <div class="grid-sizer"></div>
                                            <!-- <div class="gutter-sizer"></div> -->
                                            <div class="portfolio-item building">
                                                <div class="portfolio-media hover-link">
                                                    <img src="{{asset('web/img/portfolio/4big.jpg')}}" alt=""/>
                                                    <a href="{{route('innovacion.detalle','rotation')}}" class="overlay">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="{{route('innovacion.detalle','rotation')}}">
                                                        Rotation restaurant
                                                    </a>
                                                </h5>
                                            </div>

                                            <!-- /portfolio-item -->

                                            <div class="portfolio-item building">
                                                <div class="portfolio-media hover-link">
                                                    <img src="{{asset('web/img/portfolio/2big.jpg')}}" alt=""/>
                                                    <a href="{{route('innovacion.detalle','room')}}" class="overlay">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="{{route('innovacion.detalle','room')}}">
                                                        The new room of surround music

                                                    </a>
                                                </h5>
                                            </div>
                                            <!-- /portfolio-item -->

                                            <div class="portfolio-item museum">
                                                <div class="portfolio-media hover-link">
                                                    <img src="{{asset('web/img/portfolio/3big.jpg')}}" alt=""/>
                                                    <a href="{{route('innovacion.detalle','hidraulico')}}" class="overlay">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="{{route('innovacion.detalle','hidraulico')}}">Hidráulico
                                                        hoist-carport</a>
                                                </h5>
                                            </div>
                                            <!-- /portfolio-item -->
                                            <div class="portfolio-item office">
                                                <div class="portfolio-media hover-link">
                                                    <img src="{{asset('web/img/portfolio/1big.jpg')}}" alt=""/>
                                                    <a href="{{route('innovacion.detalle','open')}}" class="overlay">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="{{route('innovacion.detalle','open')}}">The open key, without key. Una
                                                        llave
                                                        de apertura sin usar llave</a>
                                                </h5>
                                            </div>

                                            <!-- /portfolio-item -->

                                            <div class="portfolio-item urban">
                                                <div class="portfolio-media hover-link">
                                                    <img src="{{asset('web/img/portfolio/5big.jpg')}}" alt=""/>
                                                    <a href="{{route('innovacion.detalle','protectora')}}" class="overlay">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="{{route('innovacion.detalle','protectora')}}">Manta
                                                        protectora contra el sol para vehículos, de uso automático</a>
                                                </h5>
                                            </div>
                                            <!-- /portfolio-item -->

                                            <div class="portfolio-item house">
                                                <div class="portfolio-media hover-link">
                                                    <img src="{{asset('web/img/portfolio/8big.jpg')}}" alt=""/>
                                                    <a href="{{route('innovacion.detalle','ascensores')}}" class="overlay">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                                <!-- /hover-link -->
                                                <h5 class=" text-center">
                                                    <a href="{{route('innovacion.detalle','ascensores')}}">
                                                        <?php
                                                        $texto = "Ascensor Personal para 2 o 3 pisos, solo para personas de la 3° edad que no pueden subir escaleras";
                                                        echo substr($texto, 0, 65) . "...";
                                                        ?>


                                                    </a>
                                                </h5>
                                            </div>


                                        </div>
                                        <!-- /isotope-grid -->
                                    </div>
                                    <!-- /isotope-grid-row -->
                                </div>
                                <!-- /isotope-grid-wrapper -->

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


    <!-- END / GET QUOTE -->
@endsection
@section('scripts')
    <script>

        $('.gallery-item-1').magnificPopup({
            items: [
                {
                    src: '../img/innovaciones/actividades/Foto-1.jpg',
                    title: 'Investigaciones realizadas en Australia, Perth y Sydney'
                },
                {
                    src: '../img/innovaciones/actividades/Foto-2.jpg',
                    title: 'Investigaciones realizadas en Australia, Perth y Sydney'
                },
                {
                    src: '../img/innovaciones/actividades/Foto-3.jpg',
                    title: 'Investigaciones realizadas en Australia, Perth y Sydney'
                }
            ],
            gallery: {
                enabled: true,
                tPrev: 'Previous (Left arrow key)',
                tNext: 'Next (Right arrow key)',
                tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
            },
            type: 'image'
        });

        $('.gallery-item-2').magnificPopup({
            items: [
                {
                    src: '../img/innovaciones/actividades/Foto-6.jpg',
                    title: 'Reencuentro'
                },
                {
                    src: '../img/innovaciones/actividades/Foto-8.jpg',
                    title: 'Reencuentro'
                }
            ],
            gallery: {
                enabled: true,
                tPrev: 'Previous (Left arrow key)',
                tNext: 'Next (Right arrow key)',
                tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
            },
            type: 'image'
        });

    </script>
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
    </script>
@endsection
