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
                    <li class="breadcrumb-item active">SubCategoria-Web</li>
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
                    <h2>Editar SubCategoria-Web</h2>
                </div>
                <hr>
                <div class="body">
                    @include('flash::message')

                    {!! Form::open(['route' => ['subcategoriaweb.update',$subcategoria->id],'method'=>'PUT']) !!}
                    {{ csrf_field() }}
                    <subcategoria_edit-template :subcategoria_web="{{  json_encode($subcategoria->load('categoriaWeb')) }} "></subcategoria_edit-template>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">


                            </div>
                            <div class="col-md-6">
                                <label>Sub Categoria</label>
                                {!! Form::text('nombre',$subcategoria->nombre, ['class' => 'form-control','required']) !!}
                            </div>

                        </div>

                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a type="button" href="{{ route('subcategoriaweb.mostrar') }}" class="btn btn-secondary">Cancelar</a>
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
