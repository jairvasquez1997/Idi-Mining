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
                    <li class="breadcrumb-item active">Categoria</li>
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
                    <h2>Editar Categoria</h2>
                </div>
                <hr>
                <div class="body">
                    @include('flash::message')
                    {!! Form::open(['route' => ['categoria.update',$categoria->id],'method'=>'PUT','files'=>true]) !!}

                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="row clearfix">
                            <!--<div class="col-md-6">
                                <label>Tipo</label>
                                {!! Form::select('tipo', ['CARTA'=>'CARTA','BAR'=>'BAR'],$categoria->tipo, ['class' => 'form-control','id'=>'tipo','required']) !!}
                            </div>-->
                            <div class="col-12">
                                <label>Categoria</label>
                                {!! Form::text('nombre', $categoria->nombre, ['class' => 'form-control','required']) !!}
                            </div>
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Imagen para la APP</label>
                                <input type="file" id="input-file-now-custom-3" class="dropify"
                                       data-allowed-file-extensions='jpg png'
                                       data-default-file="{{ asset( 'images/categoria/'.$categoria->imagen ) }}"
                                       name="imagen"/>

                                <small class="form-control-feedback"> Ingrese una imagen. <strong>Tama���o
                                        517x314</strong></small>

                            </div>
                            <div class="col-md-6">
                                <label>Imagen para la WEB</label>
                                <input type="file" id="input-file-now-custom-3" class="dropify"
                                       data-allowed-file-extensions='jpg png'
                                       data-default-file="{{ asset( 'images/categoriaweb/'.$categoria->imagen_web ) }}"
                                       name="imagen_web"/>

                                <small class="form-control-feedback"> Ingrese una imagen. <strong>Tama���o
                                        517x314</strong></small>

                            </div>

                        </div>

                    </div>-->

                    <br>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a type="button" href="{{ route('categoria.index') }}" class="btn btn-secondary">Cancelar</a>
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
@endsection
