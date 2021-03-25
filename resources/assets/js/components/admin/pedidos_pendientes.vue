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
                                    <!--<th>Zona</th>-->
                                    <th>Dirección</th>
                                    <th>Tipo Pago</th>
                                    <th>Estado</th>
                                    <th>Comprobante</th>
                                    <th>Fecha - Hora</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item,index) in items" v-on:click="show(item)" :key="index">
                                    <td>{{ index+1 }}</td>
                                    <td>{{ item.cliente.apellidos }} {{ item.cliente.nombres }}</td>
                                    <td>{{ item.cliente.celular }}</td>
                                    <!--<td>{{ item.zona.zona }}</td>-->
                                    <td>{{ item.direccion }}</td>
                                    <td>
                                        {{ item.tipo_pago }}
                                    </td>
                                    <td v-if="item.tipo_pago == 'TARJETA'" class="centrar">
                                        <span v-if="item.estado_tarjeta==1" class="badge badge-success"
                                            style="font-size: 10px;">COMPLETADO</span>
                                        <span v-else class="badge badge-danger"
                                            style="font-size: 10px;">INCOMPLETO</span>
                                    </td>
                                    <!--<td v-else class="centrar">-</td>-->
                                    <td style="text-transform: uppercase;">
                                        <span class="badge badge-info" style="font-size: 10px;">
                                            {{ item.documento }}</span>

                                    </td>
                                    <td>{{ item.created_at }}</td>
                                    <td>S/{{ item.total }}</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

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
                                    <i class="fa fa-circle" aria-hidden="true" style="color: #dc3545 !important;"> </i>
                                    Estado: <span>
                                        <span data-ng-bind="vm.venta.state" class="ng-binding">Pendiente</span></span>
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
                                    <span class="valor">{{item_pedido.cliente.dni}}</span>
                                </div>
                                <div class="col-md-6 ">
                                    <span class="subtitulo">Dirección</span>
                                    <span class="valor">{{item_pedido.direccion}}</span>
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

                                <!--<div class="col-md-6 ">
                                    <span class="subtitulo">Zona</span>
                                    <span class="valor">{{item_pedido.zona.zona}}</span>
                                </div>-->

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
                                    <span class="valor" style="text-transform: uppercase">S/
                                        {{item_pedido.cuanto_pagar}}</span>
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
                            
                            
                            <div class="form-group row ">
                                <div class="col-md-12">
                                    <p class="linea" style="padding: 0"> &nbsp;</p>
                                    <table class="table table-bordered">
                                        <tr style="background: #50d38a; color: #fff;">
                                            <td class="tabla-head">PRODUCTO</td>
                                            <td class="tabla-head">PRECIO</td>
                                            <td class="tabla-head">CANTIDAD</td>
                                        </tr>
                                        <tr v-for="(item,index) in item_pedido.pedido_detalle" :key="index" class="centrar">
                                            <td class="columna">{{item.producto.nombre}}</td>
                                            <td class="columna">S/{{item.precio}}</td>
                                            <td class="columna">{{item.cantidad}}</td>
                                        </tr>
                                    </table>
                                    
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
                                <button type="submit" class="btn btn-success">
                                    Enviar pedido
                                </button>
                                <button type="button" class="btn btn-danger" v-on:click="resetForm()">
                                    Cerrar
                                </button>
                            </div>
                        </form>
                    </div>


                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                items: [],
                repartidores: [],
                item_pedido: {
                    cliente: {},
                    pedido_detalle: [],
                    zona: {}
                },
            }
        },
        mounted() {

            this.listarPedidos();
        },
        methods: {
            listarPedidos() {
                axios.get(route('pedidos.get', 'PENDIENTE')).then((response) => {
                    this.destroyDatatable();
                    this.items = response.data;
                    this.initDatatable();
                })
            },
            getRepartidores() {
                axios.get(route('repartidores.get')).then((response) => {
                    this.repartidores = response.data;
                })
            },
            show(item) {
                this.getRepartidores();
                this.item_pedido = item;
                this.item_pedido.persona_id = "";
                $('#show').modal('show');
            },
            resetForm() {

                $('#show').modal('hide');
                this.item_pedido = {
                    cliente: {},
                    comprobante: {},
                    pedido_detalle: [],
                    zona: {}
                }
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
                // $path_to_firebase_cm = 'https://fcm.googleapis.com/fcm/send';
                // $token =
                //     "eOvjkN0yKDE:APA91bFxb9BUXV4lC5V-EhuoV-rtO0MERZXzEte3AGpx7knruATFtUoYtrZhcRDA6_OaumyCWrL0L9OPZWWIoWdZSNSTT_pkvalAh1wu_Twn9HSkf9XjvpaOjpfNoQPGfLLHy9o1-Gj8";
                // $fields = array(
                //     'to' => $token,
                //     'notification' => array('title' => 'Estancia-Delivery', 'body' => 'nuevo pedido enviado'),
                //     'data' => array('message' => '$message')
                // );

                // $headers = array(
                //     'Authorization:key=AAAApzf1dxA:APA91bGfJVYpaKnP7G3QaUJBz5EB8sy9ICwyL_14oqqFZXRbprX4sldFUbbfbKXpi6QEMg-nrQNolh8pvI9cN99PXLByHL9H-RVHk-I_pqWozrTe5c5Hcu8oodaJZ4uh-AvKbSpLaQb_ ',
                //     'Content-Type:application/json'
                // );

                // $ch = curl_init();

                // curl_setopt($ch, CURLOPT_URL, $path_to_firebase_cm);
                // curl_setopt($ch, CURLOPT_POST, true);
                // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                // curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
                // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

                // $result = curl_exec($ch);

                // curl_close($ch);
            }

        },

    }
</script>