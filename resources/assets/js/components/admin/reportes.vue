<template>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 style="width: 70%;float: left;">Reporte de Pedidos</h2>

                </div>
                <div class="body">
                    <hr>
                    <div class="form-group m-form__group row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-3">
                            <label>Mes</label>
                            <input type="month" class="form-control" v-model="filter.date"
                                   v-on:change="filterChange">
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="row">
                        <div class="col-md-6" style="text-align: center">
                            <h5>Pedidos por Empleado</h5>
                            <apexchart width="450" type="donut" :options="empleados"
                                       :series="pedido_empleados"></apexchart>
                        </div>
                        <div class="col-md-6" style="text-align: center">
                            <h5>Pedidos Mensuales</h5>
                            <apexchart width="500" type="bar" :options="meses" :series="pedidos_mensuales"></apexchart>
                        </div>
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
                filter: {date: ''},
                empleados: {labels:['Empleados']},
                pedido_empleados: [],
                meses: {
                    chart: {
                        id: 'vuechart-example'
                    },
                    xaxis: {
                        categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                            'Octubre', 'Noviembre', 'Diciembre']
                    }
                },
                pedidos_mensuales: [{
                    name: 'N° Pedidos',
                    data: []
                }]

            }
        },
        mounted() {
            console.log(this.pedidos_mensuales[0]);
        },
        methods: {
            filterChange(){
                this.getPedidosEmpleados();
                this.getPedidosMensuales();
            },
            getPedidosEmpleados() {
                axios.get(route('reporte.pedido.empleados', this.filter.date)).then((response) => {
                    this.empleados.labels.splice(0, this.empleados.labels.length);
                    for(let i=0; i < response.data.empleados.length;i++){
                        this.empleados.labels.push(response.data.empleados[i]);
                    }
                    this.pedido_empleados = response.data.n_pedidos;

                })
            },
            getPedidosMensuales() {
                axios.get(route('reporte.pedido.menusales', this.filter.date)).then((response) => {
                    this.pedidos_mensuales[0].data = response.data;
                    // for(let i=0; i < response.data.length;i++){
                    //     this.pedidos_mensuales[0].data.push(response.data[i]);
                    // }
                })
            }
        }


    }
</script>
