<style type="text/css">
    .title {
      font-weight: bold;
      font-size: 17px;
      font-family: sans-serif;
    }
</style>

<template>
  <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
            <h2 class="section-title sep-type-2 text-center" style="font: oblique bold 260% cursive;"><b>Proceso de Pago</b></h2><br>
          </div><!-- /.col-lg-12 -->
          <!--<div style="color: #1eb6a7;font-weight: bold;font-size: 14px; bottom: 10px;"  hidden id="error_msg2"></div>-->
          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="cart__shiping" style="background-color: white; border-radius: 10px;">
              
                <h6 style="padding: 15px;" class="title">Datos de Entrega: </h6>

                <div class="col-md-12">
                    <span id="spanZona" v-if="errors.zona" class="error alert errores" role="alert">{{ errors.zona[0] }}</span>
                  <v-select 
                    v-model="selected" 
                    :options="zonas"  
                    @input="changeZona"
                    placeholder="Seleccione la Zona" 
                    style="font-size: 12px;"
                     />
                </div>
                
                

                <div v-if="usuario.cliente!=null" class="row" style="padding-right: 15px; padding-left: 15px;">
                    <div class="col-md-12">
                    <span id="spanDireccion" v-if="errors.direccion" class="error alert errores" role="alert">{{ errors.direccion[0] }}</span>
                  <input type="text" id="direccion" class="form-control" placeholder="Dirección" required><br>
                </div>

                <div class="col-md-12">
                    <span id="spanReferencia" v-if="errors.referencia" class="error alert errores" role="alert">{{ errors.referencia[0] }}</span>
                  <input type="text" id="referencia" class="form-control" placeholder="Referencia"><br><br>
                </div>
                </div>

                <h6 style="padding-left: 15px;" class="title">Comprobantes de Pago: </h6>
                <div class="col-md-12">
                    <span id="spanDireccion" v-if="errors.tipo_comprobante" class="error alert errores" role="alert">{{ errors.tipo_comprobante[0] }}</span>
                    <form id="myFormulario">
                        <label class="radio" style="padding-left: 25px; padding-bottom: 10px;">
                            <input type="radio" value="BOLETA" :name="'tipoComprobante'" @click="mostrarComprobante('BOLETA')"> 
                                BOLETA
                            <span></span>
                        </label>
                        <label class="radio" style="padding-left: 25px;">
                            <input type="radio" value="FACTURA" :name="'tipoComprobante'" @click="mostrarComprobante('FACTURA')">
                                FACTURA
                            <span></span>
                        </label><br>
                    </form>
                </div>
                <br>
                <!--
                <div v-if="user.persona!=null" class="row" style="padding-right: 15px; padding-left: 15px;">
                    <div  class="col-md-6" id="divnombres" style="display: none;">

                      <input type="text" class="form-control" id="nombres" :name="'nombres'" :value="user.persona.nombres" placeholder="Nombres">
                    </div>
                    <div class="col-md-6" id="divapellidos" style="display: none;">
                      <input type="text" class="form-control" id="apellidos" :name="'apellidos'" :value="user.persona.apellidos" placeholder="Apellidos">
                    </div>
                    <div class="col-md-6" id="divcelular" style="display: none;">
                      <input type="text" class="form-control" id="celular" :name="'celular'" :value="user.persona.celular" placeholder="Celular">
                    </div>
                    <div class="col-md-6" id="divemail" style="display: none;">
                      <input type="email" class="form-control" id="email" :name="'email'" :value="user.username" placeholder="Email">
                    </div>
                </div>-->
                <div v-if="usuario.cliente!=null" class="row" style="padding-right: 15px; padding-left: 15px;">
                    <div  class="col-md-6" id="divnombres" style="display: none;">
                        <span id="spanReferencia" v-if="errors.nombres" class="error alert errores" role="alert">{{ errors.nombres[0] }}</span>
                      <input type="text" class="form-control" id="nombres" :name="'nombres'" :value="usuario.cliente.nombres" placeholder="Nombres">
                    </div>
                    <div class="col-md-6" id="divapellidos" style="display: none;">
                        <span id="spanReferencia" v-if="errors.apellidos" class="error alert errores" role="alert">{{ errors.apellidos[0] }}</span>
                      <input type="text" class="form-control" id="apellidos" :name="'apellidos'" :value="usuario.cliente.apellidos" placeholder="Apellidos"><br>
                    </div>
                    <div class="col-md-6" id="divdni" style="display: none;">
                        <span id="spanReferencia" v-if="errors.dni" class="error alert errores" role="alert">{{ errors.dni[0] }}</span>
                      <input type="text" class="form-control" id="dni" :name="'dni'" :value="usuario.cliente.dni" placeholder="DNI">
                    </div>
                    <div class="col-md-6" id="divcelular" style="display: none;">
                        <span id="spanReferencia" v-if="errors.celular" class="error alert errores" role="alert">{{ errors.celular[0] }}</span>
                      <input type="text" class="form-control" id="celular" :name="'celular'" :value="usuario.cliente.celular" placeholder="Celular"><br><br>
                    </div>
                </div>

                <div v-if="usuario.cliente!=null" class="row" style="padding-right: 15px; padding-left: 15px;">
                    <div class="col-md-12" id="divrs" style="display: none;">
                    <span id="spanReferencia" v-if="errors.razon_social" class="error alert errores" role="alert">{{ errors.razon_social[0] }}</span>
                  <input type="text" class="form-control" id="razon_social"  name="razon_social" placeholder="Razon Social"><br>
                </div>
                <div class="col-md-12" id="divruc" style="display: none;">
                    <span id="spanReferencia" v-if="errors.ruc" class="error alert errores" role="alert">{{ errors.ruc[0] }}</span>
                  <input type="text" class="form-control" id="ruc" name="ruc"  placeholder="RUC"><br>
                </div>
                <div class="col-md-12" id="divdir" style="display: none;">
                    <span id="spanReferencia" v-if="errors.direccion_doc" class="error alert errores" role="alert">{{ errors.direccion_doc[0] }}</span>
                  <input type="text" class="form-control" name="direccion_doc" id="direccion_doc" placeholder="Dirección"><br><br>
                </div>
                </div>
                
                <h6 style="padding-left: 15px;" class="title">Metodo de Pago: </h6>
                <div class="col-md-12">
                    <span id="spanDireccion" v-if="errors.tipo_pago" class="error alert errores" role="alert">{{ errors.tipo_pago[0] }}</span>
                    <form id="myForm">
                        <label class="radio" style="padding-left: 25px; padding-bottom: 10px;">
                            <input type="radio" value="EFECTIVO"  :name="'tipoPago'" @click="mostrarTipo('EFECTIVO')" >
                                EFECTIVO
                            <span></span>
                        </label>
                        <label class="radio" style="padding-left: 25px;">
                            <input type="radio" value="TARJETA"  :name="'tipoPago'" @click="mostrarTipo('TARJETA')">
                                TARJETA
                            <span></span>
                        </label><br>
                    </form>
                </div>
                <br>
                <div class="col-md-12" id="divcuanto" style="display: none;">
                        <span id="spanReferencia" v-if="errors.cuanto_pagar" class="error alert errores" role="alert">{{ errors.cuanto_pagar[0] }}</span>
                      <input type="text" class="form-control" name="cuanto_pagar" id="cuanto_pagar" placeholder="Con cuanto va a pagar : 50.00"><br>
                    </div>
                <div class="col-md-12" id="divemail" style="display: none;">
                        <span id="spanReferencia" v-if="errors.email" class="error alert errores" role="alert">{{ errors.email[0] }}</span>
                      <input type="email" class="form-control email" data-culqi="card[email]" id="card[email]" :name="'email'" :value="usuario.cliente.email" placeholder="Email"><br><br>
                    </div>
                <div class="col-md-12" id="ntar" style="display: none;">
                    <span id="spanDireccion" v-if="errors.numero_tarjeta" class="error alert errores" role="alert">{{ errors.numero_tarjeta[0] }}</span>
                  <input type="text" class="form-control" :name="'numero_tarjeta'" data-culqi="card[number]" id="card[number]" placeholder="N° Tarjeta"><br>
                </div>
                <div class="row" style="padding-right: 15px; padding-left: 15px;">
                    <div class="col-md-4" id="divmes" style="display: none;">
                        <span id="spanDireccion" v-if="errors.mes" class="error alert errores" role="alert">{{ errors.mes[0] }}</span>
                      <input type="text" class="form-control" v-model="mes" data-culqi="card[exp_month]" id="card[exp_month]" placeholder="Mes">
                    </div>
                    <div class="col-md-4" id="divano" style="display: none;">
                        <span id="spanDireccion" v-if="errors.anuo" class="error alert errores" role="alert">{{ errors.anuo[0] }}</span>
                      <input type="text" class="form-control" v-model="anuo" data-culqi="card[exp_year]" id="card[exp_year]" placeholder="Año">
                    </div>
                    <div class="col-md-4" id="divcvv" style="display: none;">
                        <span id="spanDireccion" v-if="errors.cvv" class="error alert errores" role="alert">{{ errors.cvv[0] }}</span>
                      <input type="text" class="form-control" v-model="cvv" data-culqi="card[cvv]" id="card[cvv]" placeholder="CVV"><br>
                    </div>
              </div>
            </div><!-- /.cart__shiping --><br>
          </div> <!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="cart__total-amount" style=" background-color: white; padding-bottom: 80px; border-radius: 10px;">
              <h6 style="padding: 15px;" class="title">Totales del Carrito: </h6>
              <ul class="list-unstyled mb-0" style="padding-left: 20px;">
                <li><span>Subtotal: </span><span>S/ {{ total }}</span></li>
                <!--<li><span>Costo de Envio :</span><span>S/ <input style="border: 0; width: 27px; font-size: 14px; color:#9b9b9b; padding: 0px; text-align: right;" type="text" id="envio" v-model="precio"></span></li>-->
                <li><span>IGV: </span><span>S/ 0.00</span></li>
                <li> <span style=" color: black; font-size: 22px;"><b>Total: </b></span><span style="color: #CF9B67; font-size: 22px;"><b>S/ <input style="border: 0; width: 140px; color: #CF9B67; text-align: right;" type="text" v-model="total"></b></span></li>
              </ul>
                <!--<div style="float: right;">-->
                    <br>
                    <button id="btn_pagar" class="btn btn-primary" style="position: relative; left: 60%;" @click="guardar()">Finalizar Compra</button>
                <!--</div>-->
            </div><!-- /.cart__total-amount -->
            <!--<div class="cart__total-amount" style="margin-bottom: 0px; padding: 0px;">
                <img :src="image_src" alt="imagen">
            </div>-->
          </div><!-- /.col-lg-6 -->
  </div>
</template>
<script>
    //import Culqi from './Culqi'
    export default {
        //name: 'Checkout',
        props: ['usuario'],
        data() {
            return {
                errors:[],
                carts: [],
                zonas: [],
                total: '',
                image_src: '/web/assets/img/pagoseguro.jpg',
                selected:'',
                razon_social:'',
                mes:'',
                anuo:'',
                cvv:'',

                precio:'0.00',
                total_final:'0.00',
            }

        },
        mounted() {
            this.cartContent();
            this.getData();
        },
        created() {
            Bus.$on('changeCart', function () {
                this.cartContent();
            }.bind(this));
        },
        methods: {
            cartContent() {
                axios.get(route('cart.content')).then((response) => {
                    this.carts = response.data.carts;
                    this.total = response.data.total;
                })
            },
            getData() {
                axios.get(route('zona.list')).then(({data}) => {
                    this.zonas = data.map((obj)=>{
                        let zona = {};
                        zona = obj;
                        zona['label'] = obj.zona;
                        return zona;
                    });
                });
            },
            mostrarTipo(tipo) {

                if(tipo=='EFECTIVO'){
                    document.getElementById('ntar').style.display = 'none';
                    document.getElementById('divmes').style.display = 'none';
                    document.getElementById('divano').style.display = 'none';
                    document.getElementById('divcvv').style.display = 'none';
                    document.getElementById('divemail').style.display = 'none';

                    document.getElementById('divcuanto').style.display = 'block';
                }
                else if(tipo=='TARJETA'){
                    document.getElementById('ntar').style.display = 'block';
                    document.getElementById('divmes').style.display = 'block';
                    document.getElementById('divano').style.display = 'block';
                    document.getElementById('divcvv').style.display = 'block';
                    document.getElementById('divemail').style.display = 'block';
                    document.getElementById('divcuanto').style.display = 'none';
                }
            },
            mostrarComprobante(tipo) {

                if(tipo=='BOLETA'){
                    document.getElementById('divnombres').style.display = 'block';
                    document.getElementById('divapellidos').style.display = 'block';
                    document.getElementById('divcelular').style.display = 'block';
                    document.getElementById('divdni').style.display = 'block';
                    

                    document.getElementById('divdir').style.display = 'none';
                    document.getElementById('divrs').style.display = 'none';
                    document.getElementById('divruc').style.display = 'none';
                }
                else if(tipo=='FACTURA'){
                    document.getElementById('divrs').style.display = 'block';
                    document.getElementById('divruc').style.display = 'block';
                    document.getElementById('divdir').style.display = 'block';

                    document.getElementById('divnombres').style.display = 'none';
                    document.getElementById('divapellidos').style.display = 'none';
                    document.getElementById('divcelular').style.display = 'none';
                    document.getElementById('divdni').style.display = 'none';
                }
            },

            changeZona(value) {
               if(value){
                    axios.get(route('zona.list.envio', value)).then(({data}) => {
                        this.precio = data.precio;
                        let precio_con = parseFloat(parseFloat(this.precio).toFixed(2));
                        let total_con = parseFloat(parseFloat(this.total).toFixed(2));
                        let total_f = total_con + precio_con
                        this.total_final = parseFloat(total_f).toFixed(2);
                    });
                }
                else{
                    this.precio = 0.00;
                    this.total_final = 0.00;
                }
            },

            /*
            createToken: function () {
                this.culqi.createToken().then(
                  token => {
                    console.log('resultado ' + token)
                  }
                )
            },
*/
            guardar(){
                $("#direccion").prop("required", true);
                this.errors=[];

                let direccion = $('#direccion').val();
                let referencia = $('#referencia').val();
                let nombres = $('#nombres').val();
                let apellidos = $('#apellidos').val();
                let celular = $('#celular').val();
                let email = $('.email').val();
                let razon_social = $('#razon_social').val();
                let ruc = $('#ruc').val();
                let direccion_doc = $('#direccion_doc').val();
                let tipo_pago = $('input[name=tipoPago]:checked', '#myForm').val();
                let tipo_comprobante = $('input[name=tipoComprobante]:checked', '#myFormulario').val();
                let cliente_id=this.usuario.cliente.id;
                let numero_tarjeta = $('#numero_tarjeta').val();
                let mes = this.mes;
                let anuo = this.anuo;
                let cvv = this.cvv;
                let cuanto_pagar = $('#cuanto_pagar').val();
                let dni = $('#dni').val();
                const params = {
                    direccion : direccion,
                    referencia : referencia,
                    nombres : nombres,
                    apellidos : apellidos,
                    celular : celular,
                    email : email,
                    razon_social : razon_social,
                    ruc : ruc,
                    direccion_doc : direccion_doc,
                    zona : this.selected.id,
                    carrito : this.carts,
                    tipo_pago : tipo_pago,
                    tipo_comprobante : tipo_comprobante,
                    cliente_id: cliente_id,
                    total : this.total_final,
                    numero_tarjeta :numero_tarjeta,
                    mes: mes,
                    anuo : anuo,
                    cvv : cvv,
                    cuanto_pagar:cuanto_pagar,
                    dni:dni,
                }

                this.carritoGlobal = params;
                this.tuFuncion();
                
            /*
                axios.post(route('cliente.pedidos.store'),params)
                .then((response) => {
                    if (response.data) {
                        toastr.success('Se registro el pedido correctamente!');
                    }
                }).catch(error => {
                    if(error.response.status == 422){
                        this.errors=error.response.data.errors
                    }

                });*/

            },
        }

    }
</script>
<style>
  .vs__search, .vs__search::placeholder{
    color: #9b9b9b;
    font-size: 12px;
    font: 400 13.3333px Arial;
  }
  .form-control {
    color: black;
  }

</style>