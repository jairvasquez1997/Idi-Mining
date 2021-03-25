@extends('web.layout._layout')
@section('content')
    @include('audio01')
    <section id="sub-header" class="section bg-parallax pb-0" data-background="{{asset('web/img/bg/demo.jpg')}}">
        <div class="bg-overlay-black bg-overlay-5"></div>
        <div class="container">
            <div class="sub-wrapper">
                <h1> SERVICIOS</h1>


                <div class="breadcrumb-container clearfix">
                    <span>ESTÁS AQUÍ: </span>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('/')}}">Home</a>
                        </li>
                        <li>
                            Servicios
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

                    @if(Request::is('servicio/actividades'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">ACTIVIDADES PARA LA COMUNIDAD</h2>
                                <div class="mb-20">
                                    <img src="{{asset('web/img/servicio/actividades-para-la-comunidad.jpg')}}" alt=""/>
                                    <!-- /work-slider -->
                                </div>
                                <!-- /work-item-slider-wrapper -->
                                <div class="divider pt-20"></div>
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">
                                        <p>Nuestra labor institucional como empresa privada, también destina parte de sus
                                            fondos
                                            en apoyar a nuestra población emergente y tiene un contenido y matiz de apoyo
                                            social a nuestra comunidad, POR ESTA RAZÓN la mayor parte de nuestro personal
                                            son en la mayoría mujeres de la zona, que es nuestro mayor capital para el
                                            desarrollo
                                            de sus actividades de nuestra empresa; asimismo apoyamos al desarrollo de las
                                            MYPES de nuestra zona y tenemos la aspiración de proyectarnos a ser un Clúster
                                            en nuestro cono Norte o algo así como El Silicon Valley del Cono Norte.</p>
                                        <p>Aparte de nuestras actividades comerciales, nos identificamos con acciones
                                            sociales
                                            de apoyo a las zonas de nuestro entorno; también hemos realizado actividades
                                            de recreación para nuestra juventud; ejemplo de ello celebramos el Día del Niño,
                                            asimismo para un sector de nuestra zona hicimos Una Chocolatada por Navidad,
                                            de este modo hacemos actividades de apoyo y así nos identificamos con nuestro
                                            entorno y de nuestra comunidad para ayudarlos a innovar en sus negocios y que
                                            de esta manera puedan generar sus propios ingresos. Solo con desarrollo de
                                            innovaciones
                                            las pymes se mantendrán activas y podrán ampliar su cuota de mercado.</p>
                                        <p>Veamos alguna de nuestras actividades a la comunidad de parte de nuestra empresa
                                            IDI MINING:</p>
                                        <ul class="list-style" style="">
                                            <li>
                                                Chocolatada realizada en diciembre 2009 en la zona denominada San Diego, el
                                                cual está ubicado al final de la carretera al
                                                IPEN. Veamos esta acción con el siguiente link 2.- “Chocolatada navideña”.
                                            </li>

                                            <li>Otra actividad en homenaje a nuestra futura generación, se hizo la
                                                celebración
                                                por el día del niño frente a nuestra Sede. Ver el siguiente Link
                                            </li>
                                            <li>“Día
                                                del Niño”.
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /page-content -->


                                    <!-- /page-media -->
                                </div>
                                <!-- /page-grid -->


                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('servicio/empresas'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">SERVICIOS PARA EMPRESAS</h2>
                                <div class="mb-20">
                                    <img src="{{asset('web/img/servicio/para-empresas.jpg')}}" alt=""/>
                                    <!-- /work-slider -->
                                </div>
                                <!-- /work-item-slider-wrapper -->
                                <div class="divider pt-20"></div>
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">
                                        <p>Cuando nos referimos a trabajos de I +D + I, esto implica todo un proceso serio
                                            responsable
                                            y nos es solo Imaginación y punto, tener ideas es sencillo, tener buenas ideas
                                            y llevarlo a un prototipo ya es más complicado; es por ello que nuestro reto
                                            del IDI MINING es Generar continuamente buenas ideas y convertirlas en productos
                                            y servicios para nuestros clientes. Las palabras del ilustre Profesor Peter
                                            Drucker
                                            mencionan lo siguiente: “Más que genialidad, la innovación es un trabajo
                                            duro”.</p>
                                        <p>Razón tenía el Pionero de las Innovaciones e Invenciones que cambio la vida al
                                            mundo
                                            entero como es el Gran Thomas Alva Edison cuando decía: “los inventores solo
                                            requieren un 10% de Inspiración y 90% de Transpiración” ................ Es
                                            decir,
                                            bastante trabajo.</p>
                                        <p>Bajo ese concepto. Un trabajo por el cual podemos definir a nuestro modo como
                                            inventores,
                                            les puedo mencionar que hay TRES modos de hacer innovaciones importantes; pero
                                            que DOS de ellas se aplican a este sector de minería y petróleo y el 1° Modo
                                            lo vemos después de estas Dos que consideramos más importantes, estas son:</p>
                                    </div>
                                    <!-- /page-content -->


                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="panel-group" id="accordion1">
                                                <div class="panel">
                                                    <button class="panel-btn" type="button" data-parent="#accordion1"
                                                            data-toggle="collapse" data-target="#content1"
                                                            aria-expanded="true"
                                                            aria-controls="content1">
                                                        MODO DE HACER INNOVACIÓN. - INNOVACION DE PROCESO.
                                                    </button>
                                                    <div id="content1" class="collapse in" aria-expanded="true">

                                                        <p>Nuestra empresa mantiene la filosofía de “siempre hay una mejor
                                                            forma
                                                            de hacer las cosas” y bajo este concepto hemos visto que el
                                                            hábito
                                                            y la costumbre de hacer lo mismo, a veces nos acostumbramos y
                                                            nos mimetizamos con el proceso y pensamos que todo está bien
                                                            y siempre lo hicimos de esa manera, pero un profesional
                                                            entendido
                                                            en esta actividad de I + D + I tiene mayor predisposición a
                                                            encontrar
                                                            detalles que sin lugar a dudas pueden cambiar su modus operandi,
                                                            es por ello la importancia de redefinir todo el proceso. Deje
                                                            a los especialistas que hagan este trabajo, para eso nos
                                                            especializamos.</p>
                                                    </div>
                                                    <!-- /collapse #content1 -->
                                                </div>
                                                <!-- /panel -->

                                                <div class="panel">
                                                    <button class="panel-btn collapsed" type="button"
                                                            data-parent="#accordion1" data-toggle="collapse"
                                                            data-target="#content2"
                                                            aria-expanded="false" aria-controls="content2">
                                                        MODO DE HACER INNOVACIÓN - INNOVACION EN TECNOLOGIA
                                                    </button>
                                                    <div id="content2" class="collapse" aria-expanded="false">
                                                        <p>Es decir la aplicación del conocimiento científico para ser más
                                                            eficiente
                                                            y seguro, las empresas que no lo hacen, se van quedando en el
                                                            tiempo y en tecnología, algo así como seguir utilizando máquina
                                                            de escribir mecánica que solo hace letras, y dejar de lado las
                                                            Pc. que es más completa para otros usos.
                                                            <br> A veces esto ocurre en empresas que no rompen ese paradigma
                                                            de que las innovaciones tecnológicas, vienen solo de “grandes
                                                            empresas y que la nueva Tecnología sean Extranjeras”, este
                                                            pensamiento
                                                            a veces se da todavía en empresas que no abren su espacio de
                                                            progreso y piensan que la Tecnología nueva son costosas; cuando
                                                            en realidad no siempre es así. Una Innovación Tecnológica se
                                                            define como requisito; tener novedades en su forma, uso,
                                                            construcción,
                                                            funciones, etc. y sobre todo resuelve problemas escondidos, son
                                                            funcionales y otorga economía.
                                                            <br> Bajo este concepto las proposiciones tecnológicas que
                                                            hacemos,
                                                            como por ejemplo el uso del “Dielectric floor”, no son otra cosa
                                                            que usar las innovaciones tecnológicas.
                                                            <br> Como nuestra empresa genera innovaciones tecnológicas que
                                                            no
                                                            existía en el mercado, podríamos decir que son tecnología de
                                                            punta, esto para nosotros no es correcto pues consideramos que
                                                            en todos los sectores se puede innovar gracias a la gestión de
                                                            la tecnología. Por lo tanto, tampoco somos partidarios en decir
                                                            que hay sectores con tecnología de punta y otras con baja
                                                            tecnología.
                                                            La nueva tecnología se puede gestar desde algún taller por más
                                                            simple que sea, por lo tanto, la Tecnología no es propia de las
                                                            grandes empresas sino del que la concibe y la desarrolla; por
                                                            esa característica y habilidad de adelantarse el presente para
                                                            facilitar el Futuro.
                                                            <br> Nuestra empresa tiene como misión mantener un proceso
                                                            continuo
                                                            de Innovación en cualquier actividad productiva o comercial,
                                                            es por ello que siempre estamos con los 7 sentidos atentos y
                                                            en estado de alerta máxima, predispuestos, en guardia y con la
                                                            mente bien abierta para detectar las oportunidades y desafíos
                                                            que tiene el quehacer diario.
                                                            <br> EN IDI MINING POSEEMOS UN EQUIPO DE PROFESIONALES CUYA
                                                            DINÁMICA
                                                            ES ACTIVAR I + D + I; que Consiste en:
                                                            <br>
                                                            <span>
                                                                <strong>a) </strong> El asesoramiento tecnológico. - para detectar
                                                                las necesidades tecnológicas básicas y definir el equipamiento
                                                                y servicios Tecnológicos adaptados a su realidad, y las Recomendaciones
                                                                de cursos de formación.</span>
                                                            <br>
                                                            <span>
                                                                <strong>b) </strong> Soporte técnico. - uso de la Web de nuestra
                                                                empresa para el marketing de su PRODUCTO, del Investigador
                                                                y el Apoyo de nuestros profesionales en Marketing; asimismo
                                                                el uso del taller propio para el diseño y construcción del
                                                                nuevo prototipo y de los productos en procesos de fabricación
                                                                para el mercado que tenemos que atender.</span>
                                                            <br>
                                                            <span>
                                                                <strong>c) </strong> Como ya habíamos definido la 2da. Y 3ra forma
                                                                de hacer Innovación, vamos a ver la 1ra. Forma.</span>
                                                        </p>

                                                    </div>
                                                    <!-- /collapse #content1 -->
                                                </div>

                                                <div class="panel">
                                                    <button class="panel-btn collapsed" type="button"
                                                            data-parent="#accordion1" data-toggle="collapse"
                                                            data-target="#content3"
                                                            aria-expanded="false" aria-controls="content3">
                                                        MODO DE HACER INNOVACION: INNOVACIÓN DE PRODUCTOS Y/O SERVICIOS
                                                    </button>
                                                    <div id="content3" class="collapse" aria-expanded="false">

                                                        <p>Esta actividad encaja bien para las PYMES que necesitan
                                                            desarrollarse
                                                            para poder competir y ganar el mercado, ya que nos referimos
                                                            a los productos y/o servicios que producen y los procesos de
                                                            fabricación o comercialización, que para mejorar sus ventas
                                                            deben
                                                            necesariamente ser el mejor, es decir el mejor producto o
                                                            servicio
                                                            con características de Innovación, de tal manera que se
                                                            diferencie
                                                            dentro de todos los productos similares que existen en el
                                                            mercado,
                                                            o quizás UN NUEVO PRODUCTO.
                                                            <br> Es necesario que las PYMES rompan los paradigmas de que el
                                                            Desarrollo
                                                            y Progreso viene por la fuerza del destino y de la suerte y otro
                                                            que los costos de estos servicios son muy costosos y que solo
                                                            están al alcance de las grandes empresas.
                                                            <br> Esto es Totalmente FALSO. También hay innovación en la
                                                            manera
                                                            de conseguir Capital y Socios.
                                                            <br> Los costos son bastante económicos y en algunos casos este
                                                            costo
                                                            es compartido, es decir si el proyecto de Innovación en un Nuevo
                                                            producto. es de mucha importancia para ambos; estos costos serán
                                                            proporcionales al interés y al trabajo que desarrolla cada uno
                                                            de los participantes. De allí la razón de hacer un Joint
                                                            Venture.</p>
                                                    </div>
                                                    <!-- /collapse #content1 -->
                                                </div>
                                                <!-- /panel -->
                                            </div>
                                            <!-- /panel-group -->
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                    <!-- /page-media -->
                                </div>
                                <!-- /page-grid -->


                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('servicio/mineria_petroleo'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">IDI PARA MINERÍA Y PETRÓLEO</h2>
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/servicio/mineria-y-petroleo.jpg')}}" alt=""/>
                                    <!-- /work-slider -->
                                </div>
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">

                                        <h4>¿QUÉ ES INNOVACIÓN TECNOLÓGICA EN EL ÁMBITO MINERO Y PORQUÉ NOS ELIGEN PARA
                                            RESOLVER
                                            PROBLEMAS?
                                        </h4>

                                        <p>Innovación Tecnológica en el ámbito minero; es la Aplicación de Nuevas Técnicas,
                                            Conceptos, Productos, Servicios y Prácticas con la intención de ser útiles para
                                            el Incremento de la Productividad. Y un elemento principal e importante de las
                                            innovaciones que desarrolla “IDI MINING & INDUSTRIES “es: la PRAXIS o el Modus
                                            Vivendi Operandi de nuestro equipo innovador, las cuales han sentido y vivido
                                            en carne propia los diversos problemas existentes al desarrollar su trabajo
                                            diario
                                            en las Operaciones mineras, evidentemente existe una experiencia acumulada por
                                            más de 30 años entre sus empleados, estas vivencias son acumulados en distintas
                                            minas nacionales y extranjeras, distintos procesos de explotación y en
                                            diferentes
                                            Países de América del Sur y Oceanía.</p>
                                        <p>
                                            Nuestros productos no solo se han inventado, sino que actualmente están
                                            instalados y trabajando en distintas minas, es por
                                            ello que podemos decir con convicción, que les resuelve positivamente una serie
                                            de problemas de una operación minera; el personal de operaciones mina, no tenía
                                            el tiempo ni la dedicación exclusiva para analizar y resolver los problemas de
                                            fondo, de diseño o de una realidad propia que difiere de otras operaciones
                                            mineras,
                                            además no era su función. Ellos necesitaban Producir y punto.
                                        </p>
                                        <p>IDI MINING & INDUSTRIES no solo se trata de Análisis e Imaginación, nuestras
                                            innovaciones
                                            previamente son iteradas o sometidas a la prueba de rigor; haciéndolo trabajar
                                            en las mismas operaciones según el sector y finalmente corregir y ajustar las
                                            características propias para un diseño final. Nuestros productos en el mercado,
                                            son el resultado final de todo un trabajo de Profesionales en I + D + I.</p>
                                        <p>Es cierto que Brasil es pionera en Biocombustible, Argentina en Técnicas del
                                            agro,
                                            Chile en silvicultura y ahora Perú que desarrollo la Gastronomía, también lo
                                            hará con Nuevas Tecnologías de Elementos de Infraestructura minera para una
                                            mejor
                                            Productividad.</p>
                                    </div>
                                    <!-- /page-content -->
                                    <div class="divider"></div>


                                    <!-- /page-media -->
                                </div>
                                <!-- /page-grid -->


                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('servicio/objetivo'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">OBJETO SOCIAL</h2>
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/servicio/objeto-social.jpg')}}" alt=""/>
                                    /work-slider
                                </div>
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">
                                        <p>Nuestra empresa tiene un Objeto social, una Misión y una Visión por las cuales
                                            están
                                            regidas todas nuestras actividades, por ello es necesario que se conozcan como
                                            tal. Evidentemente que con el tiempo pueden variar sustancialmente nuestras
                                            actividades
                                            a fin de darle Progreso y Desarrollo a nuestra institución, pero “I + D + I”
                                            es nuestra base de acción.</p>
                                    </div>
                                    <!-- /page-content -->
                                    <div class="divider"></div>

                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="panel-group" id="accordion1">
                                                <div class="panel">
                                                    <button class="panel-btn" type="button" data-parent="#accordion1"
                                                            data-toggle="collapse" data-target="#content1"
                                                            aria-expanded="true"
                                                            aria-controls="content1">
                                                        Investigación Técnica y Sistemática
                                                    </button>
                                                    <div id="content1" class="collapse in" aria-expanded="true">
                                                        <p>Realizamos Investigación Técnica y Sistemática sobre Ciencia y
                                                            Tecnología
                                                            de los diversos problemas operativos que acontecen en el ámbito
                                                            minero y Petrolero; de tal modo de aplicar I + D + I para buscar
                                                            una solución sui generis y que sea económico, para resolver los
                                                            distintos problemas que se nos plantean.
                                                        </p>
                                                    </div>
                                                    <!-- /collapse #content1 -->
                                                </div>
                                                <!-- /panel -->

                                                <div class="panel">
                                                    <button class="panel-btn collapsed" type="button"
                                                            data-parent="#accordion1" data-toggle="collapse"
                                                            data-target="#content2"
                                                            aria-expanded="false" aria-controls="content2">
                                                        Experiencia en el Ámbito Minero
                                                    </button>
                                                    <div id="content2" class="collapse" aria-expanded="false">
                                                        <p>
                                                            Con la experiencia de más de 30 años en el ámbito minero, garantizamos un amplio conocimiento de
                                                            los equipos mineros, para su Reparación, Mantenimiento y Venta de Nueva Tecnología para las
                                                            operaciones mineras. Esto nos permite desarrollar NUEVOS PRODUCTOS, NUEVOS CONTROLES PARA
                                                            LOCOMOTORAS ELÉCTRICAS Y OTROS MÁS”.
                                                        </p>
                                                    </div>
                                                    <!-- /collapse #content1 -->
                                                </div>
                                                <!-- /panel -->

                                                <div class="panel">
                                                    <button class="panel-btn collapsed" type="button"
                                                            data-parent="#accordion1" data-toggle="collapse"
                                                            data-target="#content3"
                                                            aria-expanded="false" aria-controls="content3">
                                                        Desarrollamos trabajos de I + D + I
                                                    </button>
                                                    <div id="content3" class="collapse" aria-expanded="false">
                                                        <p>Desarrollamos trabajos de I + D + I para resolver problemas
                                                            técnicos
                                                            que afectan la Producción normal, así como ejecutar innovaciones
                                                            para Mejorar la Productividad y la Simplificación de Trabajos,
                                                            que conlleven al ahorro de tiempo, espacio y sobre todo la
                                                            DISMINUCIÓN
                                                            DE IMPUESTOS HASTA EN UN 150% APLICANDO LA LEY 30309.
                                                        </p>
                                                    </div>
                                                    <!-- /collapse #content1 -->
                                                </div>
                                                <!-- /panel -->

                                                <div class="panel">
                                                    <button class="panel-btn collapsed" type="button"
                                                            data-parent="#accordion1" data-toggle="collapse"
                                                            data-target="#content4"
                                                            aria-expanded="false" aria-controls="content4">
                                                        Promovemos y desarrollamos Escuelas Técnicas
                                                    </button>
                                                    <div id="content4" class="collapse" aria-expanded="false">
                                                        <p>Promovemos y desarrollamos Escuelas Técnicas de Formación
                                                            específica
                                                            y Especialización vía PRAXIS, con ahorros de tiempo y Economía.
                                                        </p>
                                                    </div>
                                                    <!-- /collapse #content1 -->
                                                </div>
                                                <!-- /panel -->

                                                <div class="panel">
                                                    <button class="panel-btn collapsed" type="button"
                                                            data-parent="#accordion1" data-toggle="collapse"
                                                            data-target="#content5"
                                                            aria-expanded="false" aria-controls="content5">
                                                        Promovemos y realizamos FERIAS
                                                    </button>
                                                    <div id="content5" class="collapse" aria-expanded="false">
                                                        <p>Promovemos y realizamos FERIAS REGIONALES, NACIONALES E
                                                            INTERNACIONALES
                                                            de las Innovaciones Desarrolladas por “IDI MINING & INDUSTRIES
                                                            “, así como de sus asociados, y otros desarrollos técnicos e
                                                            innovaciones que cree conveniente promocionar. Utilizando Un
                                                            Slogan Propio denominado: “Perú, País de Innovadores e
                                                            inventores”.
                                                        </p>
                                                    </div>
                                                    <!-- /collapse #content1 -->
                                                </div>
                                                <!-- /panel -->

                                                <div class="panel">
                                                    <button class="panel-btn collapsed" type="button"
                                                            data-parent="#accordion1" data-toggle="collapse"
                                                            data-target="#content6"
                                                            aria-expanded="false" aria-controls="content6">
                                                        Asistencia Técnica
                                                    </button>
                                                    <div id="content6" class="collapse" aria-expanded="false">
                                                        <p>Asistencia Técnica con personal para ejecutar trabajos de
                                                            Instalaciones
                                                            a Empresas Mineras, Metalúrgicas e Industrias conexas, con
                                                            Aplicación
                                                            de estándares de Seguridad para materializar una buena Gestión
                                                            en el área. Con aplicación de las Innovaciones existentes y
                                                            desarrolladas.
                                                        </p>
                                                    </div>
                                                    <!-- /collapse #content1 -->
                                                </div>
                                                <!-- /panel -->
                                            </div>
                                            <!-- /panel-group -->
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                    <!-- /page-media -->
                                </div>
                                <!-- /page-grid -->


                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('servicio/otros_sectores'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">IDI PARA OTROS SECTORES</h2>
                                <div class=" mb-20">
                                    <img src="{{asset('web/img/servicio/idi-para-mineria-y-petroleo.jpg')}}" alt=""/>
                                    <!-- /work-slider -->
                                </div>
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">

                                        <p>
                                            Los desarrollos e innovaciones se están dando en cualquier campo de la actividad de
                                            producción y de la actividad humana, por lo tanto; también se dan en la Educación, en
                                            nuevos sistemas, nuevos productos, nuevas actividades profesionales; tal es así que
                                            estamos realizando Desarrollos en el campo del Hogar y la Familia, En la Arquitectura, en
                                            desarrollo de Nuevos Juguetes para recuperar la Imaginación y desprenderse de los juegos
                                            digitales, que más que diversión traen estanqueidad e inactividad física, obesidad, etc. En
                                            realidad, el campo de la actividad de I + D + i es bastante amplio y seguimos investigando y
                                            desarrollando
                                        </p>
                                    </div>
                                    <!-- /page-content -->
                                    <div class="divider"></div>


                                    <!-- /page-media -->
                                </div>
                                <!-- /page-grid -->


                                <!-- /page-grid -->
                            </main>
                        </div>
                    @elseif(Request::is('servicio/premiados'))
                        <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">PREMIADOS POR INNOTEC 2010</h2>
                                <div class="work-slider mb-20">
                                    <img src="{{asset('web/img/servicio/premio1.jpg')}}" alt=""/>
                                    <img src="{{asset('web/img/correcciones/premio2.jpg')}}" alt=""/>
                                    <img src="{{asset('web/img/correcciones/KIT-INSULATING-2.jpg')}}" alt=""/>
                                    <img src="{{asset('web/img/servicio/premio5.jpg')}}" alt=""/>
                                    <img src="{{asset('web/img/correcciones/premio4.jpg')}}" alt=""/>
                                    <!-- /work-slider -->
                                </div>
                                <div class="work-item-slider-wrapper">
                                    <div class="work-item-slider">
                                        <a href="#">
                                            <img src="{{asset('web/img/servicio/premio1.jpg')}}" alt=""/>
                                        </a>
                                        <a href="#">
                                            <img src="{{asset('web/img/correcciones/premio2.jpg')}}" alt=""/>
                                        </a>
                                        <a href="#">
                                            <img src="{{asset('web/img/correcciones/KIT-INSULATING-2.jpg')}}" alt=""/>
                                        </a>
                                        <a href="#">
                                            <img src="{{asset('web/img/servicio/premio5.jpg')}}" alt=""/>
                                        </a>
                                        <a href="#">
                                            <img src="{{asset('web/img/correcciones/premio4.jpg')}}" alt=""/>
                                        </a>
                                    </div>
                                    <!-- /work-slider -->
                                </div>
                                <!-- /work-item-slider-wrapper -->
                                <div class="divider pt-20"></div>
                                <div class="page-grid">
                                    <!-- GRID 9 COLUMNS -->
                                    <div class="page-content col-12">
                                        <p>Nosotros somos la segunda empresa del Perú, que crea innovación tecnológica. En
                                            el
                                            concurso nacional INNOTEC 2010 auspiciado por CONCYTEC y otras instituciones
                                            importantes, nuestros Ing. Senior Innovator nos representó ocupando el 2° puesto
                                            en desarrollar “Innovación Tecnológica” con un trabajo de investigación en
                                            minería
                                            de casi 3 a 4 años en distintas operaciones mineras nacionales como extranjeras.
                                            Finalmente, con los ingresos que genera toda nuestras Invenciones, nos alienta
                                            a reinvertir en otros trabajos de I+D+I que están a la espera por falta de
                                            capital
                                            para continuar nuestros desarrollos y fabricación de prototipos, para los
                                            respectivos
                                            análisis y someterlo a pruebas de rigor.</p>
                                    </div>
                                    <!-- /page-content -->


                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="panel-group" id="accordion1">
                                                <div class="panel">
                                                    <button class="panel-btn" type="button" data-parent="#accordion1"
                                                            data-toggle="collapse" data-target="#content1"
                                                            aria-expanded="true"
                                                            aria-controls="content1">
                                                        Concurso INNOTEC 2010: Categoría Innovaciones, Sub Categoría Micro Y
                                                        Pequeña Empresa
                                                    </button>
                                                    <div id="content1" class="collapse in" aria-expanded="true">

                                                        <ul class="list-style"
                                                            style="border-left: 1px solid #ddd;border-right: 1px solid #ddd;padding: 20px 25px;background: #f9f9f9;">
                                                            <li>
                                                                AISLADOR CONJUNTO (Antonio Cárdenas de la Torre,
                                                                Representando a la Empresa: IDI MINING & INDUSTRIES S.A.C.
                                                            </li>
                                                            <span>Jurado calificador de los trabajos presentados en este concurso INNOTEC 2010</span>
                                                            <li> Fernando Gutiérrez, Ex Ministro de Ciencia y Tecnología,
                                                                Costa Rica.
                                                            </li>
                                                            <li> Dr. Augusto Mellado Méndez, presidente del CONCYTEC.</li>
                                                            <li>José Ramón Perán, Coordinador Proyectos IBEROEKA.</li>
                                                            <li>Raquel Lorenzo García, GECYT, Cuba.</li>
                                                        </ul>

                                                    </div>
                                                    <!-- /collapse #content1 -->
                                                </div>
                                                <!-- /panel -->

                                                <div class="panel">
                                                    <button class="panel-btn collapsed" type="button"
                                                            data-parent="#accordion1" data-toggle="collapse"
                                                            data-target="#content2"
                                                            aria-expanded="false" aria-controls="content2">
                                                        Concurso 2014: Premio a la Investigación en Ingeniería, Organizado
                                                        por la Empresa Graña y Montero.
                                                    </button>
                                                    <div id="content2" class="collapse" aria-expanded="false">
                                                        <p>Nuestro Ing. Antonio Cárdenas estuvo entre los Finalistas. La
                                                            Ganadora
                                                            fue una compañera de su alma mater la UNI.
                                                            <br>La entrega del premio fue presidida por Mario Alvarado
                                                            Pflucker,
                                                            gerente general corporativo del Grupo Graña y Montero; por el
                                                            Ing. Carlos Herrera Descalzi, decano nacional del Colegio de
                                                            Ingenieros del Perú y por el Ing. Carlos Morelli Zavala,
                                                            presidente
                                                            de la Academia Peruana de Ingeniería.
                                                        </p>
                                                    </div>
                                                    <!-- /collapse #content1 -->
                                                </div>
                                                <!-- /panel -->
                                            </div>
                                            <!-- /panel-group -->
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

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
                                    <li @if(Request::is('servicio/objetivo'))  class="active" @endif>
                                        <a href="{{route('servicio','objetivo')}}" class="btn btn-gray fullwidth text-left">Objeto Social</a>
                                    </li>
                                    <li @if(Request::is('servicio/mineria_petroleo'))  class="active" @endif>
                                        <a href="{{route('servicio','mineria_petroleo')}}" class="btn btn-gray fullwidth text-left">IDI para Minería y
                                            Petróleo</a>
                                    </li>
                                    <li @if(Request::is('servicio/otros_sectores'))  class="active" @endif>
                                        <a href="{{route('servicio','otros_sectores')}}" class="btn btn-gray fullwidth text-left">IDI para otros Sectores</a>
                                    </li>
                                    <li @if(Request::is('servicio/premiados'))  class="active" @endif>
                                        <a href="{{route('servicio','premiados')}}" class="btn btn-gray fullwidth text-left">Premiados por INNOTEC
                                            2010</a>
                                    </li>
                                    <li @if(Request::is('servicio/empresas'))  class="active" @endif>
                                        <a href="{{route('servicio','empresas')}}" class="btn btn-gray fullwidth text-left">Servicios para Empresas</a>
                                    </li>
                                    <li @if(Request::is('servicio/actividades'))  class="active" @endif>
                                        <a href="{{route('servicio','actividades')}}" class="btn btn-gray fullwidth text-left">Actividades para la
                                            Comunidad</a>
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
