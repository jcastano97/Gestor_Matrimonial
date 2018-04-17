@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mx-auto">
                    <li><a class="nav-link px-md-5" href="{{ url('home') }}">Mis Bodas Administradas</a></li>
                    <li><a class="nav-link px-md-5" href="{{ url('boda/'.$boda_id) }}">Mi Boda</a></li>
                    <li><a class="nav-link px-md-5" href="{{ url('boda/'.$boda_id.'/newS') }}">Nueva Sala</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @if (count($salas) == 0)
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="text-center">
                        <h1>No tienes salas por administrar, <small>te invitamos a que crees una <a href="{{url('boda/'.$boda_id.'/newS')}}">aquí</a></small></h1>
                    </div>
                </div>
            </div>
        @else
            @for($contador = 0; $contador < count($salas); $contador++)
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
                                            {{ $salas[$contador]->nombre_sala }}
                                        </div>
                                        <div class="col-7">
                                            <a href="{{ url('boda/'.$boda_id.'/sala/'.$salas[$contador]->id) }}"
                                               class="btn btn-secondary">editar</a>
                                            <a href="{{ url('boda/'.$boda_id.'/deleteS/'.$salas[$contador]->id)}}"
                                               onclick="return confirm('¿Estas seguro de eliminar este elemento?')"
                                               class="btn btn-danger">
                                                <span class="glyphicon glyphicon-remove-circle" aria-hidden="true">eliminar</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>{{ $salas[$contador]->capacidad_sala }}</p>
                                    <?php

                                    ?>
                                </div>
                            </div>
                        </div>
                        @if($contador+1 == count($salas))
                    </div>
                @endif
            @endfor
        @endif
    </div>
@endsection
