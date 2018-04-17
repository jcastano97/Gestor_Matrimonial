@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mx-auto">
                    <li><a class="nav-link px-md-5" href="{{ url('boda/'.$boda_id) }}">Mi Boda</a></li>
                    <li><a class="nav-link px-md-5" href="{{ url('boda/'.$boda_id.'/sala/'.$sala_id) }}">Mi Sala</a></li>
                    <li><a class="nav-link px-md-5" href="{{ url('boda/'.$boda_id.'/sala/'.$sala_id.'/newM') }}">Nueva mesa</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default text-center">
                    <div class="card-header">Nueva Mesa</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('boda/'.$boda_id.'/sala/'.$sala_id.'/newM') }}">
                            {{ csrf_field() }}
                            <div class="row justify-content-center px-5">
                                <div class="col-md-3 col-form-label text-md-right">
                                    <label for="name" class="bl">Número de la mesa:</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="number" name="numero" id="numero" placeholder="12" class="form-control{{ $errors->has('numero') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('numero'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row justify-content-center px-5">
                                <div class="col-md-3 col-form-label text-md-right">
                                    <label for="name" class="bl">Capacidad de personas en la mesa:</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="number" name="capacidad" id="capacidad" placeholder="5" class="form-control{{ $errors->has('capacidad') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('capacidad'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('capacidad') }}</strong>
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
