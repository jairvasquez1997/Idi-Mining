<template>
    <div class="form-group">
        <div class="row clearfix">
            <!--<div class="col-md-2">
                <label>Tipo</label>
                <select class="form-control" name="tipo" v-model="tipo" v-on:change="getCategorias" required>
                    <option value="CARTA">CARTA</option>
                    <option value="BAR">BAR</option>
                </select>
            </div>-->
            <div class="col-12 carta ">
                <label>Categoria</label>
                <select class="form-control" name="categoria_id" v-model="producto.categoria_id" required>
                    <option v-for="categoria in categorias" v-bind:value="categoria.id">{{categoria.nombre}}</option>
                </select>
            </div>
            <!--<div class="col-md-5 carta ">
                <label>SubCategoria</label>
                <select class="form-control" name="subcategoriaweb_id" v-model="producto.subcategoriaweb_id">
                    <option v-for="subcategoria in subcategorias" v-bind:value="subcategoria.id">{{subcategoria.nombre}}</option>
                </select>
            </div>-->
        </div>
    </div>
</template>
<script>
    export default {
        props:['producto'],
        data() {
            return {
                categorias: [],
                
            }
        },
        mounted() {
            this.getCategorias();
            
        },
        methods: {
            getCategorias() {

                axios.get(route('categorias.getData')).then((response) => {
                    this.categorias = response.data;
                })
            },
            
        },
    }
</script>
