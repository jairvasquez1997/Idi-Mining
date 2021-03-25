<template>
  <div class="menu-item">
    <h4 class="menu__item-title">{{ producto.nombre }}</h4>
    <!--<span class="pricing__tag">New</span>-->
    <span class="menu__item-price">S/ {{ producto.precio }}</span>
    <p class="menu__item-desc" id="frase">{{ producto.descripcion }}</p>
    <span style="float: right; "><a v-on:click="clickCart" href="javascript:;" class="btn btn__primary mx-2 my-1" style="min-width: 130px; margin-right: .0rem!important; margin-top: .0rem!important; margin-left: .0rem!important; margin-bottom: .0rem!important; height: 25px; line-height: 18px;">AGREGAR</a></span>
    <br>
  </div><!-- /.menu-item -->
</template>
<script>
    export default {
        props: ['producto'],
        data() {
            return {}
        },
        mounted() {
            console.log(this.producto);
        },
        methods: {
            clickCart() {
                this.addCart(this.producto, 1);
            }
        }
    }
</script>