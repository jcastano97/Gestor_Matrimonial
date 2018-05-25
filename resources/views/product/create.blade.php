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
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default text-center">
                    <div class="card-header">Nuevo producto</div>
                        <form method="POST" action="{{ url('newProduct') }}">
                            {{ csrf_field() }}
                            <div class="card-body">
                                    <div class="row py-1">
                                        <div class="col-md-4">
                                            Nombre
                                        </div>
                                        <div class="col-md-8">
                                            <input name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" >
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-md-4">
                                            Descripción
                                        </div>
                                        <div class="col-md-8">
                                            <input name="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" >
                                            @if ($errors->has('description'))
                                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-md-4">
                                            Precio
                                        </div>
                                        <div class="col-md-8">
                                            <input name="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" >
                                            @if ($errors->has('price'))
                                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-md-4">
                                            Categoria
                                        </div>
                                        <div class="col-md-8">
                                            <select name="category" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" >
                                                @if ($errors->has('category'))
                                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('category') }}</strong>
                                </span>
                                                @endif
                                                <option value="">Elija categoria</option>
                                                @for($contador = 0; $contador < count($categories); $contador++)
                                                    <option value="{{$categories[$contador]->id}}">{{$categories[$contador]->name}}</option>
                                                @endfor
                                                <option value="0">Otro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-md-4">
                                            URL imagen
                                        </div>
                                        <div class="col-md-8">
                                            <input name="imageURL" type="text" class="form-control{{ $errors->has('imageURL') ? ' is-invalid' : '' }}" >
                                            @if ($errors->has('imageURL'))
                                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('imageURL') }}</strong>
                                </span>
                                            @endif
                                        </div>
                                    </div>
                            </div>

                            <div class="row justify-content-center py-1">
                                <button type="submit" class="btn btn-primary">
                                    crear
                                </button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
@endsection

<div class="modal fade" id="create">
    <div class="modal-dialog">

    </div>
</div>