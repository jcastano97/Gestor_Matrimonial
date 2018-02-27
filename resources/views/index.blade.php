<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gestor de Matrimonios</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/style_home.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Gestor de matrimonios
        </div>

        <div class="links">
            <a style="background-color: #dfe4ea" href="#" onclick="selectedOptionWhatIs()" id="what_is_mm_button">¿Que es gm?</a>
            <a href="#" onclick="selectedOptionRegister()" id="register_button">Registro</a>
            <a href="#" onclick="selectedOptionLogin()" id="login_button">Inicio</a>
            <a href="#" onclick="selectedOptionAboutUs()" id="about_us_button">Sobre nosotros</a>
        </div>

        <div style="width:50%; height:20%;"></div>

        <div id="what_is_mm">
            <h1>Administra tu matrimonio</h1>
        </div>
        <div id="register" style="display: none">
            <center>
                <table>
                    <tr>
                        <th style="width:30%; text-align: right">Nombre:</th>
                        <td style="width:70%; text-align: left"><input type="text"></td>
                    </tr>
                    <tr>
                        <th style="width:30%; text-align: right">Correo:</th>
                        <td style="width:70%; text-align: left"><input type="text"></td>
                    </tr>
                    <tr>
                        <th style="width:30%; text-align: right">Contraseña:</th>
                        <td style="width:70%; text-align: left"><input type="text"></td>
                    </tr>
                </table>
                <button style="margin-top: 1%">Registrarse</button>
            </center>
        </div>
        <div id="login" style="display: none">
            <center>
                <table style="padding-top: 2%">
                    <tr>
                        <th style="width:30%; text-align: right">Correo:</th>
                        <td style="width:70%; text-align: left"><input type="text"></td>
                    </tr>
                    <tr>
                        <th style="width:30%; text-align: right">Contraseña:</th>
                        <td style="width:70%; text-align: left"><input type="text"></td>
                    </tr>
                </table>
                <button style="margin-top: 1%">Iniciar Sesión</button>
            </center>
        </div>
        <div id="about_us" style="display: none">
            <h1>Somos LabJ3</h1>
        </div>
    </div>
    <script type='text/javascript' src='{{ asset('js/js_home.js') }}'></script>
</div>
</body>
</html>
