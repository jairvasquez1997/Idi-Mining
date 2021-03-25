<template>
	<div>
  
    <a href="#" class="navbar__action-btn navbar__action-btn-cart">
      <i class="icon-cart"></i><span class="cart__label">{{ carts.length }}</span>
    </a>
    <div class="cart-popup" style="overflow: scroll; max-height: 500px;">
      <ul class="list-unstyled">
        <li class="cart-item" v-for="(cart,index) in carts">
          <div class="cart__item-img"><img :src="image_src" alt="thumb"></div>
          <div class="cart__item-content">
            <h6 class="cart__item-title">{{cart.nombre}}</h6>
            <div class="cart__item-detail">S/ {{cart.price}}</div>
            <i class="cart__item-delete" v-on:click="removeProduct(cart)">&times;</i>
          </div><!-- /.cart-item-content -->
        </li><!-- /.cart-item -->
      </ul>
      <div class="cart-subtotal">
        <span>Subtotal:</span>
        <span class="color-theme">S/ {{total}}</span>
      </div><!-- /.cart-subtotal -->
      <div class="cart-action d-flex justify-content-between">
        <a :href="route('carrito.mostrar')" class="btn btn__primary btn__hover2">Ver Carrito</a>
        <a :href="route('carrito2.mostrar')" class="btn btn__white">Comprar</a>
      </div><!-- /.cart-action -->
    </div><!-- /.cart-popup -->
    <!--<li class="nav__item with-dropdown" style="list-style:none;">-->
   
  <!--</li>-->
</div>
  

  </div><!-- /.navbar-actions -->
</template>
<script>
    export default {
        data() {
            return {
                carts:[],
                total:'',
                image_src: '/web/assets/img/carrito/carrito.png',
            }
        },
        mounted() {
            this.cartContent();
        },
        created() {
            Bus.$on('changeCart', function () {
                this.cartContent();
            }.bind(this));
        },
        methods: {
            cartContent() {
                axios.get(route('cart.content')).then((response) => {
                  
                    this.carts = response.data.carts;
                    this.total = response.data.total;
                    
                })
            },
            removeProduct(cart){
                this.removeCart(cart);
            }
        }

    }
</script>