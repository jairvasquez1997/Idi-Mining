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
                    <h2>Editar Producto</h2>
                </div>
                <hr>
                <div class="body">
                    @include('flash::message')
                    
                    {!! Form::open(['route' => ['producto.update',$producto->id],'method'=>'PUT', 'files'=>true]) !!}

                    {{ csrf_field() }}
                    <producto_edit-template :producto="{{  json_encode($producto->load('categoria')) }} "></producto_edit-template>
                    <div class="form-group">
                        <div class="row clearfix">

                            <div class="col-md-6">
                                <label>Producto</label>
                                {!! Form::text('nombre',$producto->nombre, ['class' => 'form-control','required']) !!}
                            </div>
                            <div class="col-md-6">
                                <label>Precio</label>
                                {!! Form::number('precio',$producto->precio, ['min' => '0.0','step' => '0.01','class' => 'form-control','required']) !!}

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Descripción</label>
                                {!! Form::textarea('descripcion',$producto->descripcion, ['class' => 'form-control','required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label text-right">Imagen</label>
                                        <div class="col-sm-10">
                                            <input name="imagen" type="file" id="input-file-now" class="dropify" 
                                            data-allowed-file-extensions="jpg png"
                                            data-default-file="{{ asset( '/images/producto/'.$producto->imagen ) }}"/>
                                            <span>Tama&ntilde;o Recomendado 520 x 320</span>
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
    <script>
        // $(document).ready(function() {
        //     if ($('#tipo').val() == 'CARTA') {
        //         $('.carta').removeClass('hidden')
        //     } else {
        //         $('.carta').addClass('hidden')
        //     }
        //     $('#tipo').on('change', function () {
        //         if (this.value == 'CARTA') {
        //             $('.carta').removeClass('hidden')
        //         } else {
        //             $('.carta').addClass('hidden')
        //         }
        //     })
        //})
        //;

    </script>
@endsection
