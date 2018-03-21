@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mx-auto">
                    <li><a class="nav-link px-md-5" href="{{ route('login') }}">Mis Bodas Administradas</a></li>
                    <li><a class="nav-link px-md-5" href="{{ route('register') }}">Nueva Boda</a></li>
                    <li><a class="nav-link px-md-5" href="{{ route('register') }}">Tienda de bodas</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default text-center">
                    <div class="card-header">Nueva boda</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('newB') }}">
                            {{ csrf_field() }}
                            <div class="row justify-content-center px-5">
                                <div class="col-md-3 col-form-label text-md-right">
                                    <label for="name" class="bl">Nombre Boda:</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="name" id="name" placeholder="mi boda" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <div class="row justify-content-center px-5">
                                <div class="col-md-3 col-form-label text-md-right">
                                    <label for="description">Descripción:</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="description" id="description" placeholder="Se celebrara ..." class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <div class="row justify-content-center px-5">
                                <div class="col-md-3 col-form-label text-md-right">
                                    <label for="date">Fecha:</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="date" name="date" id="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('date'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('date') }}</strong>
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
