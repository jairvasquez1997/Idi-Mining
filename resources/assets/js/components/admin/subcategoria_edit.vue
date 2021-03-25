<template>
	<div class="form-group">
        <div class="row clearfix">
            <div class="col-md-6">
                <label>Tipo</label>
                <select class="form-control" name="tipo" v-model="tipo" v-on:change="getCategorias" required>
                    <option value="CARTA">CARTA</option>
                    <option value="BAR">BAR</option>
                </select>
            </div>
            <div class="col-md-6 carta ">
                <label>Categoria</label>
                <select class="form-control" name="categoriaweb_id" v-model="subcategoria_web.categoriaweb_id"  required>
                    <option v-for="categoria in categorias" v-bind:value="categoria.id">{{categoria.nombre}}</option>
                </select>
            </div>
            
        </div>
    </div>
</template>
<script>
    export default {
        props:['subcategoria_web'],
        data() {
            return {
                tipo: this.subcategoria_web.categoria_web.tipo,
                categorias:[],
            }
        },
        mounted() {
        	this.getCategorias();
        },
        methods: {
        	getCategorias() {

                axios.get(route('categorias.get',this.tipo)).then((response) => {
                    this.categorias = response.data;
                })
            },
        },
    }
</script>
