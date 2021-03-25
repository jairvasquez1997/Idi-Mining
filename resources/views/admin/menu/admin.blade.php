<nav id="left-sidebar-nav" class="sidebar-nav">
    <ul id="main-menu" class="metismenu">


        <li class="active">
            <a href="#" class="has-arrow"><i class="icon-basket"></i> <span>Pedidos</span></a>
            <ul>
                <li><a href="{{route('pedidos_pendientes.view')}}">Pedidos Pendientes ({{ App\Pedido::where('estado_pedido', 'PENDIENTE')->count()}})</a></li>
                <li><a href="{{route('pedidos_enviados.view')}}">Pedidos Enviados ({{ App\Pedido::where('estado_pedido', 'ENVIADO')->count()}})</a></li>
                <!--<li><a href="{{route('pedidos_entregados.view')}}">Pedidos Entregados ({{ App\Pedido::where('estado_pedido', 'FINALIZADO')->count()}})</a></li>-->
            </ul>
        </li>
        <!--<li>
            <a href="{{route('pagos.view')}}" ><i class="icon-home"></i> <span>Pagos Online</span></a>
        </li>-->
        <li>
            <a href="#" class="has-arrow"><i class="icon-home"></i> <span>Gestionar</span></a>
            <ul>
                <li><a href="{{route('categoria.index')}}">Categoria</a></li>
                <li><a href="{{route('producto.index')}}">Producto</a></li>
                <li><a href="{{route('zonas.view')}}">Zonas</a></li>
                <!--<li><a href="{{route('empleados.view')}}">Empleados</a></li>-->
            </ul>
        </li>
        <li>
            <a href="#" class="has-arrow"><i class="icon-bar-chart"></i> <span>Reportes</span></a>
            <ul>
                <li><a href="{{route('reporte.pedido')}}">Reporte de Pedidos</a></li>
                <li><a href="{{route('reporte.cliente')}}">Reporte de Clientes Registrados</a></li>
            </ul>
        </li>
        <!--<li>
            <a href="#" class="has-arrow"><i class="icon-home"></i> <span>Gestionar Web</span></a>
            <ul>
                <li><a href="{{route('categoriaweb.mostrar')}}">Categorias-Web</a></li>
                <li><a href="{{route('subcategoriaweb.mostrar')}}">SubCategorias-Web</a></li>
                <li><a href="{{route('productoweb.mostrar')}}">Productos-Web</a></li>
                {{--<li><a href="#">Clientes</a></li>--}}
                <li><a href="{{route('slidersweb.mostrar')}}">Sliders-Web</a></li>
            </ul>
        </li>-->

    </ul>
</nav>
