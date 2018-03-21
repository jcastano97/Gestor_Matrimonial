<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestor de Matrimonios</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
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

            <div class="content" id="content">
                <div class="title m-b-md">
                    Gestor de Matrimonios
                </div>

                <div class="links">
                    <a href="#" onclick="selectedOptionWhatIs()" id="what_is_mm_button">¿Que es gestor matrimonial?</a>
                    <a href="#" onclick="selectedOptionAboutUs()" id="about_us_button">Sobre nosotros</a>
                    <a href="https://github.com/JuanoC097/Gestor_Matrimonial" target="_blank">GitHub</a>
                </div>

                <section id="what_is_mm" style="display: none">
                    <h1>Administra tu matrimonio</h1>
                </section>

                <section id="about_us" style="display: none">
                    <h1>No mucho en realidad</h1>
                </section>
            </div>
            <script type='text/javascript' src='{{ asset('js/js_welcome.js') }}'></script>
        </div>
    </body>
</html>
