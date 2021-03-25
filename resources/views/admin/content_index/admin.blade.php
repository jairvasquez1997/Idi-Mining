

<!--<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card overflowhidden number-chart">
            <div class="body">
                <div class="number">
                    <h6>Pedidos Pendientes</h6>
                    <span>{{ App\Pedido::where('estado_pedido', 'PENDIENTE')->count()}}</span>
                </div>
            </div>
            <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                 data-line-Width="1" data-line-Color="#f79647" data-fill-Color="#fac091">1,4,1,3,7,1</div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card overflowhidden number-chart">
            <div class="body">
                <div class="number">
                    <h6>Pedidos Enviados</h6>
                    <span>{{ App\Pedido::where('estado_pedido', 'E')->count()}}</span>
                </div>
            </div>
            <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                 data-line-Width="1" data-line-Color="#604a7b" data-fill-Color="#a092b0">1,4,2,3,6,2</div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card overflowhidden number-chart">
            <div class="body">
                <div class="number">
                    <h6>Pedidos Entregados</h6>
                    <span>{{ App\Pedido::where('estado_pedido', 'F')->count()}}</span>
                </div>
            </div>
            <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                 data-line-Width="1" data-line-Color="#4aacc5" data-fill-Color="#92cddc">1,4,2,3,1,5</div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card overflowhidden number-chart">
            <div class="body">
                <div class="number">
                    <h6>Empleados</h6>
                    <span>{{ App\Persona::join('users','users.persona_id','personas.id')->where('users.rol', 'delivery')->count()}}</span>
                </div>
            </div>
            <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                 data-line-Width="1" data-line-Color="#4f81bc" data-fill-Color="#95b3d7">1,3,5,1,4,2</div>
        </div>
    </div>
</div>-->
<div class="row clearfix">
    <div class="col-12">
        <div class="card">
            <img src="{{asset('images/slider06.jpg')}}" style="width: 100%;border-radius: 10px;">
        </div>
    </div>
    <!--<div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Costos</h2>
            </div>
            <costo-template></costo-template>
        </div>
    </div>-->
</div>
<!--{{--<div class="row clearfix">--}}
    {{--<div class="col-lg-12 col-md-12">--}}
        {{--<div class="card">--}}
            {{--<img src="{{asset('images/slider01.jpg')}}" style="width: 100%;border-radius: 10px;">--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--
@section('styles')
    <link rel="stylesheet" href="{{asset('admin/css/blog.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/dropify/css/dropify.min.css')}}"/>
@endsection
@php
    $cabeceras = App\Cabecera::get();
    $titulo = App\Titulo::first();
@endphp
<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Texto del Slider</h2>
            </div>
            <hr>
            <div class="body">
                <div class="new_post">
                    {!! Form::open(['route' => 'texto.store','method'=>'POST', 'files'=>true]) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="row clearfix">

                            <div class="col-md-12">
                                <label>Titulo</label>
                                <input type="text" class="form-control" name="titulo" id="titulo" value="{{$titulo->titulo}}" disabled>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row clearfix">

                            <div class="col-md-12">
                                <label>Descripción</label>
                                <textarea rows="4" class="form-control no-resize" name="descripcion" id="descripcion"  disabled> {{$titulo->descripcion}}</textarea>
                            </div>

                        </div>
                    </div>
                    <div class="post-toolbar-b">
                        <button class="btn btn-warning editar"><i class="icon-pencil text-light"></i></button>
                        <button type="submit" class="btn btn-primary hidden guardar">Guardar</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

    @foreach($cabeceras as $i => $cabecera)

        <div class="col-lg-4 col-md-12">
            <div class="card single_post">
                <div class="body">
                    <div class="img-post">
                        <img class="d-block img-fluid"
                             src="{{asset('images/cabeceras/'.$cabecera->imagen)}}"
                             alt="First slide">
                    </div>
                    <h3><a href="scripts:;">{{$cabecera->seccion}}</a></h3>

                </div>
                <div class="footer">
                    <div class="actions">
                        <a href="#UpdateImagen" class="btn btn-info UpdateImagen" data-toggle="modal"
                           data-id="{{$cabecera->id}}">Cambiar</a>

                    </div>
                </div>
            </div>
        </div>

    @endforeach


    <div class="modal fade" id="UpdateImagen" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="defaultModalLabel">Cambiar Imagen</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route' => 'cabecera.store','method'=>'POST', 'files'=>true]) !!}
                    {{ csrf_field() }}
                    <input type="hidden" name="cabecera_id" id="cabecera_id">
                    <div class="form-group">
                        <div class="row clearfix">
                            <div class="col-md-12">
                                {!! Form::file('imagen', ['class'=>"form-control dropify",'required','data-allowed-file-extensions'=>'jpg png'] ) !!}
                                <small class="form-control-feedback"> Ingrese una imagen. <strong>Tamaño
                                        1920x768</strong></small>
                            </div>

                        </div>
                    </div>
                    <br>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

</div>
@section('scripts')
    <script src="{{asset('admin/vendor/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('admin/js/pages/forms/dropify.js')}}"></script>
    <script>
        $(document).on('click', '.UpdateImagen', function (e) {
            e.preventDefault();
            var id = $(this).data('id');

            $('#cabecera_id').val(id);

        });

        $(document).on('click', '.editar', function (e) {
            e.preventDefault();
            $('#titulo').prop('disabled', false);
            $('#descripcion').prop('disabled', false);
            $('.guardar').removeClass('hidden');

        });
    </script>
@endsection--}}
-->