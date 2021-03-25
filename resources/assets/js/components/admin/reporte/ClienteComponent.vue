<template>
    <div class="card">
        <div class="header">
            <h2 style="width: 70%;float: left;">Listado de Clientes Registrados </h2>
        </div>
        <div class="body">
            <hr>
            <br>
            <div class="table-responsive">
                <table id="basic-datatable" class="table table-striped  nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Cliente</th>
                            <th>Correo</th>
                            <th>Celular</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item, index) in items" :key="index">
                            <td>{{ index+1 }}</td>
                            <td>{{item.nombres}} {{item.apellidos}}</td>
                            <td>{{item.email}}</td>
                            <td>{{item.celular}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props:['user'],
        data() {
            return {
                items: [],
            }
        },
        mounted() {
            this.getClientes();
        },
        methods: {
            getClientes() {
                axios.post(route('cliente.get')).then((response) => {
                    this.destroyDatatable();
                    this.items = response.data;
                    if (this.user.rol == 'admin') {
                        this.initDatatableExport();
                    }else{
                         this.initDatatable();
                    }
                    
                }).catch(error => {
                    this.messageError(error.response.data.message);
                })
            },
  
        }
    }
</script>