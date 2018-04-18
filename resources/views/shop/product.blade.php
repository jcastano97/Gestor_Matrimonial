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
    <div class="py-2">
        <a href="{{url('/shop')}}">Tienda</a> -> <a href="{{url('shop/'.$category->id)}}">{{$category->name}}</a> -> <a href="{{url('product/'.$producto->id)}}">{{$producto->name}}</a>
    </div>
    <div class="container">
        <div class="col-12 py-2">
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid" src="{{$producto->imageURL}}">
                        </div>
                        <div class="col">
                            <h1>{{$producto->name}}</h1>
                            <p>{{$producto->description}}</p>
                            <h3>Precio: ${{$producto->price}} cop</h3>
                            @if($product_added)
                                <a href="{{url('product/remove/'.$producto->id)}}" class="btn btn-danger">Eliminar del carrito</a>
                            @else
                                <a href="{{url('product/add/'.$producto->id)}}" class="btn btn-success">Añadir al carrito</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
