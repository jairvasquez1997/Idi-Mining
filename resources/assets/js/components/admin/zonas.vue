<template>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 style="width: 70%;float: left;">Listado de Zonas </h2>

                    <button v-on:click="create()" title="Crear" class="btn btn-verde" style="float: right;">
                        <span> Registrar</span></button>
                </div>

                <div class="body">
                    <hr>

                    <br>
                    <div class="table-responsive">
                        <table id="basic-datatable" class="table table-striped  nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Zona</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr v-for="(zona,index) in zonas">
                                <td>{{ index+1 }}</td>
                                <td>{{ zona.zona }}</td>
                                <td>{{ zona.precio }}</td>
                                <td class="text-nowrap">
                                    <button title="Editar" v-on:click="edit(zona)" class="btn btn-info">
                                        <i class="fa fa-edit"></i>
                                    </button>&nbsp;
                                    <button v-on:click="destroy(zona.id)" class="btn btn-danger js-sweetalert button"
                                            title="Eliminar">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </td>

                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="create" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="title" id="defaultModalLabel">Registrar Zona </h4>
                    </div>
                    <form class="m-form m-form--fit m-form--label-align-right" v-on:submit.prevent="store()">
                        <div class="modal-body">
                            <div class="form-group m-form__group row">
                                <div class="col-lg-12">
                                    <label>Zona:</label>
                                    <input type="text" class="form-control" v-model="zona" required>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-12">
                                    <label>Precio:</label>
                                    <input type="number" class="form-control" min='0.00' step='0.01' v-model="precio"
                                           required>
                                </div>

                            </div>

                        </div>

                        <div class="modal-footer" style="text-align: center">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="resetForm()">
                                Cancelar
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="modal fade" id="edit" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="title">Actualizar Zona </h4>
                    </div>
                    <form class="m-form m-form--fit m-form--label-align-right" v-on:submit.prevent="update(zona_update.id)">
                        <div class="modal-body">
                            <div class="form-group m-form__group row">
                                <div class="col-lg-12">
                                    <label>Zona:</label>
                                    <input type="text" class="form-control" v-model="zona_update.zona" required>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-12">
                                    <label>Precio:</label>
                                    <input type="number" class="form-control" min='0.00' step='0.01' v-model="zona_update.precio"
                                           required>
                                </div>

                            </div>

                        </div>

                        <div class="modal-footer" style="text-align: center">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="resetForm()">
                                Cancelar
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                zonas: [],
                zona: {},
                precio: '',
                zona_update:{'id':'','zona':'','precio':''}
            }
        },
        mounted() {

            this.listarZonas()

        },
        methods: {
            listarZonas() {
                axios.get(route('zonas.index')).then((response) => {
                    this.zonas = response.data;
                    
                })
            },
            create() {
                $('#create').modal('show');
            },
            resetForm() {
                this.zona = '',
                    this.precio = '',
                    this.zona_update={'id':'','zona':'','precio':''}
            },
            store() {
                const params = {
                    zona: this.zona,
                    precio: this.precio
                };
                axios.post(route('zonas.store'), params)
                    .then((response) => {
                        this.resetForm();
                        this.listarZonas();
                        $('#create').modal('hide');
                        
                        if (response.data){
                            toastr.success("Se guardo el registro correctamente!");
                        } else{
                            toastr.error("No se pudo guardar el registro!");
                        }
                    }).catch(error => {
                    toastr.error("No se pudo guardar el registro!");
                    console.log(error);
                });
            },
            edit(zona) {
                this.zona_update.id = zona.id;
                this.zona_update.zona = zona.zona;
                this.zona_update.precio = zona.precio;
                $('#edit').modal('show');

            },
            update(id) {

                axios.put(route('zonas.update',id), this.zona_update).then((response) => {
                    this.resetForm();
                    this.listarZonas();
                    $('#edit').modal('hide');
                    if (response.data){
                        toastr.success("Se guardo el registro correctamente!");
                    } else{
                        toastr.error("No se pudo guardar el registro!");
                    }
                }).catch(error => {
                    console.log(error.response.data);
                    toastr.error("No se pudo guardar el registro!");
                });
            },
            destroy(zona) {
                swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡No podrás recuperar este registro!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminarlo!'
                }).then((result) => {

                    if (result.value) {
                        axios.delete(route('zonas.destroy', zona))
                            .then((response) => {
                                if (response.data) {
                                    this.listarZonas();
                                    Swal.fire(
                                        'Eliminado!',
                                        'El registro ha sido eliminado.',
                                        'success'
                                    )
                                } else {
                                    Swal.fire(
                                        'No se puede eliminar!',
                                        'El registro tiene dependecia',
                                        'error'
                                    )
                                }

                            })
                    }
                })

            }
            ,
        },
        watch: {
            zonas(val) {
                $('#basic-datatable').DataTable().destroy();
                this.$nextTick(() => {
                     $('#basic-datatable').DataTable({
                language: {
                    paginate: {
                        next: 'Siguiente',
                        previous: 'Anterior'
                    }
                }});
                });
            }

        }
    }
</script>
