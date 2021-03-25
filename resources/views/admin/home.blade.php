@extends('admin.layout')
@section('titulo')
    @include('admin.titulo')
@endsection



@section('menu')
    @if(auth()->user()->rol == 'admin')
        @include('admin.menu.admin')
    @else
        @include('admin.menu.empleado')
    @endif

@endsection

@section('content')
    @if(auth()->user()->rol == 'admin')
        @include('admin.content_index.admin')
    @else
        @include('admin.content_index.empleado')
    @endif

@endsection
