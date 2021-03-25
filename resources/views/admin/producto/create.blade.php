@extends('admin.home')
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/vendor/dropify/css/dropify.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('admin/vendor/summernote/dist/summernote.css')}}"/>
@endsection
@section('titulo')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-8 col-sm-12">
                <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                class="fa fa-arrow-left"></i></a> Dashboard</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Producto</li>
                </ul>
            </div>

        </div>
    </div>
@endsection
@section('content')
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Registrar Producto</h2>
                </div>
                <hr>
                <div class="body">
                    @include('flash::message')
                    
                    

                    {!! Form::open(['route' => 'productow.nuevo','method'=>'POST', 'files'=>true]) !!}
                    {{ csrf_field() }}
                    <producto_create-template></producto_create-template>
                    <div class="form-group">
                        <div class="row clearfix">

                            <div class="col-md-6">
                                <label>Producto</label>
                                {!! Form::text('nombre',null, ['class' => 'form-control','required']) !!}
                            </div>
                            <div class="col-md-6">
                                <label>Precio</label>
                                {!! Form::number('precio',null, ['min' => '0.0','step' => '0.01','class' => 'form-control','required']) !!}

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <label>Descripción</label>

                                {!! Form::textarea('descripcion',null, ['class' => 'form-control','required']) !!}

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <label>Imagen del producto</label>

                                {!! Form::file('imagen', ['id'=>"input-file-now",'class'=>"dropify",'required','data-allowed-file-extensions'=>'jpg png'] ) !!}
                                <small class="form-control-feedback"> Ingrese una imagen. <strong>Tamaño recomendado
                                        520 x 320</strong></small>

                            </div>
                        </div>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a type="button" href="{{ route('producto.index') }}" class="btn btn-secondary">Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('admin/vendor/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('admin/js/pages/forms/dropify.js')}}"></script>
    <script src="{{asset('admin/vendor/summernote/dist/summernote.js')}}"></script>
    <!--{{--<script>--}}
        {{--$('#tipo').on('change',function () {--}}
            {{--if (this.value == 'CARTA') {--}}
                {{--$('.carta').removeClass('hidden')--}}
            {{--}else{--}}
                {{--$('.carta').addClass('hidden')--}}
            {{--}--}}
        {{--})--}}
    {{--</script>--}}-->
@endsection
