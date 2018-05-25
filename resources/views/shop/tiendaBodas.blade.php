@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mx-auto">
                    <li><a class="nav-link px-md-5" href="{{ url('home') }}">Mis Bodas Administradas</a></li>
                    <li><a class="nav-link px-md-5" href="{{ url('newB') }}">Nueva Boda</a></li>
                    <li><a class="nav-link px-md-5" href="{{ url('shop') }}">Tienda</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="py-2">
        <a href="{{url('/shop')}}">Tienda</a> -> <a href="{{url('/shopB')}}">Tienda de bodas</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 py-2">
                <div class="card card-default">
                    <div class="card-header">
                        Plan basico de boda
                    </div>
                    <div class="card-body">
                        <p>Paquete basico la boda incluye:</p>
                        <p>* 1 Sala</p>
                        <p>* 10 Mesas</p>
                        <p>* 50 Personas</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ url('newPackB/basic')}}"
                           class="btn btn-primary">
                            <span class="glyphicon glyphicon-remove-circle" aria-hidden="true">seleccionar</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-2">
                <div class="card card-default">
                    <div class="card-header">
                        Plan deluxe de boda
                    </div>
                    <div class="card-body">
                        <p>Paquete deluxe la boda incluye:</p>
                        <p>* 2 Sala</p>
                        <p>* 20 Mesas</p>
                        <p>* 100 Personas</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ url('newPackB/deluxe')}}"
                           class="btn btn-primary">
                            <span class="glyphicon glyphicon-remove-circle" aria-hidden="true">seleccionar</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-2">
                <div class="card card-default">
                    <div class="card-header">
                        Plan premium de boda
                    </div>
                    <div class="card-body">
                        <p>Paquete premium la boda incluye:</p>
                        <p>* 5 Sala</p>
                        <p>* 50 Mesas</p>
                        <p>* 200 Personas</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ url('newPackB/premium')}}"
                           class="btn btn-primary">
                            <span class="glyphicon glyphicon-remove-circle" aria-hidden="true">seleccionar</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
