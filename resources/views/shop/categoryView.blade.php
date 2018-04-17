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
        <a href="{{url('/shop')}}">Tienda</a> -> <a href="{{url('shop/'.$category->id)}}">{{$category->name}}</a>
    </div>
    <div class="container">

        <h1>{{$category->name}}</h1>

        <div class="row">
            @foreach($productos as $producto)
                <div class="col-md-4 py-2">
                    <a href="{{url('product/'.$producto->id)}}" class="text">
                        <div class="card card-default">
                            <div class="card-header">
                                {{$producto->name}}
                            </div>
                            <div class="card-body">
                                <img class="img-fluid" src="{{$producto->imageURL}}">
                            </div>
                            <div class="card-footer text-center">
                                ${{$producto->price}} cop
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
@endsection
