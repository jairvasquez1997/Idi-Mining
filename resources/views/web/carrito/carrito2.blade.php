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
.section-suptitle {
    font-size: 30px;
    color: #cf9b67;
    font-family: "Architects Daughter";
    letter-spacing: 1px;
    display: block;
    line-height: 32px;
}

 .radio{
    font-size: 15px;
    font-weight: 500;
    text-transform: capitalize;
    display: inline-block;
    vertical-align:middle;
    color:  #black; /*color blanco de las letras*/
    position: relative;
    padding-left: 30px;
}
.radio + .radio{
    margin-left: 20px; 
}
.radio input[type="radio"]{
    display: none;
}
.radio span{
    height: 18px;
    width: 18px;
    border-radius: 50%;
    border: 3px solid #CF9B67;
    display: block;
    position: absolute;
    left: 0;
    top: 2px;
}
.radio span:after{
    content: "";
    height: 8px;
    width: 8px;
    background: #CF9B67;
    display: block;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%) scale(0);
    border-radius: 50%;
    transition: 150ms ease-in-out 0s;
}
.radio input[type="radio"]:checked ~ span:after{
    transform: translate(-50%,-50%) scale(1);
}
/*
.text {
  color: #003171;
  margin: 0 auto;
  font-weight: 500;
  font: 17px Georgia, Serif;
  text-shadow: -1px 0px 0 #0D76FD;
}*/
</style>
@endsection
@section('content')
  @include('audio01')
	<!-- ========================
       page title 
    =========================== -->
    <section id="sub-header" class="section bg-parallax pb-0" data-background="{{asset('web/img/bg/demo.jpg')}}">
        <div class="bg-overlay-black bg-overlay-5"></div>
        <div class="container">
            <div class="sub-wrapper">
                <h1>PROCESO DE PAGO</h1>


                <div class="breadcrumb-container clearfix">
                    <span>ESTÁS AQUÍ: </span>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('/')}}">Home</a>
                        </li>
                        <li>
                            Proceso de Pago
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
            <web-carrito2 :usuario="{{ json_encode( auth()->user()->load('cliente') ) }}"></web-carrito2>
      </div><!-- /.container -->
    </section><!-- /.shopping-cart -->
      
@endsection
@section('scripts')

  <script src="https://unpkg.com/vue@latest"></script>

<!-- use the latest vue-select release -->
<script src="https://unpkg.com/vue-select@latest"></script>
<link rel="stylesheet" href="https://unpkg.com/vue-select@latest/dist/vue-select.css">

<!-- or point to a specific vue-select release -->
<script src="https://unpkg.com/vue-select@3.0.0"></script>
<link rel="stylesheet" href="https://unpkg.com/vue-select@3.0.0/dist/vue-select.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- Incluyendo .js de Culqi JS -->
<script src="https://checkout.culqi.com/v2"></script>

<script>
    //Culqi.publicKey = 'pk_live_BOyPdl5elOgr3AoM';
    Culqi.publicKey = 'pk_test_xbWjwLBukeC5lSrD';
    Culqi.init();
</script>


<script>
    var carrito_global = {};
    var token_id='';
   $(document).on('vue-loaded', function (event,carrito) {
        //console.log("HOLAA",carrito);
        carrito_global=carrito;
        if(carrito['tipo_pago']=='TARJETA'){
            Culqi.createToken();
        }
        else{
            storePedido();
        }
    });
   function culqi() {
        if (Culqi.token.id) {
            //$('#token_id').val(Culqi.token.id);
            token_id=Culqi.token.id;
            storePedido();
        } else { // ¡Hubo algún problema!
            // Mostramos JSON de objeto error en consola
            console.log(Culqi.error);
            alert(Culqi.error.user_message);

        }


    };

    function storePedido() {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{url('cliente/pedidos/store')}}", //archivo que recibe la peticion
                type: 'post', //método de envio
                data: {carrito_global,token_id},
                beforeSend: function () {
                    // console.log("Procesando, espere por favor...");

                },
                complete: function () {
                    //$(':loading').loading('stop');
                },
                success: function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    if (response) {
                        Swal.fire({
                          position: 'top-end',
                          icon: 'success',
                          title: 'Pedido Realizado Exitosamente',
                          showConfirmButton: false,
                          timer: 1500
                        }).then((response) => {
                                window.location.href = '/';
                            });
                    }else{
                        Swal.fire({
                          icon: 'error',
                          title: 'Oops...',
                          text: 'No se pudo realizar el pedido!',
                          footer: '¿Ingresaste todos los datos correctamente?'
                        })
                    }


                },/*
                error: function (result) {
                    //$(':loading').loading('stop');
                    alert("Error", "No se pudo realizar el pedido");
                    console.log(result.responseJSON.errors);
                }*/
                error: function (data) {
                    //swal("Error", "No se pudo realizar el pedido");
                    Swal.fire({
                      icon: 'error',
                      title: 'Oops...',
                      text: 'No se pudo realizar el pedido!',
                      footer: '¿Ingresaste todos los datos correctamente?'
                    })
                    /*
                                var errorsHtml = '';
                                var errors = data.responseJSON.errors;
                                $.each(errors, function (key, value) {
                                    errorsHtml += value;
                                });
                                $("#mas_tex2").addClass('borderClass').delay(4000)
                                        .queue(function () {
                                            $(this).removeClass("borderClass");
                                            $(this).dequeue();
                                        });
                                $("#error_msg2").text(errorsHtml).show().fadeOut(4000);
                                */
                            }
                    
                        });
        }

</script>



@endsection