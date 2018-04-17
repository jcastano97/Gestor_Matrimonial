@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mx-auto">
                    <li><a class="nav-link px-md-5" href="{{ url('boda/'.$boda_id) }}">Mi Boda</a></li>
                    <li><a class="nav-link px-md-5" href="{{ url('boda/'.$boda_id.'/sala/'.$sala_id) }}">Mi Sala</a></li>
                    <li><a class="nav-link px-md-5" href="{{ url('boda/'.$boda_id.'/sala/'.$sala_id.'/mesa/'.$mesa_id) }}">Mi mesa</a></li>
                    <li><a class="nav-link px-md-5" href="{{ url('boda/'.$boda_id.'/sala/'.$sala_id.'/mesa/'.$mesa_id.'/newI') }}">Nuevo invitado</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

        <div class="card card-default">
            <div class="card-header">
                Invitados
            </div>
            <div class="card-body">
                @if(count($invitados) != 0)
                    @for($contador = 0; $contador < count($invitados); $contador++)
                        <h4>{{ $invitados[$contador]->nombre_invitado }}</h4>
                    @endfor
                @else
                    <h1>No tienes invitados en la mesa, <small>añadelos pulsando <a href="{{url('boda/'.$boda_id.'/sala/'.$sala_id.'/mesa/'.$mesa_id.'/newI')}}">aquí</a></small></h1>
                @endif
            </div>
        </div>
    </div>
@endsection
