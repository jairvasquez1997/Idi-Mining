@extends('admin.home')
@section('styles')

    <link href="{{asset('admin/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css">

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
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 style="width: 70%;float: left;">Listado de Productos </h2>

                    <a href="{{route('productoweb.create')}}" class="btn btn-verde" style="float: right;">
                        <span> Registrar</span></a>
                </div>

                <div class="body">
                    <hr>
                    @include('flash::message')
                    <br>
                    <div class="table-responsive">
                        <table id="basic-datatable" class="table table-striped  nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Categoria</th>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($productosweb as $i => $productoweb)
                                <tr>

                                    <td>{{ $i+1 }}</td>
                                    <td>{{$productoweb->categoriaWeb->nombre}} </td>
                                    <td>{{$productoweb->nombre}}</td>
                                    <td>S/.{{$productoweb->precio}}</td>
                                    <td class="text-nowrap">

                                        <a href="{route('productoweb.edit',$productoweb->id)}}" class="btn btn-info"
                                           title="Editar">
                                            <i class="fa fa-edit"></i>
                                        </a>&nbsp;
                                        <a href="#" class="btn btn-danger js-sweetalert button"
                                           data-id="{{$productoweb->id}}"
                                           title="Eliminar">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {{--<script src="{{asset('admin/assets/bundles/datatablescripts.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/pages/tables/jquery-datatable.js')}}"></script>
    <script src="{{asset('admin/vendor.min.js')}}"></script>--}}
    <script src="{{asset('admin/app.min.js')}}"></script>
    <script src="{{asset('admin/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('admin/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/datatables.init.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#basic-datatable').DataTable({
                language: {
                    paginate: {
                        next: 'Siguiente',
                        previous: 'Anterior'
                    }
                }
            });
        });

        $(document).on('click', '.button', function (e) {
            e.preventDefault();
            var id = $(this).data('id');

            swal.fire({
                title: "??Est??s seguro?",
                text: "??No podr??s recuperar este registro!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'S??, eliminarlo!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "get",
                        url: "producto/delete/" + id,
                        success: function (data) {
                            Swal.fire(
                                'Eliminado!',
                                'El registro ha sido eliminado.',
                                'success')
                            location.reload();
                        }
                    });
                }
            });
        });


    </script>
@endsection
