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
                    <li><a class="nav-link px-md-5" href="{{ url('boda/'.$boda_id.'/consultar_invitados') }}">Consultar Invitados</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="col-12 py-4">
            <div class="card card-default">
                <div class="card-body">
                    @for($contador = 0; $contador < count($salas); $contador++)
                        <h1>Sala: {{$salas[$contador]->nombre_sala}}</h1>

                        @for($contador1 = 0; $contador1 < count($mesas); $contador1++)

                            @if($mesas[$contador1]->id_sala == $salas[$contador]->id)
                                <h2>Mesa# {{$mesas[$contador1]->numero_mesa}}</h2>

                                <h3>Invitados</h3>

                                @for($contador2 = 0; $contador2 < count($invitados); $contador2++)

                                    @if($invitados[$contador2]->id_mesa == $mesas[$contador1]->id)
                                        <p>{{$invitados[$contador2]->nombre_invitado}}</p>
                                    @endif

                                @endfor

                            @endif

                        @endfor

                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
