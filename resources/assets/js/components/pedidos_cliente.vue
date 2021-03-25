<template>
	<div class="col-sm-12 col-md-12 col-lg-12">
		    <div class="cart-table table-responsive">
		      <table class="table table-bordered">
		        <thead>
		          	<tr>
	                    <th>Productos</th>
	                    <th>Precio</th>
	                    <th>Cantidad</th>
	                    <th>Total</th>
	                    <th>Estado</th>
	                </tr>
	            </thead>
	                <tbody v-for="(pedido,index) in pedidos">
	                	<tr>
			                <td colspan="4" style="background: #f7f7f7;">
			                    <strong>Información</strong> <br>
			                    Dirección: {{pedido.direccion}}
			                </td>
			                <td colspan="1" style="background: #f7f7f7;" >
			                	Total:<strong> S/ {{pedido.total}}</strong>
			                    <br>
			                    <strong><p v-if="pedido.estado_pedido=='PENDIENTE'" style="color: #D81717;">{{pedido.estado_pedido}}</p></strong>
			                    <strong><p v-if="pedido.estado_pedido=='ENVIADO'" style="color: #F98B00;">{{pedido.estado_pedido}}</p></strong>
			                    <strong><p v-if="pedido.estado_pedido=='FINALIZADO'" style="color: #00B336;">{{pedido.estado_pedido}}</p></strong>
			                </td>
			            </tr>
			            
	                  <tr class="cart__product " v-for="(detalle,i) in pedido.pedido_detalle">
	                    <td class="cart__product-item">
	                      <div class="cart__product-img">
	                        <img :src="image_src" alt="product">
	                      </div>
	                      <div class="cart__product-title">
	                        <h6>{{ detalle.producto.nombre }}</h6>
	                      </div>
	                    </td>
	                    <td class="cart__product-price">
	                    	{{ detalle.precio }}
	                    </td>
	                    <td class="cart__product-quantity">
	                    	{{ detalle.cantidad }}
	                    </td>
	                    <td class="cart__product-total">S/ {{ detalle.precio * detalle.cantidad }}</td>
	                  </tr>
	                </tbody>
	              </table>
	            </div>
	  		</div>
	</div>
</template>
<script>
    export default {
        data() {
            return {
                image_src: '/web/assets/img/carrito/carrito.png',
                pedidos: [],
                total: '',
            }
        },
        mounted() {
            this.getPedidos();
        },
        created() {
           
        },
        methods: {
            getPedidos() {
                axios.get(route('pedidos.cliente.pedido')).then((response) => {
                    this.pedidos = response.data;
                    console.log(this.pedidos);
                })

            },
        }

    }
</script>