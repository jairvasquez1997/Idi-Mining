@extends('web.layout._layout')
@section('content')
    @include('audio01')
    <section id="sub-header" class="section bg-parallax pb-0" data-background="{{asset('web/img/bg/demo.jpg')}}">
        <div class="bg-overlay-black bg-overlay-5"></div>
        <div class="container">
            <div class="sub-wrapper">
                <h1>TIENDA</h1>


                <div class="breadcrumb-container clearfix">
                    <span>ESTÁS AQUÍ: </span>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('/')}}">Home</a>
                        </li>
                        <li>
                            Tienda
                        </li>

                    </ul>
                </div>
                <!-- /breadcrumb -->
            </div>
            <!-- /sub-wrapper -->
        </div>
        <!-- /container -->
    </section>

    <section class="section bg-white pt-70 pb-60">
       
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 col-lg-12">
                    <div id="content" class="site-content">
                        <main id="main">
                            <!-- PRODUCT DETAIL -->
                            <div class="product-info clearfix">
                                <div class="product-image">
                                    <div class="product-thumb mb-10">
                                    <img src="{{asset('web/img/servicio/productos/p1.png')}}" alt="">
                                        <a href="#" data-image="img/product/p1.png" class="overlay"></a>
                                    </div>

                                    <div class="product-thumb-list-slider">
                                        <div class="product-thumb">
                                            <img src="img\product\p1.png" alt="">
                                            <a href="#" data-image="img/product/p1.png" class="overlay"></a>
                                        </div><!-- /product-thumb -->

                                        <div class="product-thumb">
                                            <img src="img\product\p2.png" alt="">
                                            <a href="#" data-image="img/product/p2.png" class="overlay"></a>
                                        </div><!-- /product-thumb -->

                                        <div class="product-thumb">
                                            <img src="img\product\p3.png" alt="">
                                            <a href="#" data-image="img/product/p3.png" class="overlay"></a>
                                        </div><!-- /product-thumb -->

                                        <div class="product-thumb">
                                            <img src="img\product\p4.png" alt="">
                                            <a href="#" data-image="img/product/p4.png" class="overlay"></a>
                                        </div><!-- /product-thumb -->

                                        <div class="product-thumb">
                                            <img src="img\product\p5.png" alt="">
                                            <a href="#" data-image="img/product/p5.png" class="overlay"></a>
                                        </div><!-- /product-thumb -->
                                    </div><!-- /product-thumb-list-slider -->
                                </div><!-- /product-image -->

                                <div class="product-detail">
                                    <h1 class="h4 text-uppercase">Mid-handle drill kit</h1>

                                    <!--<div class="review clearfix">
                                        <div class="star-rating" title="Rated 4.00 out of 5">
                                            <span style="width: 80%"></span>
                                        </div>
                                        <span>(1 customer review)</span>
                                    </div>-->

                                    <br>

                                    <div class="amount"><del>$80</del> $90</div>

                                    <br>

                                    <p>descripcion de producto</p>

                                    <br>

                                    
                                        <input class="input_quantity" type="text" value="" name="input_quantity">
                                        <button  class="btn btn-black-2 radius"><i class="fa fa-shopping-cart"></i>Agregar al carrito</button>
                                        <button class="btn btn-black-2 radius"><a href="{{ route('carrito.mostrar') }}">Comprar</a></button>

                                        <div class="clearfix"></div>
                                    

                                    <br>

                                    <!--<ul>
                                        <li><span class="product-id">SKU:</span> 0010</li>
                                        <li><span class="category">Category:</span> <a href="#">Other</a></li>
                                        <li><span class="tag-links">Tag:</span> <a href="#">Musical Instrument</a>, <a href="#">Saxophone</a></li>
                                    </ul>-->

                                    <br>

                                    <ul class="social-list primary">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <!--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-lastfm"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-stumbleupon"></i></a></li>-->
                                    </ul>
                                </div><!-- /product-detail -->
                            </div><!-- /product-info -->
                        </main>
                    </div><!-- /site-content -->
                </div><!-- /col -->

                <!--<div class="col-md-3 col-sm-12 col-xs-12">
                    <div id="sidebar" class="sidebar">
                        <div id="widget-area">
                            <aside class="widget widget_search">
                                <img src="{{asset('web/img/servicio/productos/p1.png')}}" alt="">
                            </aside>                        
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    
    </section>

@endsection