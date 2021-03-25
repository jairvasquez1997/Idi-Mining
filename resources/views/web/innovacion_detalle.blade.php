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
    <section class="section bg-white pt-70 pb-60  textura" style="padding: 20px !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{URL::previous()}}" class="btn btn-black" style="float:right;">Regresar</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-white pt-70 pb-60 textura" style=" padding-top: 20px !important;">

        <div class="container">
            <div class="row">
                <div class="col-md-12  col-sm-12 col-xs-12">
                    @if(Request::is('innovacion/detalle/ascensores'))
                        <div id="content" class="site-content">
                            <main id="main">

                                <h2 class="section-header">Ascensor Personal para 2 o 3 pisos, solo para personas de la
                                    3°
                                    edad que no pueden subir
                                    escaleras
                                </h2>

                                <div class=" mb-20">
                                    <img src="{{asset('web/img/portfolio/8big.jpg')}}" alt=""/>
                                </div>
                                <!-- /work-slider -->
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->

                                    <div class="page-content col-12">
                                        <p>La mayoría de las casas familiares lo construyen de solo 2 a 3 pisos y que
                                            debido
                                            a que nunca contemplaron el uso de un ascensor, porque a esos tiempos los
                                            usuarios
                                            estaban jóvenes, ya con el paso del tiempo se ven en la necesidad de tener
                                            que
                                            trasladarse hasta los pisos superiores y cuando se trata de personas de la
                                            3°
                                            edad, esta necesidad se hace más latente; porque es real que estos
                                            jovencitos
                                            no desean que los ayudes a subir o bajar. Para evitar futuros riesgos es
                                            necesario
                                            brindarles una alternativa de solución, mediante un ascensor UNIPERSONAL que
                                            sea sencillo en su operación, que no ocupe mucho espacio para su instalación
                                            y que no tengan tantos controles sofisticados para que estén al alcance de
                                            estas
                                            personas.</p>

                                    </div>
                                </div>

                                <!-- /isotope-grid-wrapper -->

                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('innovacion/detalle/beauty'))
                        <div id="content" class="site-content">
                            <main id="main">

                                <h2 class="section-header"> BEAUTY MODULE, 3 en 1 para Salones de belleza de Categoría
                                    A,
                                    solo para Profesionales.
                                </h2>

                                <!-- /work-item-slider-wrapper -->
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/innovaciones/beauty-module.jpg')}}" alt=""/>
                                </div>
                                <!-- /work-slider -->
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->

                                    <div class="page-content col-12">
                                        <p>
                                            Otra investigación dentro de la MYPES solicitadas por una propietaria de un
                                            Gran
                                            Spa- Salón de Belleza, se nos solicitó hacer una Investigación para mejorar
                                            la
                                            atención a sus clientes, debido a la demanda de atención y que ella notaba
                                            que
                                            algo tenía que hacer para agilizar la atención y el confort a sus clientes
                                            exigentes.
                                        </p>
                                        <p>
                                            Nos pidió realizar alguna innovación que distinga este negocio del resto de
                                            la
                                            competencia. Para esto hicimos un estudio detallado de las actividades
                                            cotidianas de este negocio aplicando I+D+i y obtuvimos como resultado, el
                                            Desarrollo de un Nuevo equipo Denominado “BEAUTY MODULE” que no es otra cosa
                                            que
                                            MODULO COMPACTO.
                                        </p>
                                        <!--<p>Otra investigación dentro de la MYPES solicitadas por una propietaria de un Gran
                                            Spa- Salón de Belleza, se nos solicitó hacer una Investigación para mejorar la
                                            atención a sus clientes, debido a la demanda de atención y que ella notaba que
                                            algo tenía que hacer para agilizar la atención y el confort a sus clientes
                                            exigentes.
                                            Nos pidió realizar alguna innovación que distinga este negocio del resto de la
                                            competencia. Para esto hicimos un estudio detallado de las actividades
                                            cotidianas
                                            de este negocio aplicando I+D+i y obtuvimos como resultado, el Desarrollo de
                                            un Nuevo equipo Denominado MODULO COMPACTO. Este mueble consiste en que todo
                                            el trabajo se realiza en un módulo cerrado con ingreso y salida de agua y que
                                            en un salón puede instalarse de 3 a 4 módulos, donde el cliente no está expuesto
                                            a las miradas del público usuario, no tiene que moverse de su sitio para todo
                                            el proceso de atención; es decir, corte, trabajo del cabello, lavado del
                                            cabello,
                                            etc. Todo en el mismo asiento. Con este módulo existe privacidad en el trato
                                            y sale del módulo con el trabajo completamente concluido, es algo así como
                                            entrar
                                            en una cámara del futuro y salir completamente renovado. Este módulo está basado
                                            en sistemas hidráulicos y mecánicos, sistema de bombeo de ingreso y evacuación
                                            de aguas residuales. Todo con energía 220V.
                                        </p>
                                        <p>La gran utilidad y ventaja de este módulo es que lo puedes usar en cualquier
                                            espacio
                                            donde desees poner tu negocio o módulo, por lo que requerirás solo de un punto
                                            de energía, ya que el módulo tiene todo y es portátil.</p>-->
                                    </div>
                                </div>

                                <!-- /isotope-grid-wrapper -->

                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('innovacion/detalle/desatoro'))
                        <div id="content" class="site-content">
                            <main id="main">

                                <h2 class="section-header">Desatoro de tolva de mineral, sin causar daño; utilizando
                                    carga
                                    pequeña de dinamita (plasta)
                                    y accionamiento de tolva por la velocidad del sonido.</h2>

                                <!-- /work-item-slider-wrapper -->
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/innovaciones/desatoro-de-tolva.jpg')}}" alt=""/>
                                </div>
                                <!-- /work-slider -->
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->

                                    <div class="page-content col-12">
                                        <p>En otra Operación minera se tenía el problema de atoros continuos en la tolva
                                            de
                                            carga, esta tolva era alimentada de carga desde la parte superior y al
                                            momento
                                            de vaciar la carga hacia esta tolva, esta quedaba atorada en el interior y
                                            por
                                            más que la puerta de la tolva se dejaba en la posición abierta, este mineral
                                            no caía. Para dar solución a este problema los mineros colocaban unos
                                            cartuchos
                                            de dinamita en la punta de una lanza de madera (atacador) y los ubicaban en
                                            el
                                            interior de la tolva, metida suavemente entre la carga atorada, a esto lo
                                            llamaban
                                            “plastear” para que caiga la carga.</p>
                                        <p>Luego las hacían detonar con la puerta de la tolva abierta (tomando los
                                            procedimientos
                                            para estos casos) para que esta explosión mueva la carga y elimine el
                                            atascamiento
                                            y de este modo la carga se soltaba y caía hacia el piso.</p>
                                        <p>La situación crítica que se presentaba después del disparo, era que la carga
                                            inundaba
                                            la galería y esto tomaba demasiado tiempo con equipos para la limpieza
                                            respectiva.</p>
                                        <p>La otra manera de hacer detonar, era con la puerta de la tolva cerrada; que
                                            también
                                            causaba daños a la compuerta por lo que requería una reparación por rotura o
                                            deformación de la plancha. Pues bien, En ambos casos ocasionaba pérdida de
                                            producción
                                            y daños colaterales.</p>
                                        <p>Haciendo el estudio con I+D+I se llegó a un diseño innovado de un control
                                            electro
                                            neumático remoto para el accionamiento de la compuerta de la tolva, que por
                                            acción
                                            de la velocidad del sonido se podía maniobrar desde lejos del lugar y cerrar
                                            la compuerta de la tolva sin causar daño alguno ni a la tolva, ni
                                            desparramar
                                            tanto mineral en la galería.</p>
                                    </div>
                                </div>

                                <!-- /isotope-grid-wrapper -->

                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('innovacion/detalle/dielectric'))
                        <div id="content" class="site-content">
                            <main id="main">

                                <h2 class="section-header">
                                    The Dielectric Floor trabaja en presencia de agua, es más que
                                    una manta
                                </h2>

                                <!-- /work-item-slider-wrapper -->
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/correcciones/The-Dielectric-floor.jpg')}}" alt=""/>
                                </div>
                                <!-- /work-slider -->
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->

                                    <div class="page-content col-12">
                                        <p>Las exigencias de Seguridad en las distintas operaciones mineras como en las
                                            distintas
                                            plantas industriales exigen un mayor control contra los riesgos eléctricos,
                                            razón
                                            de ello la Ley lo contempla y está Basado en las Normas de Seguridad De
                                            acuerdo
                                            al D.S. N° 009-2005-EM sobre el Reglamento de Seguridad y Salud en el
                                            Trabajo
                                            de las Actividades Eléctricas. En ella se señala claramente que es necesario
                                            el uso de una manta dieléctrica para las maniobras en circuitos de M.T. y
                                            A.T.</p>
                                        <p>Nuestra empresa aplicando la Técnica de I+D+i obtuvimos como resultado mejor
                                            que
                                            la llamada manta dieléctrica, un nuevo producto denominado DIELECTRIC FLOOR
                                            para
                                            solucionar esta necesidad de protección al personal electricista, es por
                                            ello
                                            que este Dieléctric floor tiene especificaciones técnicas definidas y
                                            utilizadas
                                            hoy en Minas. “EL PISO DIELÉCTRICO” EN NUESTRA REALIDAD OPERACIONAL, es Más
                                            que
                                            una Manta dieléctrica.</p>
                                    </div>
                                </div>

                                <!-- /isotope-grid-wrapper -->

                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('innovacion/detalle/hidraulico'))
                        <div id="content" class="site-content">
                            <main id="main">

                                <h2 class="section-header">Hidráulico Hoist-Carport</h2>

                                <div class=" mb-20">
                                    <img src="{{asset('web/img/portfolio/3big.jpg')}}" alt=""/>
                                </div>
                                <!-- /work-slider -->
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->

                                    <div class="page-content col-12">
                                        <p>Aquí se trata de elevar el vehículo hasta el 2° o 3° piso, donde se pueda
                                            guardar
                                            el carro, utilizando el 1° piso para situaciones más importantes, quien sabe
                                            de negocios cuando el espacio horizontal es insuficiente. Asimismo, se dan
                                            casos
                                            donde el vehículo es levantado hidráulicamente quedando asegurado y
                                            levantado,
                                            de este modo queda el espacio libre del 1° piso.</p>

                                    </div>
                                </div>

                                <!-- /isotope-grid-wrapper -->

                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('innovacion/detalle/insulating'))
                        <div id="content" class="site-content">
                            <main id="main">

                                <h2 class="section-header">
                                    El Kit Insulating, resuelve los problemas de sostenimiento y
                                    buen aislamiento de conductores aéreos (Trolley)
                                </h2>

                                <!-- /work-item-slider-wrapper -->
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/correcciones/KIT-INSULATING.jpg')}}" alt=""/>
                                </div>
                                <!-- /work-slider -->
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->

                                    <div class="page-content col-12">
                                        <p>Debido al análisis de fallas continuo de los aisladores en los sistemas de
                                            trolley,
                                            se aplicó I+D+i para solucionar este problema se inventó un nuevo diseño y
                                            se
                                            llevó previamente a someterlo a prueba y luego se ajustó el modelo final
                                            solucionando
                                            de esta manera este problema existente. Con esta invención se obtuvo el 2°
                                            puesto
                                            en el concurso de Innovaciones Tecnológicas del año 2010. Este trabajo
                                            consistió
                                            en un estudio previo de Investigación de dos años por los múltiples
                                            problemas
                                            que ocasionaban las paradas de producción por las constantes órdenes de
                                            trabajo
                                            de “Reparación del Trolley” y esto ocurría en la mayoría de las minas
                                            convencionales.
                                            El resultado de esta investigación resulto en el desarrollo de un nuevo
                                            soporte-aislador
                                            para las líneas DC de 250 V llamado Kit Insulating ó aislador conjunto.</p>
                                        <p>Las características más saltantes e importantes están en que tiene una buena
                                            base
                                            de sostenimiento, una forma ergonómica que evita el daño por el sulfato, el
                                            color
                                            que le permite servir de guía en la oscuridad y lo que es mejor, una buena
                                            capacidad
                                            de aislamiento en comparación a los aisladores de bronce que son imitaciones
                                            de las marcas originales.</p>
                                    </div>
                                </div>

                                <!-- /isotope-grid-wrapper -->

                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('innovacion/detalle/locomotora'))
                        <div id="content" class="site-content">
                            <main id="main">

                                <h2 class="section-header"> Transformación de locomotora de Batería, para trabajar a
                                    Trolley.
                                </h2>

                                <!-- /work-item-slider-wrapper -->
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/innovaciones/transformacion-de-locomotora.jpg')}}" alt=""/>
                                </div>
                                <!-- /work-slider -->
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->

                                    <div class="page-content col-12">
                                        <p>En otra operación minera las locomotoras a batería ya no eran usadas por el
                                            mismo
                                            hecho de no contar con personas que conozcan el mantenimiento y reparación
                                            de
                                            las baterías y las locomotoras. Generalmente estas locomotoras son de 0.5 a
                                            1.5
                                            TN. Pero en esta operación minera se tenían locomotoras de 6 TN y de Marca
                                            CLAYTON.
                                            Las personas que conocen bien de estas locomotoras Clayton sabemos muy bien
                                            que
                                            estas son muy buenas desde el pto. De vista de Estructuras, transmisión de
                                            potencia,
                                            sencillez del control, etc. por lo tanto en estos equipos se hicieron un
                                            estudio
                                            de I+D+i para resolver el problema de la falta de locomotoras para ampliar
                                            la
                                            producción, por esta razón se hicieron cambios sustanciales para que esta
                                            locomotora
                                            trabaje a Trolley.</p>
                                    </div>
                                </div>

                                <!-- /isotope-grid-wrapper -->

                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('innovacion/detalle/open'))
                        <div id="content" class="site-content">
                            <main id="main">

                                <h2 class="section-header">The open key, without key. Una llave de apertura sin usar
                                    llave</h2>

                                <div class=" mb-20">
                                    <img src="{{asset('web/img/portfolio/1big.jpg')}}" alt=""/>
                                </div>
                                <!-- /work-slider -->
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->

                                    <div class="page-content col-12">
                                        <p>Este estudio se trata de Fabricar un Dispositivo que se ubica en las cajas de
                                            todos
                                            los controles eléctricos y que la seguridad y la intervención por parte del
                                            personal
                                            autorizado, no tenga que estar usando demasiadas llaves, candados de cierre,
                                            etc. ya que se ha visto que, en una Planta Concentradora y/o mina de media y
                                            gran tonelaje, se tiene una buena cantidad de equipos eléctricos y que el
                                            personal
                                            a veces tiene que andar con una sarta de llaves como San Pedro, y esto
                                            evidentemente
                                            no es muy funcional.</p>
                                        <p>Con este nuevo sistema de cierre y apertura se hará más simple el trabajo y
                                            además
                                            solo el personal técnico autorizado, hará uso de estos dispositivos.</p>

                                    </div>
                                </div>

                                <!-- /isotope-grid-wrapper -->

                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('innovacion/detalle/protectora'))
                        <div id="content" class="site-content">
                            <main id="main">

                                <h2 class="section-header">Manta protectora contra el sol para vehículos, de uso
                                    automático</h2>

                                <div class=" mb-20">
                                    <img src="{{asset('web/img/portfolio/5big.jpg')}}" alt=""/>
                                </div>
                                <!-- /work-slider -->
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->

                                    <div class="page-content col-12">
                                        <p>
                                            El calentamiento Global está haciendo daño a nuestra tierra y parte de ella
                                            a los vehículo que están
                                            expuestos al SOL con altos grados de Temperatura y cualquier vehículo con
                                            artículos dentro como:
                                            celulares, CD’s y con los mismos componentes del vehículo; pueden originar
                                            Daños en dichos objetos
                                            mencionados y lo más grave, es que se tienen noticias que el incremento de
                                            la temperatura solar
                                            está ocasionando incendios inesperados desde el interior del vehículo, por
                                            tal razón estamos
                                            investigando como atenuar esta situación y protegerlos del Sol a cualquier
                                            tipo de vehículo que está
                                            expuesto en cualquier parqueo al aire libre.
                                        </p>

                                    </div>
                                </div>

                                <!-- /isotope-grid-wrapper -->

                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('innovacion/detalle/room'))
                        <div id="content" class="site-content">
                            <main id="main">

                                <h2 class="section-header">The new room of surround music</h2>

                                <div class=" mb-20">
                                    <img src="{{asset('web/img/portfolio/2big.jpg')}}" alt=""/>
                                </div>
                                <!-- /work-slider -->
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->

                                    <div class="page-content col-12">
                                        <p>Este estudio técnico trata de equipar cualquier hogar donde ya no se va a
                                            poder
                                            observar
                                            los equipos de Sonido, ni utilizar los muebles clásicos para estos equipos.
                                            Solo
                                            van a sentir los sonidos como que estuvieran en un concierto en vivo, donde
                                            los
                                            sonidos serán diferenciados como cuando la orquesta está en ese Ambiente.
                                            Solo
                                            encontrará un lugar escondido para su digitalización de todo el conjunto.
                                            Además,
                                            se podrá programar música variada de acuerdo a cada ambiente que lo
                                            necesite;
                                            es decir si el cuarto de papá quiere huaynos, se programará huaynos, si el
                                            de
                                            la hija quiere baladas, se programará solo baladas, si la mamá quiere
                                            Cumbias,
                                            se le programará para ese ambiente cumbias, etc. Los ambientes son acústicos
                                            y de sonido envolvente como si estuvieras en el mismo teatro.</p>

                                    </div>
                                </div>

                                <!-- /isotope-grid-wrapper -->

                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('innovacion/detalle/rotation'))
                        <div id="content" class="site-content">
                            <main id="main">

                                <h2 class="section-header">Rotation Restaurant</h2>

                                <div class=" mb-20">
                                    <img src="{{asset('web/img/portfolio/4big.jpg')}}" alt=""/>
                                </div>
                                <!-- /work-slider -->
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->

                                    <div class="page-content col-12">
                                        <p>Habíamos concebido la construcción de un Restaurant Turístico a 15 m. del
                                            suelo,
                                            pero que este restaurant tenga la particularidad de girar suavemente de 3° a
                                            6° por minuto. Esto permitirá la visualización de todo el contorno donde
                                            está
                                            ubicado. El ingreso se debería dar a través de un ascensor panorámico.</p>
                                        <p>Esta construcción evidentemente era para inversionistas que quieren sacar
                                            provecho
                                            de la zona donde están ubicados y que es una construcción fuera de lo común.
                                            Pero lo más importante es lo que habrá debajo de esta construcción. Útil
                                            solo
                                            para inversionistas que deseen innovación.</p>

                                    </div>
                                </div>

                                <!-- /isotope-grid-wrapper -->

                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('innovacion/detalle/sensor'))
                        <div id="content" class="site-content">
                            <main id="main">

                                <h2 class="section-header">Sensor de Atascamiento del Módulo (skip/jaula) en el momento
                                    de
                                    izaje</h2>


                                <!-- /work-item-slider-wrapper -->
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/correcciones/sensor-de-atascamiento.jpg')}}" alt=""/>
                                </div>
                                <!-- /work-slider -->
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->

                                    <div class="page-content col-12">
                                        <p>Una Empresa minera tenía dificultades muy graves en el momento de izaje de la
                                            jaula,
                                            las cuales se hacían más crítico en el momento del descenso de la otra jaula
                                            y con personal, haciendo que el cable de uno se vaya al otro
                                            compartimiento.</p>
                                        <p>Ya hubo anteriormente dos situaciones donde la jaula quedo atrapada a mitad
                                            de
                                            camino
                                            y el sobre esfuerzo del motor hizo que el equipo se neutralice por acción
                                            del
                                            relé de sobrecarga, pero este dispositivo de sobrecarga no actuaba al
                                            momento
                                            de bajar, ya que el motor no hace esfuerzo alguno, a pesar que ya la jaula
                                            estuvo
                                            trancada en una parte del pique.</p>
                                        <p>Esta situación era muy delicada y había que dar una solución al respecto.
                                            Este
                                            trabajo
                                            de I+D+i tomo un proceso de investigación permanente en la mina y analizar e
                                            investigar las situaciones y los causales de ocurrencia y una vez definidas
                                            las
                                            causas había que hacer una hipótesis de ocurrencia en cualquier lugar de la
                                            longitud
                                            del pique. </p>
                                        <p>Esta investigación era fundamental el conocimiento integral del Sistema
                                            Mecánico-eléctrico
                                            del Hoist o Winche de izaje, para contrastar y analizar que el problema no
                                            se
                                            originaba desde el equipo, sino que era una situación geológica más que de
                                            equipo,
                                            pero que ante esta situación fortuita inesperada había que darle una
                                            solución.</p>
                                        <p>Finalmente, después de varios meses de realizar I+D+i; se diseñó el
                                            Dispositivo
                                            Detector
                                            y después de ser instalado se realizaron pruebas y simulaciones de fallas en
                                            distintos niveles, lo cual resultó satisfactorio ya que este dispositivo
                                            neutralizaba
                                            el trabajo total del winche y mientras no se solucionaba esta zona de
                                            atascamiento
                                            no podía seguir trabajando el winche, ya que de lo contrario el riesgo de
                                            accidente
                                            que lamentar era muy alto y en mina, la Seguridad es prioridad y por ningún
                                            motivo
                                            se puede dar tolerancia a estas situaciones.</p>

                                    </div>
                                </div>

                                <!-- /isotope-grid-wrapper -->

                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('innovacion/detalle/speed'))
                        <div id="content" class="site-content">
                            <main id="main">

                                <h2 class="section-header">SPEED CONTROL, Dispositivo para controlar la Velocidad de
                                    locomotoras eléctricas de mina (Invento desarrollado y patentado en INDECOPI del Año
                                    2018).
                                </h2>

                                <!-- /work-item-slider-wrapper -->
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/portfolio/8big.jpg')}}" alt=""/>
                                </div>
                                <!-- /work-slider -->
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->

                                    <div class="page-content col-12">
                                        <p>
                                            Este Dispositivo desplaza a los controles clásicos existentes en el mundo
                                            minero. Posee menos componentes, su sistema es sencillo para el
                                            mantenimiento y
                                            reparación, los técnicos resolverán más rápido los problemas que se puedan
                                            presentar por la sencillez del concepto y de su fabricación; y lo MÁS
                                            IMPORTANTE, TIENE UN COSTO DEL 30%-40% MENOS, QUE LOS CONTROLES CLÁSICOS
                                            EXISTENTES. Además, reemplaza a cualquier tipo de marca de Controles de
                                            locomotoras existentes en ambiente minero, es decir es Universal.
                                        </p>
                                        <p>
                                            Este nuevo control nos ha tomado cerca de 5-8 años donde hemos tenido
                                            oportunidad
                                            de investigar estos equipos en minas peruanas, ecuatorianas, bolivianas,
                                            canadienses, australianas, francesas, chinas, etc., etc. y ninguna de ellas
                                            se
                                            parece a lo que hemos podido concebir, razón de ella INDECOPI nos otorgó la
                                            Patente como Invento.
                                        </p>
                                        <p>
                                            Consideramos que este nuevo Control va a marcar el paso de una Nueva
                                            Tecnología
                                            para el Control de las Locomotoras en nuestro ambiente minero, porque la
                                            simplicidad del diseño, hace que contenga pocos componentes y Ítems para
                                            controlar la velocidad de locomotoras, esto servirá para cualquier tipo,
                                            modelo
                                            y marca de locomotora alguna. Actualmente estamos en Proceso de fabricación
                                            de
                                            un 1° Prototipo.
                                        </p>
                                        <p>
                                            Otro uso secundario también se puede acondicionar para el control de molinos
                                            secundarios que poseen motor con rotor bobinado y también para el control de
                                            grúas de rotor bobinado por ser más económicas.
                                        </p>

                                        <!--<p>Este Dispositivo desplaza a los controles clásicos existentes en el mundo minero.
                                            Posee menos
                                            componentes, su sistema es sencillo para el mantenimiento y reparación, los
                                            técnicos resolverán
                                            más rápido los problemas que se puedan presentar por la sencillez del concepto y
                                            de su
                                            fabricación; y lo MÁS IMPORTANTE, TIENE UN COSTO DEL 30%-40% MENOS, QUE LOS
                                            CONTROLES CLÁSICOS EXISTENTES. Además, reemplaza a cualquier tipo de marca de
                                            locomotoras, es decir es Universal.</p>
                                        <p>Este nuevo control nos ha tomado cerca de 5-8 años donde hemos tenido oportunidad
                                            de
                                            investigar estos equipos en minas ecuatorianas, peruanas, bolivianas,
                                            canadienses, australianas,
                                            francesas, chinas, etc., etc. y ninguna de ellas se parece a lo que hemos podido
                                            concebir, razón
                                            de ella INDECOPI nos otorgó la Patente como Invento.</p>
                                        <p>Consideramos que este nuevo Control va a marcar el paso de una Nueva Tecnología
                                            para el
                                            Control de las Locomotoras en nuestro ambiente minero, porque la simplicidad del
                                            diseño, hace
                                            que contenga pocos componentes y Ítems para controlar la velocidad de
                                            locomotoras, esto
                                            servirá para cualquier tipo, modelo y marca de locomotora alguna. Otro uso
                                            secundario también
                                            se puede acondicionar para el control de molinos secundarios que poseen motor
                                            con rotor
                                            bobinado y control de grúas de rotor bobinado.</p>-->
                                    </div>
                                </div>

                                <!-- /isotope-grid-wrapper -->

                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('innovacion/detalle/supergramp'))
                        <div id="content" class="site-content">
                            <main id="main">

                                <h2 class="section-header">
                                    La Supergramp. Sujetadores que no soltará al trolley, aún en curvas
                                    cerradas.
                                </h2>

                                <!-- /work-item-slider-wrapper -->
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/correcciones/Supergramp-seguro.jpg')}}" alt=""/>
                                </div>
                                <!-- /work-slider -->
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->

                                    <div class="page-content col-12">
                                        <p>En la mayoría de las Operaciones mineras del tipo convencional se tenía una
                                            serie
                                            de problemas
                                            con las grampas de sujeción del sistema Trolley (conductor desnudo de cobre
                                            por
                                            donde recorre
                                            la energía DC a lo largo de la galería) y las consecuencias de estas fallas
                                            traían consigo una serie
                                            de riesgos y problemas permanentes, paradas de equipos, pérdidas de
                                            producción,
                                            etc., etc. En
                                            base a la actividad de I+D+I, se desarrolló un nuevo producto denominado
                                            Supergramp; el cual
                                            no permitía desengraparse fácilmente lo cual lo hacía más difícil la
                                            sustracción
                                            del trolley,
                                            asimismo en curvas cerradas este dispositivo se comportaba mejor el cual
                                            impedía
                                            la salida del
                                            trolley por efecto mismo del tiro de templado.</p>
                                    </div>
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

@endsection
