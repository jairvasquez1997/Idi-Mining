
@extends('admin.home')
@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
<style>
    .buttons-excel{
        background: #50d38a !important;
        color: #fff  !important;
        border-color: #50d38a  !important;
    }
</style>
@endsection
@section('titulo')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-8 col-sm-12">
                <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth">
                    <i class="fa fa-arrow-left"></i></a> Dashboard</h2>

                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Clientes</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
    <admin-reporte-cliente :user="{{auth()->user()}}"></admin-reporte-cliente>
    </div>
</div>
<!-- Modeal para crear -->
@endsection
@section('scripts')

<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>

@endsection


