<template>
    
    <div class="product-detail">
        <h1 class="h4 text-uppercase">{{producto.nombre}}</h1>
        <br>
        <div class="amount"><b>s/. {{producto.precio}}</b></div>
        <br>
        <p>{{producto.descripcion}}</p>
        <br>                                  
            <input v-model="quantity" class="input_quantity" type="text" id="quantity">
            <button v-on:click="clickCart" class="btn btn-black-2 radius"><i class="fa fa-shopping-cart"></i>Agregar al carrito</button>
            <button class="btn btn-black radius"><a :href="route('carrito.mostrar')" style="color: white;">Comprar</a></button>
            <button class="btn btn-black radius"><a :href="route('')" style="color: white;"> PDF</a></button>
            <div class="clearfix"></div>
    </div>
</template>
<script>
    export default {
        props: ['producto'],
        data() {
            return {
                quantity: 1
            }
        },
        mounted() {
            this.messageAddCart();
        },
        methods: {
            clickCart() {
                
                let valor = $('#quantity').val();
                this.addCart(this.producto, valor);
                //console.log(valor);
            }
        }
    }
</script>