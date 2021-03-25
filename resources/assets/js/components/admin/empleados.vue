<template>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 style="width: 70%;float: left;">Listado de Empleados </h2>

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
                                <th>DNI</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Celular</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr v-for="(empleado,index) in empleados">
                                <td>{{ index+1 }}</td>
                                <td>{{ empleado.dni }}</td>
                                <td>{{ empleado.nombres }}</td>
                                <td>{{ empleado.apellidos }}</td>
                                <td>{{ empleado.celular }}</td>
                                <td class="text-nowrap">
                                    <button title="Editar" v-on:click="edit(empleado)" class="btn btn-info">
                                        <i class="fa fa-edit"></i>
                                    </button>&nbsp;
                                    <button v-on:click="destroy(empleado)" class="btn btn-danger js-sweetalert button"
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
                        <h4 class="title" id="defaultModalLabel">Registrar Empleados </h4>
                    </div>
                    <form class="m-form m-form--fit m-form--label-align-right" v-on:submit.prevent="store()">
                        <div class="modal-body">
                            <div class="form-group m-form__group row">
                                <div class="col-lg-6">
                                    <label>DNI:</label>
                                    <input type="number" class="form-control" min="0" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==8) return false;"
                                           v-model="dni" required>
                                </div>
                                <div class="col-lg-6">
                                    <label>Nombres:</label>
                                    <input type="text" class="form-control" v-model="nombres" required>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">

                                <div class="col-lg-6">
                                    <label>Apellidos:</label>
                                    <input type="text" class="form-control"  v-model="apellidos" required>
                                </div>
                                <div class="col-lg-6">
                                    <label>Celular:</label>
                                    <input type="number" class="form-control" min="0" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==9) return false;"
                                           v-model="celular" required>
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
                        <h4 class="title">Actualizar Empleados </h4>
                    </div>
                    <form class="m-form m-form--fit m-form--label-align-right" v-on:submit.prevent="update(empleado_update.id)">
                        <div class="modal-body">
                            <div class="form-group m-form__group row">
                                <div class="col-lg-6">
                                    <label>DNI:</label>
                                    <input type="number" class="form-control"  v-model="empleado_update.dni" disabled required>
                                </div>
                                <div class="col-lg-6">
                                    <label>Nombres:</label>
                                    <input type="text" class="form-control" v-model="empleado_update.nombres" required>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">

                                <div class="col-lg-6">
                                    <label>Apellidos:</label>
                                    <input type="text" class="form-control"  v-model="empleado_update.apellidos" required>
                                </div>
                                <div class="col-lg-6">
                                    <label>Celular:</label>
                                    <input type="number" class="form-control" min="0" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==9) return false;"
                                           v-model="empleado_update.celular" required>
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
                empleados: [],
                nombres: '',
                apellidos: '',
                celular: '',
                dni: '',
                empleado_update:{'id':'','dni':'','nombres':'','apellidos':'','celular':''}
            }
        },
        mounted() {

            this.listarEmpleados();
        },
        methods: {
            listarEmpleados() {
                axios.get(route('empleados.index')).then((response) => {
                    this.empleados = response.data;
                })
            },
            create() {
                $('#create').modal('show');
            },
            resetForm() {
                this.nombres= '',
                    this.apellidos= '',
                    this.celular= '',
                    this.dni= '',
                    this.empleado_update={'id':'','dni':'','nombres':'','apellidos':'','celular':''}
            },
            store() {
                const params = {
                    dni: this.dni,
                    nombres: this.nombres,
                    apellidos: this.apellidos,
                    celular: this.celular
                };
                axios.post(route('empleados.store'), params)
                    .then((response) => {
                        this.resetForm();
                        this.listarEmpleados();
                        $('#create').modal('hide');
                        if (response.data){
                            toastr.success("Se guardo el registro correctamente!");
                        } else{
                            toastr.error("No se pudo guardar el registro!");
                        }
                    }).catch(error => {
                    toastr.error("No se pudo guardar el registro!");
                });
            },
            edit(empleado) {
                this.empleado_update.id = empleado.id;
                this.empleado_update.dni = empleado.dni;
                this.empleado_update.nombres = empleado.nombres;
                this.empleado_update.apellidos = empleado.apellidos;
                this.empleado_update.celular = empleado.celular;
                $('#edit').modal('show');

            },
            update(id) {

                axios.put(route('empleados.update',id), this.empleado_update).then((response) => {
                    this.resetForm();
                    this.listarEmpleados();
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
            destroy(empleado) {
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
                        axios.delete(route('empleados.destroy', empleado.id))
                            .then((response) => {
                                if (response.data) {
                                    this.listarEmpleados();
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
            empleados(val) {
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
