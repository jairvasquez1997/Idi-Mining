@extends('web.layout._layout')
@section('estilos')
<style type="text/css">
  .section-title, .pagination {
    margin: 14px 0 14px;
    line-height: 42px;
    padding-bottom: 20px;
    position: relative;
    font-size: 40px;
    font-family: "Oswald";
    font-weight: 700;
    text-transform: uppercase;
}

  .section-title.sep-type-2:before, .pagination.sep-type-2:before {
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
  .section-title:before, .pagination:before {
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
  .section-title.sep-type-2:after, .pagination.sep-type-2:after {
    width: 78px;
    height: 2px;
    left: 50%;
    margin-left: -39px;
    z-index: 0;
}
.section-title:after, .pagination:after {
    content: "";
    position: absolute;
    left: 13px;
    bottom: 1px;
    width: 29px;
    height: 2px;
    background-color: #cf9b67;
}

.slider .slide-item {
    height: 500px;
}

.titulo {
    margin: 14px 0 14px;
    line-height: 42px;
    padding-bottom: 20px;
    position: relative;
    font-size: 40px;
    font-family: "Oswald";
    font-weight: 700;
    text-transform: uppercase;
    color: white;
}

.title, .pagination {
    margin: 14px 0 14px;
    line-height: 42px;
    padding-bottom: 20px;
    position: relative;
    font-size: 40px;
    font-family: "Oswald";
    font-weight: 700;
    text-transform: uppercase;
}
.title:before, .pagination:before {
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
.title:after, .pagination:after {
    content: "";
    position: absolute;
    left: 13px;
    bottom: 1px;
    width: 29px;
    height: 2px;
    background-color: #cf9b67;
}
.verticalLine {
  border-left: thick solid #cf9b67;
  border-right: thick solid #cf9b67;
}

</style>
@endsection

@section('content')
<section id="sub-header" class="section bg-parallax pb-0" data-background="{{asset('web/img/bg/demo.jpg')}}">
        <div class="bg-overlay-black bg-overlay-5"></div>
        <div class="container">
            <div class="sub-wrapper">
                <h1>LOGIN</h1>
                <div class="breadcrumb-container clearfix">
                    <span>ESTÁS AQUÍ: </span>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('/')}}">Home</a>
                        </li>
                        <li>
                            Login
                        </li>
                    </ul>
                </div>
                <!-- /breadcrumb -->
            </div>
            <!-- /sub-wrapper -->
        </div>
        <!-- /container -->
    </section>

    <!-- ==========================
        contact 1
    =========================== -->
    <section id="contact" class="contact verticalLine"  style="padding-top: 30px; padding-bottom: 30px; background: url(/web/assets/img/inicio/backladrillos.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6" style="padding: 50px;">
            <div>
              <h2 class="title sep-type-2 text-center" style="font-size: 25px; text-align: left!important;">Iniciar Sesión</h2>
            </div>
            <p>Para proceder con tu compra, debes iniciar sesión</p>
            <form method="POST" action="{{ route('web.login') }}">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group"><input type="email" class="form-control" name="username" placeholder="Email:"></div>
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group"><input type="password" name="password" class="form-control" placeholder="Password:" id="password-ingresar" ><span toggle="#password-ingresar" onclick="mostrarPassword2()" class="fa fa-eye-slash icon2" style="display: inline-block; float: right; margin-right: 8px; margin-top: -25px; position: relative; z-index: 2; cursor: pointer;"></span></div>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <button type="submit" class="btn btn-primary" style="color:#444;">Iniciar Sesión</button>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <a class="btn btn__primary btn__block" href="{{ route('social.auth', 'facebook') }}" style="border: 2px solid #4765A7; background-color: #4765A7;"><i class="fa fa-facebook"></i> Facebook</a>
                </div>
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6" style="padding: 50px;">
            <div>
              <h2 class="title sep-type-2 text-center" style="font-size: 25px; text-align: left!important;">Registrarse</h2>
            </div>
            <p>Crea tu propia cuenta.</p>
            <form method="POST" action="{{ route('web.register') }}">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="text" class="form-control" name="nombres" placeholder="Nombres:" required=""></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="text" class="form-control" name="apellidos" placeholder="Apellidos:" required=""></div>
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->

              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="number" class="form-control" name="dni" placeholder="DNI:" required=""></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="number" class="form-control" name="celular" placeholder="Celular:" required=""></div>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->

              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group"><input type="email" class="form-control" name="email" placeholder="Email:" required=""></div>
                </div>
              </div><!-- /.row -->
              
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group"><input type="password" class="form-control" placeholder="Password:" id="password-registrar" name="password" required=""><span toggle="#password-registrar" onclick="mostrarPassword()" class="fa fa-eye-slash icon" style="display: inline-block; float: right; margin-right: 8px; margin-top: -25px; position: relative; z-index: 2; cursor: pointer;"></span></div>
                </div>
              </div><!-- /.row -->

              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <button type="submit" class="btn btn-primary" style="color:#444;">Registrarse</button>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact 1 -->
@endsection

@section('scripts')
  <script type="text/javascript">

  function mostrarPassword(){
        var cambio = document.getElementById("password-registrar");
        if(cambio.type == "password"){
            cambio.type = "text";
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        }else{
            cambio.type = "password";
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    } 
    function mostrarPassword2(){
        var cambio2 = document.getElementById("password-ingresar");
        if(cambio2.type == "password"){
            cambio2.type = "text";
            $('.icon2').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        }else{
            cambio2.type = "password";
            $('.icon2').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    } 
    </script>
    <script type="text/javascript">
      /*
      $(document).ready(function(){
            var height = $(window).height();
            $('#div2').height(height);
      });*/
    </script>
@endsection