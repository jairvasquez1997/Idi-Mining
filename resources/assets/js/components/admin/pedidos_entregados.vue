<template>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 style="width: 70%;float: left;">Pedidos Entregados </h2>
                </div>
                <div class="body">
                    <hr>
                    <br>
                    <div class="table-responsive">
                        <table id="basic-datatable" class="table table-striped  table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Repartidor</th>
                                <th>Cliente</th>
                                <th>Celular</th>
                                <th>Zona</th>
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
                                <td>{{ item.persona.nombres }} {{ item.persona.apellidos }}</td>
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
                                <td>{{ item.created_at }}</td>
                                <td>S/{{ item.total }}</td>
                            </tr>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="show" aria-hidden="true"  >
            <div class="modal-dialog"  style="max-width: 800px;" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Pedido </h4>
                    </div>
                        <div class="modal-body">
                            <div class="form-group row " style="margin: 0;">
                                <div class="col-md-8">
                                    <h4 class="pedido">Pedido » S/{{item_pedido.total}}</h4>
                                </div>
                                <div class="col-md-4" style="padding: 0 5%;">
                                    <div class="estado" id="div_estado">
                                        <i class="fa fa-circle" aria-hidden="true" style="color: #28a745 !important;"> </i> Estado: <span><span
                                            data-ng-bind="vm.venta.state" class="ng-binding">Entregado</span></span>
                                    </div>
                                </div>

                            </div>

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
                                    <span class="valor" style="text-transform: uppercase">{{item_pedido.tipo_pago}}</span>
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
                            <div class="form-group row ">
                                <div class="col-md-12">
                                    <p class="linea" style="padding: 0"> &nbsp;</p>
                                    <table class="table table-bordered">
                                        <tr style="background: #50d38a; color: #fff;">
                                            <td class="tabla-head">PRODUCTO</td>
                                            <td class="tabla-head">PRECIO</td>
                                            <td class="tabla-head">CANTIDAD</td>
                                        </tr>
                                        <tr v-for="(item,index) in item_pedido.pedido_detalle" class="centrar" :key="index">
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
                        </div>

                    <div class="modal-footer" style="text-align: center">
                        <button type="button" class="btn btn-danger" v-on:click="resetForm()" style="padding: .375rem 2rem;">
                            Cerrar
                        </button>
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
                item_pedido:{cliente:{},comprobante:{},pedido_detalle:[],zona:{}},
            }
        },
        mounted() {
            this.listarPedidos();
        },

        methods: {
            listarPedidos() {
                axios.get(route('pedidos.get','FINALIZADO')).then((response) => {
                    this.destroyDatatable();
                    this.items = response.data;
                    this.initDatatable();
                })
            },
            show(item) {
                this.item_pedido = item;
                $('#show').modal('show');
            },
            resetForm(){
                $('#show').modal('hide');
                this.item_pedido={cliente:{},comprobante:{},pedido_detalle:[],zona:{}}
            }

        }

    }
</script>
