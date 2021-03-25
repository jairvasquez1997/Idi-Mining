<template>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 style="width: 70%;float: left;">Pedidos Pendientes </h2>
                </div>

                <div class="body">
                    <hr>
                    <br>
                    <div class="table-responsive">
                        <table id="basic-datatable" class="table table-striped table-hover nowrap">
                            <thead>
                            <tr>
                                 <th>#</th>
                                <th>Cliente</th>
                                <th>Celular</th>
                                <th>Zona</th>
                                <th>Dirección</th>
                                <th>Tipo Pago</th>
                                <th>Estado</th>
                                <th>Comprobante</th>
                                <th>Calculadora</th>
                                <th>Fecha - Hora</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(item,index) in items" v-on:click="show(item)">
                                <td>{{ index+1 }}</td>
                                <td>{{ item.cliente.apellidos }} {{ item.cliente.nombres }}</td>
                                <td>{{ item.cliente.celular }}</td>
                                <td>{{ item.zona.zona }}</td>
                                <td>{{ item.direccion }}</td>
                                <td class="centrar">
                                    {{ item.tipo_pago }}
                                </td>
                                 <td v-if="item.tipo_pago == 'TARJETA'" class="centrar">
                                    <span v-if="item.estado_tarjeta==1" class="badge badge-success"
                                          style="font-size: 10px;">COMPLETADO</span>
                                    <span v-else class="badge badge-danger"
                                          style="font-size: 10px;">INCOMPLETO</span>
                                </td>
                                <td v-else class="centrar">-</td>
                                <td style="text-transform: uppercase;" class="centrar">
                                    <span class="badge badge-info" style="font-size: 10px;"> {{ item.documento }}</span>

                                </td>
                                <td><button class="btn btn-primary" v-on:click="showCalculadora(item)" style="background-color: #50D38A;"><img :src="imagen"></button></td>
                                <td>{{ item.created_at }}</td>
                                <td>S/{{ item.total }}</td>

                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
<!--
//-------------------------------------MODAL------------------------------------------------------//
-->
        <div class="modal fade" id="show" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 800px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Pedido </h4>
                    </div>

                    <div class="modal-body">
                        <div class="form-group row " style="margin: 0;">
                            <div class="col-md-7">
                                <h4 class="pedido">Pedido » S/{{item_pedido.total}}</h4>
                            </div>
                            <div class="col-md-5" style="padding: 0 5%;">
                                <div class="estado" id="div_estado">
                                    <i v-if="item_pedido.estado_pedido=='PENDIENTE'" class="fa fa-circle" aria-hidden="true" style="color: #dc3545 !important;"> </i>
                                    <i v-if="item_pedido.estado_pedido=='ENVIADO'" class="fa fa-circle" aria-hidden="true" style="color: #ffc107 !important;"> </i>
                                    <i v-if="item_pedido.estado_pedido=='FINALIZADO'" class="fa fa-circle" aria-hidden="true" style="color: #28a745 !important;"> </i>
                                    Estado: <span>
                                    <span
                                            data-ng-bind="vm.venta.state" class="ng-binding">{{item_pedido.estado_pedido}}</span></span>
                                </div>
                            </div>

                        </div>
                        <form v-on:submit.prevent="cargoPedido(item_pedido)">
                            <p class="linea" style="padding: 0"> &nbsp;</p>
                            <div class="form-group row " style="margin: 0;">
                                <div class="col-md-12">
                                    <h5 class="titulo">DATOS DEL CLIENTE</h5>
                                </div>

                                <div class="col-md-6 ">
                                    <span class="subtitulo">Nombres</span>
                                    <span class="valor">{{item_pedido.cliente.nombres}}</span>
                                </div>

                                <div class="col-md-6 ">
                                    <span class="subtitulo">Apellidos</span>
                                    <span class="valor">{{item_pedido.cliente.apellidos}}</span>
                                </div>
                                <div class="col-md-6 ">
                                    <span class="subtitulo">DNI</span>
                                    <span class="valor">{{item_pedido.dni}}</span>
                                </div>
                                <div class="col-md-6 ">
                                    <span class="subtitulo">Dirección</span>
                                    <span class="valor">{{item_pedido.direccion_actual}}</span>
                                </div>
                                <div class="col-md-6 ">
                                    <span class="subtitulo">Correo</span>
                                    <span class="valor">{{item_pedido.cliente.email}}</span>
                                </div>

                                <div class="col-md-6 ">
                                    <span class="subtitulo">Celular</span>
                                    <span class="valor">{{item_pedido.cliente.celular}}</span>
                                </div>
                            </div>
                            <p class="linea" style="padding: 0"> &nbsp;</p>
                            <div class="form-group row " style="margin: 0;">
                                <div class="col-md-12">
                                    <h5 class="titulo">DATOS DEL PEDIDO</h5>
                                </div>

                                <div class="col-md-6 ">
                                    <span class="subtitulo">Zona</span>
                                    <span class="valor">{{item_pedido.zona.zona}}</span>
                                </div>

                                <div class="col-md-6 ">
                                    <span class="subtitulo">Dirección de Entrega</span>
                                    <span class="valor">{{item_pedido.direccion}}</span>
                                </div>
                                <div class="col-md-6 ">
                                    <span class="subtitulo">Referencia</span>
                                    <span class="valor">{{item_pedido.referencia}}</span>
                                </div>
                                <div class="col-md-6 ">
                                    <span class="subtitulo">Fecha y Hora</span>
                                    <span class="valor">{{item_pedido.created_at}}</span>
                                </div>
                                <div class="col-md-6 ">
                                    <span class="subtitulo">Tipo de Pago</span>
                                    <span class="valor"
                                          style="text-transform: uppercase">{{item_pedido.tipo_pago}}</span>
                                </div>
                                <div class="col-md-6 ">
                                    <span class="subtitulo">Comprobante</span>
                                    <span class="valor"
                                          style="text-transform: uppercase">{{item_pedido.documento}}</span>
                                </div>
                                  <div class="col-md-6 " v-if="item_pedido.cuanto_pagar">
                                    <span class="subtitulo">Con cuanto va a pagar</span>
                                    <span class="valor"
                                          style="text-transform: uppercase">S/ {{item_pedido.cuanto_pagar}}</span>
                                </div>

                            </div>
                            <p class="linea" style="padding: 0" v-if="item_pedido.documento=='FACTURA'"> &nbsp;</p>
                            <div class="form-group row " style="margin: 0;" v-if="item_pedido.documento=='FACTURA'">
                                <div class="col-md-12">
                                    <h5 class="titulo">DATOS DE LA FACTURA</h5>
                                </div>

                                <div class="col-md-6 ">
                                    <span class="subtitulo">Razón Social</span>
                                    <span class="valor">{{item_pedido.empresa}}</span>
                                </div>
                                <div class="col-md-6 ">
                                    <span class="subtitulo">RUC</span>
                                    <span class="valor">{{item_pedido.ruc}}</span>
                                </div>
                                <div class="col-md-6 ">
                                    <span class="subtitulo">Dirección</span>
                                    <span class="valor">{{item_pedido.direccion_empresa}}</span>
                                </div>

                            </div>
                            <p v-if="item_pedido.culqi_cargo_id!=null" class="linea" style="padding: 0"> &nbsp;</p>
                            <div class="form-group row " style="margin: 0;" v-if="item_pedido.culqi_cargo_id!=null">
                                <div class="col-md-12">
                                    <h5 class="titulo">DATOS DE LA Transaccion</h5>
                                </div>

                                <div class="col-md-6 ">
                                    <span class="subtitulo">Marca</span>
                                    <span class="valor">{{transaccion.marca}}</span>
                                </div>

                                <div class="col-md-6 ">
                                    <span class="subtitulo">Tarjeta</span>
                                    <span class="valor">{{transaccion.tarjeta}}</span>
                                </div>
                                <div class="col-md-6 ">
                                    <span class="subtitulo">Estado</span>
                                    <span class="valor">{{transaccion.estado}}</span>
                                </div>

                                <div class="col-md-6 ">
                                    <span class="subtitulo">Fecha y Hora</span>
                                    <span class="valor">{{ item_pedido.created_at}} </span>
                                </div>

                            </div>
                            
                            <div class="form-group row ">
                                <div class="col-md-12">
                                    <p class="linea" style="padding: 0"> &nbsp;</p>
                                    <table class="table table-bordered">
                                        <tr style="background: #50d38a; color: #fff;">
                                            <td class="tabla-head">PRODUCTO</td>
                                            <td class="tabla-head">PRECIO</td>
                                            <td class="tabla-head">CANTIDAD</td>
                                        </tr>
                                        <tr v-for="(item,index) in item_pedido.pedido_detalle" class="centrar">
                                            <td class="columna">{{item.producto.nombre}}</td>
                                            <td class="columna">S/{{item.precio}}</td>
                                            <td class="columna">{{item.cantidad}}</td>
                                        </tr>
                                    </table>
                                    <p class="linea" style="padding: 0"> &nbsp;</p>
                                </div>

                                <div class="col-md-8 "></div>
                                <div class="col-md-4 ">
                                    <span class="subtitulo">Costo de Envio</span>
                                    <span class="valor">S/{{item_pedido.zona.precio}}</span>

                                </div>
                                <div class="col-md-8 "></div>
                                <div class="col-md-4 ">
                                    <span class="subtitulo">Sub total</span>
                                    <span class="valor">S/{{item_pedido.subtotal}}</span>
                                </div>
                                <div class="col-md-8 "></div>
                                <div class="col-md-4 ">
                                    <span class="subtitulo">IGV</span>
                                    <span class="valor">S/{{item_pedido.igv}}</span>

                                </div>
                                <div class="col-md-8 "></div>
                                <div class="col-md-4 ">
                                    <span class="subtitulo">Total</span>
                                    <span class="valor">S/{{item_pedido.total}}</span>
                                </div>
                                <div class="col-md-8 "></div>
                            </div>
                            <div style="text-align: center">
                                <!--
                                <button type="submit" class="btn btn-success">
                                    Enviar pedido
                                </button>
                            -->
                                <button type="button" class="btn btn-danger" v-on:click="resetForm()">
                                    Cerrar
                                </button>
                            </div>
                        </form>
                    </div>


                </div>

            </div>
        </div>
<!-- FIN MODAL ----------------------------------------------------------------------------------------->
<!--
//-------------------------------------MODAL CALCULADORA------------------------------------------------------//
-->
        <div class="modal fade" id="showCalculadora" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 550px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Calculadora</h4>
                    </div>

                    <div class="modal-body">
                        <div class="form-group row " style="margin: 0;  display: flex; align-items: center; justify-content: center;">
                             <input type="button"  class="btn btn-primary" style="border: 1px solid #007AFF ; background-color:#007AFF; padding-top: 3px; border-radius: 5px; color: white;" value="S/ (Soles)" v-on:click="soles()">  &nbsp;&nbsp;&nbsp;&nbsp;
                             <input type="button"   class="btn btn-warning" style="border: 1px solid #FEC107 ; background-color:#FEC107; padding-top: 3px; border-radius: 5px; color: white;" value="$ (Dolares)" v-on:click="dolares()"> 
                        </div>

                        </div>
                        <div class="form-group row " style="margin: 0;">
                            <div class="col-md-6">
                                <label style="font-size: 19px;" class="label1">VENTA CON TARJETA</label>
                                <label style="font-weight: normal;">Ingresa el monto de tu venta</label>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <div id="ver_soles" class="col-md-4" style="display: inherit;">
                               <span style="max-height: 40px; margin-top: 15px;">S/</span>&nbsp;&nbsp;&nbsp; <input style=" max-width: 100px;border-radius: 10px; border-color: #E8E8E8; max-height: 40px; margin-top: 15px;" type="number" min="3" id="venta" v-model="venta"class="tamanio venta">
                            </div>
                            <div id="ver_dolares" class="col-md-4" style="display: none;">
                               <span style="max-height: 40px; margin-top: 15px;">$ &nbsp;</span>&nbsp;&nbsp;&nbsp; <input style=" max-width: 100px;border-radius: 10px; border-color: #E8E8E8; max-height: 40px; margin-top: 15px;" type="number" min="3" id="vdolares" v-model="vdolares" class="tamanio venta">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row " style="margin: 0;">
                            <div class="col-md-6">
                                <label style="font-size: 19px;" class="label1">COMISIÓN</label>
                                <label style="font-weight: normal;">4.30% + $0.30 (más IGV)</label>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <div id="ver_comision_soles" class="col-md-4" style="display: inherit;">
                               <span style="max-height: 40px; margin-top: 15px;">S/</span>&nbsp;&nbsp;&nbsp; <input style=" max-width: 100px;border-radius: 10px; border-color: #E8E8E8; max-height: 40px; margin-top: 15px;" type="number" min="3" id="comision_soles" v-model="comision_soles" class="tamanio venta" disabled>
                            </div>
                            <div id="ver_comision_dolares" class="col-md-4" style="display: none;">
                               <span style="max-height: 40px; margin-top: 15px;">$ &nbsp;</span>&nbsp;&nbsp;&nbsp; <input style=" max-width: 100px;border-radius: 10px; border-color: #E8E8E8; max-height: 40px; margin-top: 15px;" type="number" min="3" id="comision_dolares" v-model="comision_soles" class="tamanio venta" disabled>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row " style="margin: 0;">
                            <div class="col-md-6">
                                <label style="font-size: 19px;" class="label1">DÍA DE VENTA</label>
                                <label style="font-weight: normal;">Ingresa el día de la venta</label>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <div id="" class="col-md-4" style="display: inherit;">
                                <select id="select_tarjeta" class="tamanio" style=" max-width: 100px;border-radius: 10px; border-color: #E8E8E8; max-height: 40px; margin-top: 15px; margin-left: 22px;">
                                   <option value="">Seleccione</option>
                                   <option value="Lunes">Lunes</option>
                                   <option value="Martes">Martes</option>
                                   <option value="Miercoles">Miércoles</option>
                                   <option value="Jueves">Jueves</option>
                                   <option value="Viernes">Viernes</option>
                                   <option value="Sabado">Sábado</option>
                                   <option value="Domingo">Domingo</option>
                               </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row " style="margin: 0;">
                            <div class="col-md-6">
                                <label style="font-size: 19px;" class="label1">DÍA DE DEPÓSITO</label>
                                <label style="font-weight: normal;">Tus depósitos siempre llegarán en un plazo de 4 días útiles*</label>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <div id="" class="col-md-4" style="display: inherit;">
                                <input style=" max-width: 100px;border-radius: 10px; border-color: #E8E8E8; max-height: 40px; margin-top: 15px;margin-left: 22px;" type="text" v-model="dia_tarjeta" id="dia_tarjeta" disabled>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row " style="margin: 0; display: flex; align-items: center; justify-content: center;" >
                            <div class="col-sm-11" align="center" style="border: 1px solid #4FD189 ; background-color:#4FD189; padding-top: 10px; border-radius: 10px;">
                            <label  style="color:white;" class="" id="deposito_tarjeta"> TU DEPOSITO SERÁ: </label> </div>
                        </div>
                        <hr>
                        <form>
                            <div style="text-align: center">
                                <!--
                                <button type="submit" class="btn btn-success">
                                    Enviar pedido
                                </button>
                            -->
                                <button type="button" class="btn btn-danger" v-on:click="closeCalculadora()">
                                    Cerrar
                                </button>
                            </div>
                        </form>
                    </div>


                </div>

            </div>
        </div>
<!-- FIN MODAL ----------------------------------------------------------------------------------------->
    
    </div>
</template>

<script>
    export default {
        data() {
            return {
                items: [],
                repartidores: [],
                item_pedido: {cliente: {}, pedido_detalle: [], zona: {}},
                transaccion:'',
                item_pago: {total: ''},
                imagen: '/APP/estancia/images/calculadora/calculadora.png',
                venta:'',
                comision_soles:'',
                comision_dolares:'',
                vdolares:'',
                dia_tarjeta:'',

            }
        },
        mounted() {

            this.listarPedidos();
            this.venta_soles();
            this.venta_dolares();
            this.dias();
        },
        methods: {
            listarPedidos() {
                axios.get(route('pagos.get', 'TARJETA')).then((response) => {
                    this.destroyDatatable();
                    this.items = response.data;
                    this.initDatatable();
                })
            },

            show(item) {
                this.item_pedido = item;
                this.item_pedido.persona_id = "";
                this.transaccion = item.transaccion;
                if ($("#showCalculadora").data('bs.modal') && $("#showCalculadora").data('bs.modal').isShown){ 
                    console.log('modal abierto')
                    $('#show').modal('hide');
                } 
                else{
                    console.log('modal no abierto')
                    $('#show').modal('show');
                }   
                
            },
            showCalculadora(item) {
                this.item_pago = item;
                $('#showCalculadora').modal('show');
            },
            closeCalculadora() {

                
                this.item_pago = {total: ''};
                this.venta = '';
                this.comision_soles = '';
                this.comision_dolares = '';
                this.vdolares = '';
                this.dia_tarjeta = '';
                $('#select_tarjeta').val('');
                document.getElementById("deposito_tarjeta").innerText= "TU DEPOSITO SERÁ : ";
                $('#showCalculadora').modal('hide');

            },
            resetForm() {

                $('#show').modal('hide');
                this.item_pedido = {cliente: {}, comprobante: {}, pedido_detalle: [], zona: {}}
            },
            resetForm2()
            {

            },
            cargoPedido(pedido) {
                swal.fire({
                    title: '¿Estás seguro?',
                    text: "Enviar pedido con el repartidor",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Confirmar'
                }).then((result) => {

                    if (result.value) {
                        axios.get(route('pedido.envio', [pedido.id, pedido.persona_id]))
                            .then((response) => {
                                if (response.data) {
                                    this.listarPedidos();
                                    this.resetForm();
                                    $('#show').modal('hide');
                                    Swal.fire(
                                        'Confirmado!',
                                        'El pedido esta siendo enviado',
                                        'success'
                                        
                                        
                                    )
                                    
                                } else {
                                    Swal.fire(
                                        'Error',
                                        'Ha ocurrido un error y el servicio no está disponible temporalmente',
                                        'error'
                                    )
                                }

                            })
                    }
                }).catch(error => {
                    toastr.error("Ha ocurrido un error y el servicio no está disponible temporalmente");
                });
            },
            venta_soles(){
                $("#venta").change(function(event){
                var $precio = document.getElementById("venta").value;
                var $porcentaje = 0.0430;
                var $dolar = 0.97;
             
                var $calculo = ($dolar*0.18) + ($precio*$porcentaje) + $dolar;

                    $("#comision_soles").val(Math.round($calculo*100)/100);

                var $resultado = $precio - (Math.round($calculo*100)/100);
                document.getElementById("deposito_tarjeta").innerText= "TU DEPOSITO SERÁ : S/ " + $resultado;
                }); 
            },
            venta_dolares(){
                $("#vdolares").change(function(event){
                var $precio = document.getElementById("vdolares").value;
                var $porcentaje = 0.0430;
                var $dolar = 0.30;
             
                var $calculo = ($dolar*0.18) + ($precio*$porcentaje) + $dolar;

                    $("#comision_dolares").val(Math.round($calculo*100)/100);

                var $resultado = $precio - (Math.round($calculo*100)/100);
                document.getElementById("deposito_tarjeta").innerText= "TU DEPOSITO SERÁ : $ " + $resultado;
                }); 
            },

            dias(){
                var $dia_efe = ''; 
                $("#select_tarjeta").change(function(event){

                    var $dia_tarjeta = $("#select_tarjeta").val();

                    if($dia_tarjeta == ""){$dia_efe = "Viernes"};
                    if($dia_tarjeta == "Lunes"){$dia_efe = "Viernes"};
                    if($dia_tarjeta == "Martes"){$dia_efe = "Lunes"};
                    if($dia_tarjeta == "Miercoles"){$dia_efe = "Martes"};
                    if($dia_tarjeta == "Jueves"){$dia_efe = "Miércoles"};
                    if($dia_tarjeta == "Viernes"){$dia_efe = "Jueves"};
                    if($dia_tarjeta == "Sabado"){$dia_efe = "Viernes"};
                    if($dia_tarjeta == "Domingo"){$dia_efe = "Viernes"};

                    $("#dia_tarjeta").val($dia_efe);
                }); 
            },

            dolares(){
                this.venta='';
                this.comision_soles='';
                this.dia_tarjeta = '';
                $('#select_tarjeta').val('');
                document.getElementById("deposito_tarjeta").innerText= "TU DEPOSITO SERÁ : ";
                document.getElementById('ver_dolares').style.display = 'inherit';
                document.getElementById('ver_soles').style.display = 'none';
                document.getElementById('ver_comision_soles').style.display = 'none';
                document.getElementById('ver_comision_dolares').style.display = 'inherit';
            },
            soles(){
                this.vdolares='';
                this.comision_dolares='';
                this.dia_tarjeta = '';
                $('#select_tarjeta').val('');
                document.getElementById("deposito_tarjeta").innerText= "TU DEPOSITO SERÁ : ";
                document.getElementById('ver_dolares').style.display = 'none';
                document.getElementById('ver_soles').style.display = 'inherit';
                document.getElementById('ver_comision_soles').style.display = 'inherit';
                document.getElementById('ver_comision_dolares').style.display = 'none';
            }

        },

    }
</script>
