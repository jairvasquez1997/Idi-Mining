<nav id="left-sidebar-nav" class="sidebar-nav">
    <ul id="main-menu" class="metismenu">

        <li>
            <a href="#" class="has-arrow"><i class="icon-basket"></i> <span>Pedidos</span></a>
            <ul>

                <li><a href="{{route('pedidos_enviados.view')}}">Pedidos Asignados
                        ({{ App\Pedido::where('estado_pedido', '!=', 'FINALIZADO')->where('persona_id',auth()->user()->persona->id)->count()}})</a></li>
                <li><a href="{{route('pedidos_entregados.view')}}">Pedidos Entregados
                        ({{ App\Pedido::where('estado_pedido', 'FINALIZADO')->where('persona_id',auth()->user()->persona->id)->count()}})</a></li>
            </ul>
        </li>

    </ul>
</nav>
