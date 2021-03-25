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

    <section class="section bg-white pt-70 pb-60 textura">
        <div class="container">
            <div class="row">
                <div class="col-3">
                <div id="content" class="site-content">
                            <main id="main">
                                <h2 class="section-header">PRODUCTOS</h2>
                            <div class="clearfix"></div>
                            <!-- PRODUCT LIST -->
                            @foreach ($productos as $producto)
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="product-thumb">
                                        <img src="{{ asset('images/producto/').'/'. $producto->imagen}}" alt="">
                                        <a href="{{route ('productos',$producto->id)}}" class="overlay"></a>
                                        <!--<div class="product-icon">
                                            <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                                        </div>-->
                                    </div><!-- /product-thumb --><br>
                                    <h3 class="h5 text-uppercase"><a href="{{route ('productos',$producto->id)}}">{{$producto->nombre}}</a></h3>
                                    <h4 class="amount"><b>s/. {{$producto->precio}}</b></h4>
                                </div>
                            @endforeach
                            </main>
                        </div>
                </div>
            </div>
        </div>
    </section>

@endsection