<template>
    <div class="body">
        <form v-on:submit.prevent="update()">
            <div class="form-group">
                <label>Costo Minimo</label>
                <input type="number" class="form-control" v-model="costo_minimo.precio" :disabled="estadoEdit == false" required>
            </div>
            <button type="submit" class="btn btn-success" v-on:click="guardar()" v-if="estadoEdit">Guardar</button>
            <button class="btn btn-secondary" v-on:click="cancelar()" v-if="estadoEdit">Cancelar</button>
            <button class="btn btn-warning" v-on:click="editar()" v-else="estadoEdit">Editar</button>

        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                costo_minimo: '',
                estadoEdit: false,
            }
        },
        mounted() {
            this.getCostoMinimo();
        },
        methods: {
            getCostoMinimo() {
                axios.get(route('admin.costo.minimo')).then((response) => {
                    this.costo_minimo = response.data;
                })
            },
            editar(){
                this.estadoEdit = true;
            },
            guardar(){
                const params = {
                    id: this.costo_minimo.id,
                    precio: this.costo_minimo.precio,
                };

                axios.post(route('admin.costo.store'), params)
                    .then((response) => {
                       if (response.data) {
                           this.estadoEdit = false;
                           this.getCostoMinimo();
                           toastr.success("Se guardo el registro correctamente!");
                       }else{
                           this.estadoEdit = false;
                           this.getCostoMinimo();
                           toastr.error("No se pudo guardar el registro!");
                       }

                    }).catch(error => {
                    console.log(error.response);
                    toastr.error("No se pudo guardar el registro!");

                });
            },
            cancelar(){
                this.estadoEdit = false;
                this.getCostoMinimo();
            }
        }
    }
</script>
