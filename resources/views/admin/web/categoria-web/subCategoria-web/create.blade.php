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
                    <h2>Registrar SubCategoria-Web</h2>
                </div>
                <hr>
                <div class="body">
                    @include('flash::message')

                    {!! Form::open(['route' => 'subcategoriaweb.store','method'=>'POST']) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label>Tipo</label>
                                <select class="form-control" id="tipo" name="tipo" required>
                                    <option value="0">--Seleccionar Tipo de Categoria--</option>
                                    <option value="CARTA">CARTA</option>
                                    <option value="BAR">BAR</option>
                                </select>
                            </div>
                            <div class="col-md-6 carta ">
                                <label>Categoria</label>
                                <select class="form-control" name="categoriaweb_id"  id="categoriaweb_id" required>
                                    <option value="0">--Seleccionar Categoria--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">


                            </div>
                            <div class="col-md-6">
                                <label>Sub Categoria</label>
                                {!! Form::text('nombre',null, ['class' => 'form-control','required']) !!}
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
    <script>
        $(document).ready(function(){
            
            $("select[name=tipo]").change(function(){
                var cat=[];
                var ti =$('select[name=tipo]').val();
                $.ajax({
                    // la URL para la petici??n
                    url : "categoriaweb/get/" + ti,
                    type : 'GET',
                    success : function(data) {
                        cat=data;
                        var select = document.getElementsByName("categoriaweb_id")[0];
                        $("#categoriaweb_id").empty();
                        console.log(cat);
                        for (var i=0; i<cat.length; i++) {
                          var option = document.createElement("option");
                          option.text = cat[i]['nombre'];
                          option.value = cat[i]['id'];
                          select.add(option);
                         }
                    },
                });
            
            });
        });
    </script>
@endsection
