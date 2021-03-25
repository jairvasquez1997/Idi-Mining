
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.Bus = new Vue();
import VueApexCharts from 'vue-apexcharts'



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



Vue.component('costo-template', require('./components/admin/costo.vue'));
Vue.component('zonas-template', require('./components/admin/zonas.vue'));
Vue.component('producto_create-template', require('./components/admin/producto_create.vue'));
Vue.component('producto_edit-template', require('./components/admin/producto_edit.vue'));

Vue.component('empleados-template', require('./components/admin/empleados.vue'));
Vue.component('pedidos_pendientes-template', require('./components/admin/pedidos_pendientes.vue'));
Vue.component('pedidos_enviados-template', require('./components/admin/pedidos_enviados.vue'));
Vue.component('pedidos_entregados-template', require('./components/admin/pedidos_entregados.vue'));
Vue.component('reportes-template', require('./components/admin/reportes.vue'));
Vue.component('subcategoria_edit-template', require('./components/admin/subcategoria_edit.vue'));
Vue.component('slider_edit-template', require('./components/admin/slider_edit.vue'));
Vue.component('pagos-template', require('./components/admin/pagos.vue'));
Vue.component('admin-reporte-cliente', require('./components/admin/reporte/ClienteComponent.vue'));
Vue.component('carrito-producto', require('./components/carrito_producto.vue'));



Vue.component('carrito', require('./components/carrito.vue'));
Vue.component('web-carrito2', require('./components/carrito2.vue'));
Vue.component('web-carrito-header', require('./components/carrito_header.vue'));
Vue.component('carrito-producto-inicio', require('./components/carrito_producto_inicio.vue'));
Vue.component('pedidos-cliente', require('./components/pedidos_cliente.vue'));

Vue.component('apexchart', VueApexCharts);

Vue.mixin({
    methods: {
        route: route,

        destroyDatatable(){
            $('#basic-datatable').DataTable().destroy();
        },
        initDatatable(){
            this.$nextTick(() => {
                $('#basic-datatable').DataTable({
                    language: {
                        paginate: {
                            next: 'Siguiente',
                            previous: 'Anterior'
                        }
                    }
                });
            });
        },
        initDatatableExport(){
            this.$nextTick(() => {
                $('#basic-datatable').DataTable({
                    language: {
                        paginate: {
                            next: 'Siguiente',
                            previous: 'Anterior'
                        }
                    },
                    dom: 'Bfrtip',
                        buttons: [
                            { extend: 'excelHtml5', text: 'Exportar Excel', title : 'Clientes' }
                        ]   
                });
            });
        },

        addCart(producto, qty) {

            let paramt = {
                qty: qty,
                id: producto.id,
                precio: producto.precio,
            }
            

            axios.post(route('carrito.add'), paramt).then(response => { 
                console.log(response.data);
                    if (response.data) {
                        this.messageAddCart();
                        Bus.$emit('changeCart');
                    }else {
                        this.messageError();
                    }
                }).catch(error => {
                console.log(error.response);
                
            });
            
        },
        removeCart(product) {
            axios.get(route('cart.remove', product.rowId))
                .then((response) => {

                    if (response.data) {
                        //this.messageSuccesCart();
                        Bus.$emit('changeCart');
                    } else {
                        this.messageError();
                    }
                }).catch(error => {
            });
        },
        messageAddCart() {
            toastr.success("Se agrego al carrito!");
        },
        messageSuccesCart() {
            toastr.success("Se pudo realizar la acción!");
        },
        messageError() {
            toastr.error("No se pudo realizar la acción!");
        },

    }
});

const app = new Vue({
    el: '#wrapper'
});
