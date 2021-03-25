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
                            <div class="product-info clearfix">
                                <div class="product-image">
                                    <div class="product-thumb mb-10">
                                    <img src="{{ asset('images/producto/').'/'. $productos->imagen}}" alt="">
                                        <a href="#" data-image="img/product/p1.png" class="overlay"></a>
                                    </div>

                                </div>
                                <carrito-producto :producto="{{json_encode($productos)}}"></carrito-producto>
                                
                            </div>
                        </main>
                    </div>
                </div>

            </div>
        </div>
        
    </section>

@endsection