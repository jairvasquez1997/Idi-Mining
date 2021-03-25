<template>
  <div class="col-sm-12 col-md-12 col-lg-12">
    <div class="cart-table table-responsive">
      <table class="shop_table cart">
        <thead>
          <tr>
            <th colspan="2" class="product-thumbnail">Productos</th>
            <th class="product-price">Precio</th>
            <th class="product-quantity">Cantidad</th>
            <th class="product-subtotal">Total</th>
            <th class="product-remove"><i class="fa fa-trash-o" aria-hidden="true"></i></th>
          </tr>
        </thead>

        <tbody>
          <tr class="cart__product " v-for="(cart,index) in carts">
            <td colspan="2" class="product-name" style="height: 60px;"><a href="shop-single.html">{{ cart.nombre }}</a></td>
            <td class="product-price">s/. {{cart.price}}</td>
            <td class="product-quantity">{{ cart.qty }}</td>
            <td class="product-subtotal">s/. {{ cart.subtotal }}</td>
            <td class="product-remove"><button type="button" class="btn-remove" v-on:click="removeProduct(cart)"></button></td>
          </tr>
        </tbody>
      </table>

      <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8"></div>
        <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4 col-xl-4">
          <ul class="shopping-cart_total">
            <li class="total">Total<span>s/. {{ total }}</span></li>
            <!--<li>Delivery<span>s/. 5.00</span></li>-->
            <!--<li class="total">Total<span>s/. </span></li>-->
          </ul><!-- /shopping-cart_total -->
        </div><!-- /col -->
      </div>
      
      <div class="checkout-action clearfix">
        <button type="submit" class="btn btn-black-2 pull-right" name="checkout"><a :href="route('carrito2.mostrar')" style="color: white;">Finalizar compra</a></button>
        <button type="submit" class="btn btn-primary pull-right" name="update_cart"><a :href="route('productos.mostrar')">Seguir comprando</a></button>
      </div>
    </div><!-- /.cart-table -->
  </div><!-- /.col-lg-12 -->
</template>
<script>
    export default {
        data() {
            return {
                carts: [],
                total: '',
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
            removeProduct(cart) {
                this.removeCart(cart);
            },
            minus(product) {
                if (product.qty > 1)
                    product.qty--;
                this.updateCart(product)
            },
            plus(product) {
                product.qty++;
                this.updateCart(product)
                var cant = $("#cantidad").val();
            }
        }

    }
</script>