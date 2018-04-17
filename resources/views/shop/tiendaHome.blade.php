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
    <div class="container">
        <div class="row">
            <div class="col-md-4 py-2">
                <a href="{{url('shopB')}}" class="text">
                    <div class="card card-default">
                        <div class="card-header text-center">
                            Tienda Bodas (administrador)
                        </div>
                        <div class="card-body">
                            <li>Paquete premium</li>
                            <li>Paquete deluxe</li>
                            <li>Paquete basic</li>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-8 py-2">
                <div class="card card-default">
                    <a href="#" class="text">
                        <div class="card-header text-center">
                            Tienda Articulos de boda
                        </div>
                    </a>
                    <div class="card-body">
                        <div class="row">
                            @foreach($categorias as $categoria)
                                <div class="col-md">
                                    <a href="{{url('shop/'.$categoria->id)}}"><li>{{$categoria->name}}</li></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($destacados as $producto)
                <div class="col-md-4 py-2">
                    <a href="{{url('product/'.$producto->id)}}" class="text">
                        <div class="card card-default">
                            <div class="card-header">
                                {{$producto->name}}
                            </div>
                            <div class="card-body">
                                <img class="img-fluid" src="{{$producto->imageURL}}">
                            </div>
                            <div class="card-footer text-center">
                                ${{$producto->price}} cop
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
@endsection
