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
        <div class="p-2 text-center" >
            <a href="{{ url('newProduct') }}" class="btn btn-primary">
                Nuevo producto
            </a>
        </div>
        @if (count($products) == 0)
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="text-center">
                        <h1>No tienes bodas por administrar, <small>te invitamos a que crees una o selecciones algun plan</small></h1>
                    </div>
                </div>
            </div>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
            @for($contador = 0; $contador < count($products); $contador++)
                    <tr>
                        <td>{{$products[$contador]->name}}</td>
                        <td>{{$products[$contador]->description}}</td>
                        <td>{{$products[$contador]->price}}</td>
                        <td>
                            <a href="{{ url('deleteProduct/'.$products[$contador]->id)}}"
                               onclick="return confirm('¿Estas seguro de eliminar este elemento?')"
                               class="btn btn-danger">
                                <span class="glyphicon glyphicon-remove-circle" aria-hidden="true">Eliminar</span>
                            </a>
                        </td>
                    </tr>
            @endfor
                </tbody>
            </table>
        @endif
    </div>
@endsection