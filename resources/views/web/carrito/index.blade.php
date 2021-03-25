@extends('web.layout._layout')
@section('content')
    @include('audio01')
    <section id="sub-header" class="section bg-parallax pb-0" data-background="{{asset('web/img/bg/demo.jpg')}}">
        <div class="bg-overlay-black bg-overlay-5"></div>
        <div class="container">
            <div class="sub-wrapper">
                <h1>CARRITO</h1>


                <div class="breadcrumb-container clearfix">
                    <span>ESTÁS AQUÍ: </span>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('/')}}">Home</a>
                        </li>
                        <li>
                            Carrito
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
            <div class="woocommerce">
                <form action="shop-cart_submit" method="get" class="mb-50">
                    <div class="table-responsive">
                        <table class="shop_table cart">
                            <thead>
                                
                            </thead>
                            <tbody>
                                <carrito></carrito>
                            </tbody>
                        </table>
                    </div><!-- /table-responsive --><br>
                </form><!-- /shop-cart_submit -->
            </div><!-- /woocommerce -->
        </div><!-- /container -->
    </section>    

@endsection