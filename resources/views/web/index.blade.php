@extends('web.layout._layout')
@section('content')
    @include('audio01')
    <section id="home-media" class="section pt-0 pb-0" data-home-media="815">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <!-- SLIDE 1  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="500"
                        data-thumb="{{asset('web/img/slider/thumb/thumb-7.jpg')}}" data-saveperformance="on"
                        data-title="Slider 1">

                        <!-- MAIN IMAGE -->
                        <img src="{{asset('web/img/slider/SLIDER01.jpg')}}" alt="slidebg1" class="test">

                        <!--<img src="{{asset('web/img/slider/dummy.png')}}"  alt="slidebg1" class="test" data-lazyload="img/slider/SLIDER01.jpg')}}" data-bgposition="" data-bgfit=""
                            data-bgrepeat="no-repeat">-->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption grey_heavy_72 lfl tp-resizeme rs-parallaxlevel-0 tp-headline"
                             data-x="center"
                             data-y="375"
                             data-speed="500"
                             data-start="1350"
                             data-easing="Power3.easeInOut"
                             data-splitin="lines"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;">IDI MINING &
                            INDUSTRIES
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption grey_heavy_72 lfr tp-resizeme rs-parallaxlevel-0 tp-headline-3"
                             data-x="center"
                             data-y="450"
                             data-speed="500"
                             data-start="1650"
                             data-easing="Power3.easeInOut"
                             data-splitin="lines"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;">Investigación,
                            Desarrollo e Innovación para Minería
                        </div>

                        <!-- LAYER NR. 3 -->


                        <!-- SLIDE 2 -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="500"
                        data-thumb="{{asset('web/img/slider/thumb/thumb-3.jpg')}}" data-saveperformance="on"
                        data-title="Slider 2">

                        <!-- MAIN IMAGE -->
                        <img src="{{asset('web/img/slider/SLIDER02.jpg')}}" alt="slidebg1" class="test">

                        <!-- <img src="{{asset('web/img/slider/dummy.png')}}" alt="slidebg1" data-lazyload="img/slider/SLIDER02.jpg')}}" data-bgposition="center top" data-bgfit="cover"
                            data-bgrepeat="no-repeat"> -->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption grey_heavy_72 lfl tp-resizeme rs-parallaxlevel-0 tp-headline"
                             data-x="center" data-y="375" data-speed="500"
                             data-start="1350" data-easing="Power3.easeInOut" data-splitin="lines" data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;">IDI MINING &
                            INDUSTRIES
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption grey_heavy_72 lfr tp-resizeme rs-parallaxlevel-0 tp-headline-3"
                             data-x="center" data-y="450" data-speed="500"
                             data-start="1650" data-easing="Power3.easeInOut" data-splitin="lines" data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;">Investigación,
                            Desarrollo e Innovación para Minería
                        </div>


                    </li>

                    <!-- SLIDE 3 -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="500"
                        data-thumb="{{asset('web/img/slider/thumb/thumb-1.jpg')}}" data-saveperformance="on"
                        data-title="Slider 3">

                        <!-- MAIN IMAGE -->
                        <img src="{{asset('web/img/slider/SLIDER03.jpg')}}" alt="slidebg1" class="test">

                        <!-- <img src="{{asset('web/img/slider/dummy.png')}}" alt="slidebg1" data-lazyload="img/slider/SLIDER03.jpg')}}" data-bgposition="center top" data-bgfit="cover"
                            data-bgrepeat="no-repeat"> -->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption grey_heavy_72 lfl tp-resizeme rs-parallaxlevel-0 tp-headline"
                             data-x="center" data-y="375" data-speed="500"
                             data-start="1350" data-easing="Power3.easeInOut" data-splitin="lines" data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;">IDI MINING &
                            INDUSTRIES
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption grey_heavy_72 lfr tp-resizeme rs-parallaxlevel-0 tp-headline-3"
                             data-x="center" data-y="450" data-speed="500"
                             data-start="1650" data-easing="Power3.easeInOut" data-splitin="lines" data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;">Investigación,
                            Desarrollo e Innovación para Minería
                        </div>


                    </li>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
            <!-- /tp-banner -->
        </div>
        <!-- /tp-banner-container -->
    </section>
    <!-- END / HOME MEDIA -->

    <section class="section bg-primary pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h4 class="play-font fsi mb-0 text-center" style="line-height: 2.3em;font-weight: 700">ESCUELAS
                        TÉCNICAS</h4>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>

    <!-- ABOUT -->
    <section class="section bg-gray pt-60 pb-60 textura">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="section-header">Escuela para Mantenimiento de Mina</h2>
                    <div class="post-thumbnail hover-link">
                        <img src="{{asset('web/img/escuela/mantenimiento_mina.jpg')}}" alt=""/>
                        <a href="#" class="overlay"><i class="fa fa-link"></i></a>
                    </div><!--/ post-thumbnail -->


                </div><!-- /col -->

                <div class="col-md-4">
                    <h2 class="section-header">Escuela de Informática</h2>
                    <div class="post-thumbnail hover-link">
                        <img src="{{asset('web/img/escuela/informatica.jpg')}}" alt=""/>
                        <a href="#" class="overlay"><i class="fa fa-link"></i></a>
                    </div><!--/ post-thumbnail -->

                </div><!-- /col -->

                <div class="col-md-4">
                    <h2 class="section-header">Escuela para Innovadores e Inventores</h2>
                    <div class="post-thumbnail hover-link">
                        <img src="{{asset('web/img/escuela/innovadores.jpg')}}" alt=""/>
                        <a href="#" class="overlay"><i class="fa fa-link"></i></a>
                    </div><!--/ post-thumbnail -->


                </div><!-- /col -->

                <div class="col-md-4">
                    <h2 class="section-header">Escuela para Electricista Domiciliario e Industrial</h2>
                    <div class="post-thumbnail hover-link">
                        <img src="{{asset('web/img/escuela/electricista.jpg')}}" alt=""/>
                        <a href="#" class="overlay"><i class="fa fa-link"></i></a>
                    </div><!--/ post-thumbnail -->


                </div><!-- /col -->

                <div class="col-md-4">
                    <h2 class="section-header">Escuela para Mecánicos en Mina</h2>
                    <div class="post-thumbnail hover-link">
                        <img src="{{asset('web/img/escuela/mecanicos_mina.jpg')}}" alt=""/>
                        <a href="#" class="overlay"><i class="fa fa-link"></i></a>
                    </div><!--/ post-thumbnail -->

                </div><!-- /col -->

                <div class="col-md-4">
                    <h2 class="section-header">Otros</h2>
                    <div class="post-thumbnail hover-link">
                        <img src="{{asset('web/img/escuela/otros.jpg')}}" alt=""/>
                        <a href="#" class="overlay"><i class="fa fa-link"></i></a>
                    </div><!--/ post-thumbnail -->
                </div><!-- /col -->

            </div><!-- /row -->
        </div><!-- /container -->
    </section>

    <section class="section pt-10 pb-60 textura">
        <div class="container">
            <h2 class="section-header">Links de Interés</h2>
            <div class="client-slider">
                <div class="client-logo">
                    <a href="http://www.ctisoluciones.com/" target="_blank">
                        <img src="{{asset('web/img/1.png')}}" alt=""/>
                    </a>
                </div>
                <div class="client-logo">
                    <a href="https://www.indecopi.gob.pe" target="_blank">
                        <img src="{{asset('web/img/2.png')}}" alt=""/>
                    </a>
                </div>
                <div class="client-logo">
                    <a href="https://www.uni.edu.pe/" target="_blank">
                        <img src="{{asset('web/img/3.png')}}" alt=""/>
                    </a>
                </div>
                <div class="client-logo">
                    <a href="http://www.upm.es/" target="_blank">
                        <img src="{{asset('web/img/4.png')}}" alt=""/>
                    </a>
                </div>
                <div class="client-logo">
                    <a href="https://www.aitriz.org" target="_blank">
                        <img src="{{asset('web/img/5.png')}}" alt=""/>
                    </a>
                </div>
                <div class="client-logo">
                    <a href="https://www.cienciactiva.gob.pe" target="_blank">
                        <img src="{{asset('web/img/6.png')}}" alt=""/>
                    </a>
                </div>
                <div class="client-logo">
                    <a href="https://www.mineria.minem.gob.pe" target="_blank">
                        <img src="{{asset('web/img/7.png')}}" alt=""/>
                    </a>
                </div>
                <div class="client-logo">
                    <a href="https://www.snmpe.org.pe" target="_blank">
                        <img src="{{asset('web/img/8.png')}}" alt=""/>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-secondary pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <h4 class="play-font fsi mb-0 text-center text-left-md"
                        style="line-height: 2.3em;font-weight: 700; color:#fff">Para conocer más sobre IDI MINING &
                        INDRUSTRIES S.A.C., descarga nuestro Broshure</h4>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="text-center text-right-md">
                        <button type="button" class="btn btn-primary" style="color:#444;">Descargar PDF</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
