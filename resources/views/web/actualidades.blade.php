@extends('web.layout._layout')

@section('content')
    @include('audio02')
    <style>
        .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
            z-index: 3;
            color: #fff;
            cursor: default;
            background-color: #ffbf00;
            border-color: #ffbf00;
    </style>
    <section id="sub-header" class="section bg-parallax pb-0" data-background="{{asset('web/img/bg/demo.jpg')}}">
        <div class="bg-overlay-black bg-overlay-5"></div>
        <div class="container">
            <div class="sub-wrapper">
                <h1> ACTUALIDADES </h1>
                <div class="breadcrumb-container clearfix">
                    <span>ESTÁS AQUÍ: </span>
                    <ul class="breadcrumb">
                        <li>
                                <a href="{{route('/')}}">Home</a>
                        </li>
                        <li>Actualidades</li>

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
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div id="content" class="site-content">
                        <main id="main">

                          @foreach($items as $item)
                                <article class="post format-standard">
                                    <div class="post-thumbnail">
                                        <img src="{{asset('images/'.$item->image)}}" alt=""/>
                                        <!--                                    <a href="#" class="overlay"></a>-->
                                        <!--                                    <span class="latest">New</span>-->
                                    </div><!--/ post-thumbnail -->

                                    <header class="entry-header">
                                        <h2 class="entry-title h4">

                                              {{$item->title}}

                                        </h2>
                                        <!--                                    <span class="byline">Publicado por <a href="#">Idimining</a> - </span>-->
                                        <!--                                    <span class="posted-on"><a href="#">hace 2 días</a>  </span>-->
                                    </header><!-- /header -->

                                    <div class="entry-content">
                                      {{$item->description}}
                                        @if($item->pdf)
                                        <p>
                                            <a href="{{asset('images/'.$item->pdf)}}"
                                              target="_blank" class="more-link">Para mayor
                                                información, descarga el PDF</a>
                                        </p>
                                            @endif
                                    </div>
                                </article><!-- /post -->

                        @endforeach
                            <!-- PAGENAVI -->

                            <nav class="pager">
                                {{ $items->render() }}

                            </nav>
                            <!-- END / PAGENAVI -->
                        </main>
                    </div><!-- /site-content -->
                </div><!-- /col -->

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div id="sidebar" class="sidebar">
                        <div id="widget-area">
                            <aside class="widget widget_search">
                                <form action="http://envato.megadrupal.com/html/cortana/search" method="post">
                                    <div class="input-group">
                                        <input type="search" class="search-field" placeholder="Search..." value=""
                                               name="s" title="Search for:">
                                        <span class="input-group-btn"><button type="submit" class="btn"><i
                                                        class="fa fa-search"></i></button></span>
                                    </div>
                                </form>
                            </aside><!-- /widget_search -->

                            <aside class="widget widget_categories">
                                <h3 class="widget-title h5">Últimas Actualidades</h3>
                                <ul>
                                    <li class="cat-item">
                                        <a href="#1">¿En qué consiste la Ley 30309?</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#">Los Nuevos Emprendedores</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#">Innovar para Competir</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#">Robótica en Nuestra Sede</a>
                                    </li>
                                </ul>
                            </aside><!-- /widget_categories -->
                        </div><!-- /widget-area -->
                    </div><!-- /sidebar -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>
@endsection
