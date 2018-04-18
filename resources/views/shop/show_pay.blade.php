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
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h5>Factura compra</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Producto</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Precio</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($shops as $shop)
                            <tr>
                                <td>{{$shop->name}}</td>
                                <td>{{$shop->description}}</td>
                                <td>{{$shop->price}}</td>
                            </tr>
                        @endforeach

                        <tr>
                            <th class="text-right" colspan="2">Total: </th>
                            <td>{{$total}}</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <div class="card-footer">
                    <button class="btn btn-info" onclick="myFunction()">Imprimir</button>

                    <script>
                        function myFunction() {
                            window.print();
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
