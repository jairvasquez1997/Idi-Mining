@extends('admin.home')

@section('content')
    <div class="row clearfix">
        <div class="col-lg-8 col-md-12">
            <div class="card w_profile">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"><img src="{{asset('admin/images/user.png')}}"
                                                                           alt=""></div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0">
                                <strong>{{Auth::user()->persona->nombres}}</strong> {{Auth::user()->persona->apellidos}}
                            </h4>
                            <p>{{Auth::user()->username}}</p>
                            <p class="social-icon">
                                <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                            </p>
                            <div class="row">
                                <div class="col-4">
                                    <h5>{{ App\Noticia::where('estado',1)->count()}}</h5>
                                    <small>Noticias</small>
                                </div>
                                <div class="col-4">
                                    <h5>{{ App\Publicacion::where('estado',1)->count()}}</h5>
                                    <small>Publicacones</small>
                                </div>
                                <div class="col-4">
                                    <h5>{{ App\User::where('estado',1)->count()}}</h5>
                                    <small>Usuarios</small>
                                </div>
                            </div>
                            {{--<div class="m-t-30">
                                <button class="btn btn-primary">Cambiar Password</button>
                                <button class="btn btn-success">Actualizar Datos</button>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2>Fecha</h2>
                    <ul class="header-dropdown">
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="new_timeline">
                        <div class="header">
                            <div class="color-overlay">
                                @php

                                    date_default_timezone_set('America/Bogota');

                                    $date = new \DateTime();

                                    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                                    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

                                    $dia=$dias[date('w')];
                                    $mes=$meses[date('n')-1];
                                    $ano=date('Y');




                                @endphp
                                <div class="day-number">{{$date->format('j')}}</div>
                                <div class="date-right">
                                    <div class="day-name">{{$dia}}</div>
                                    <div class="month">{{$mes}} {{$ano}}</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection