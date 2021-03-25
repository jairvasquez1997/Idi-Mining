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
                    <li class="breadcrumb-item active">Zonas</li>
                </ul>
            </div>

        </div>
    </div>

@endsection
@section('content')
    <zonas-template></zonas-template>
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
                }});
        });

    </script>
@endsection
