@extends('admin.home')
@section('styles')

    <link href="{{asset('admin/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css">


    <style>
        .table thead th,.table tbody tr td{
            font-size: 11px;
        }
        .table-hover tbody tr:hover{
            background-color: rgb(169, 234, 199);
            cursor: pointer;
        }
        .tabla-head {
            font-size: 12px !important;
            font-weight: 700;
            text-align: center;
            padding: 1% !important;
        }
        .modal-footer{
            display: block;
        }
        @media (min-width: 768px){
            .modal-dialog {
                width: 750px;
                margin: 30px auto;
            }
        }
    </style>
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
                    <li class="breadcrumb-item active">Pedidos</li>
                </ul>
            </div>

        </div>
    </div>

@endsection
@section('content')
<pedidos_enviados-template></pedidos_enviados-template>
@endsection
@section('scripts')


@endsection
