@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mx-auto">
                    <li><a class="nav-link px-md-5" href="{{ url('boda/'.$boda_id) }}">Mi Boda</a></li>
                    <li><a class="nav-link px-md-5" href="{{ url('boda/'.$boda_id.'/newS') }}">Nueva Sala</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default text-center">
                    <div class="card-header">Nueva Sala</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('boda/'.$boda_id.'/newS') }}">
                            {{ csrf_field() }}
                            <div class="row justify-content-center px-5">
                                <div class="col-md-3 col-form-label text-md-right">
                                    <label for="name" class="bl">Nombre Sala:</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="name" id="name" placeholder="mi sala" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
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
