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
    <div class="container">
        <div class="col-12 py-4">
            <div class="card card-default">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Acción</th>
                            <th scope="col">Referencia</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Valor</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($payments as $pay)
                            <tr>
                                <td><a href="{{url('show_pay/'.$pay->id)}}" class="btn btn-info">Ver</a></td>
                                <td>{{$pay->reference_pay}}</td>
                                @if($pay->accept_pay == 0)
                                    <td>Espera</td>
                                @else
                                    <td>Aceptado
                                @endif
                                <td>{{$pay->value_pay}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
