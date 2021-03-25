<template>
	<div class="form-group">
        <div class="row clearfix">
            <div class="col-md-6">
                <label>Grupo</label>
                <select class="form-control" id="grupo" name="grupo" v-model="grupo" v-on:change="mostrar" required>
                    <!--<option value="0">--Seleccionar Grupo--</option>-->
                    <option value="CATEGORIA_PRODUCTOS">CATEGORIA DE PRODUCTOS</option>
                    <!--<option value="INICIO">INICIO</option>-->
                </select>
            </div>
            <div class="col-md-6">
                <label>Slider</label>
                <input type="text" name="nombre" v-model="nombre" class='form-control' required>
            </div>
        </div>
        <div class="row clearfix" id="categoria">
            <div class="col-md-6" id="categoriatip" style="display: none;">
                <br>
                <label>Tipo</label>
                <select class="form-control" id="tipo" name="tipo" v-model="tipo" v-on:change="getCategorias">
                    <option value="0">--Seleccionar Tipo de Categoria--</option>
                    <option value="CARTA">CARTA</option>
                    <option value="BAR">BAR</option>
                </select>
            </div>
            <div class="col-md-6" id="categoriacat" style="display: none;">
                <br>
                <label>Categoria</label>
                <select class="form-control" name="categoriaweb_id" v-model="categoriaweb">
                    <option v-for="categoria in categorias" v-bind:value="categoria.id">{{categoria.nombre}}</option>
                </select>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props:['slider'],
        data() {
            return {
                tipo: this.slider.categoria_web.tipo,
                categorias:[],
                grupo: this.slider.grupo,
                nombre: this.slider.nombre,
                categoriaweb: this.slider.categoriaweb_id,
            }
        },
        mounted() {
        	this.getCategorias();
        	this.mostrar();
        },
        methods: {
        	mostrar(){
        		if(this.grupo=='CATEGORIA_PRODUCTOS')
        		{
        			document.getElementById('categoriatip').style.display = 'block';
        			document.getElementById('categoriacat').style.display = 'block';
        		}
        	},
        	getCategorias() {
                axios.get(route('categorias.get',this.tipo)).then((response) => {
                    this.categorias = response.data;
                })
            },
        },
    }
</script>