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
                @if (isset($user_role) && $user_role == "ADMIN")
                <li><a class="nav-link px-md-5" href="{{ url('product') }}">Ver Productos(ADMIN)</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    @if (count($bodas) == 0)
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center">
                    <h1>No tienes bodas por administrar, <small>te invitamos a que crees una o selecciones algun plan</small></h1>
                </div>
            </div>
        </div>
    @else
        @for($contador = 0; $contador < count($bodas); $contador++)
            @if($contador == 0)
                <div class="row">
            @elseif($contador%3 == 0)
                </div>
                <div class="row">
            @endif
                    <div class="col-md-4 py-2">
                        <div class="card card-default">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-5">
                                        {{ $bodas[$contador]->nombre_boda }} - {{ $bodas[$contador]->cargo }}
                                    </div>
                                    <div class="col-7">
                                        <a href="{{ url('boda/'.$bodas[$contador]->id) }}"
                                           class="btn btn-secondary">editar</a>
                                        <a href="{{ url('deleteB/'.$bodas[$contador]->id)}}"
                                           onclick="return confirm('¿Estas seguro de eliminar este elemento?')"
                                           class="btn btn-danger">
                                            <span class="glyphicon glyphicon-remove-circle" aria-hidden="true">eliminar</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>{{ $bodas[$contador]->descripcion_boda }}</p>
                                <p>Fecha: {{ strftime("%d/%m/%Y", $bodas[$contador]->fecha_boda) }}</p>
                            </div>
                        </div>
                    </div>
            @if($contador+1 == count($bodas))
                </div>
            @endif
        @endfor
    @endif
</div>
@endsection
