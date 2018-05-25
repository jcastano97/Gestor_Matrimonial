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
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default text-center">
                    <div class="card-header">Nuevo invitado</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('boda/'.$boda_id.'/sala/'.$sala_id.'/mesa/'.$mesa_id.'/newI') }}">
                            {{ csrf_field() }}
                            <div class="row justify-content-center px-5">
                                <div class="col-md-3 col-form-label text-md-right">
                                    <label for="cedula" class="bl">Cedula:</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" maxlength="10" name="cedula" id="cedula" placeholder="cedula" class="form-control{{ $errors->has('cedula') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('cedula'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('cedula') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row justify-content-center px-5">
                                <div class="col-md-3 col-form-label text-md-right">
                                    <label for="name" class="bl">Nombre:</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="name" id="name" placeholder="nombre" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row justify-content-center px-5">
                                <div class="col-md-3 col-form-label text-md-right">
                                    <label for="name" class="bl">Dirección:</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="address" id="address" placeholder="pereira c31 #2 - 5" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row justify-content-center px-5">
                                <div class="col-md-3 col-form-label text-md-right">
                                    <label for="name" class="bl">Teléfono:</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="phone" maxlength="14" id="phone" placeholder="3128812312" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row justify-content-center py-4">
                                <button type="submit" class="btn btn-primary">
                                    crear
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
