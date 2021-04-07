@extends('web.layout._layout')
@section('estilos')
<style type="text/css">
  .section-title {
    margin: 14px 0 14px;
    line-height: 42px;
    padding-bottom: 20px;
    position: relative;
    font-size: 40px;
    font-family: "Oswald";
    font-weight: 700;
    text-transform: uppercase;
}
  .section-title.sep-type-2:before {
    z-index: 1;
    width: 20px;
    left: 50%;
    margin-left: -10px;
    content: "●";
    color: #cf9b67;
    background: #fff;
    line-height: 6px;
    font-size: 12px;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0;
    height: 10px;
    bottom: -3px;
    padding-left: 6px;
    text-align: left;
  }
  .section-title:before {
    content: "";
    position: absolute;
    left: 0;
    bottom: -1px;
    width: 6px;
    height: 6px;
    background-color: #cf9b67;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
}
  .section-title.sep-type-2:after {
    width: 78px;
    height: 2px;
    left: 50%;
    margin-left: -39px;
    z-index: 0;
}
.section-title:after {
    content: "";
    position: absolute;
    left: 13px;
    bottom: 1px;
    width: 29px;
    height: 2px;
    background-color: #cf9b67;
}
.section-suptitle {
    font-size: 30px;
    color: #cf9b67;
    font-family: "Architects Daughter";
    letter-spacing: 1px;
    display: block;
    line-height: 32px;
}
</style>
@endsection
@section('content')
	<!-- ========================
       page title 
    =========================== -->
    <section id="sub-header" class="section bg-parallax pb-0" data-background="{{asset('web/img/bg/demo.jpg')}}">
        <div class="bg-overlay-black bg-overlay-5"></div>
        <div class="container">
            <div class="sub-wrapper">
                <h1>MIS PEDIDOS</h1>


                <div class="breadcrumb-container clearfix">
                    <span>ESTÁS AQUÍ: </span>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('/')}}">Home</a>
                        </li>
                        <li>
                            Mis Pedidos
                        </li>

                    </ul>
                </div>
                <!-- /breadcrumb -->
            </div>
            <!-- /sub-wrapper -->
        </div>
        <!-- /container -->
    </section>
	<!-- =========================
				Shopping Cart
		=========================== -->
    <section id="ShoppinCcart" class="shop shopping-cart pb-50" style=" padding-bottom: 0px!important; background: url('/web/assets/img/inicio/backladrillos.jpg'); padding-top: 50px;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
            <span class="section-title text-center" style="font: oblique bold 230% cursive;">IDI-MINING</span>
            <h2 class="section-suptitle sep-type-2 text-center" style="font: oblique bold 200% cursive;"><b>Mis pedidos</b></h2>
          </div><!-- /.col-lg-12 -->
          <pedidos-cliente></pedidos-cliente>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.shopping-cart -->
@endsection