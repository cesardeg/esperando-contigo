<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Muli:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/welcome.css?v=1') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar">
            <div class="container">
                <img src="{{ asset('img/logo.svg') }}" alt="Esperando contigo" class="logo">
                <span class="spacer"></span>
                <a href="{{ route('login') }}" class="link">
                    Login
                </a>
                <a href="https://www.instagram.com/esperandocontigo/" target="_blank" class="link">
                    <img src="{{ asset('img/instagram.svg') }}" alt="Esperando contigo" class="icon">
                </a>
            </div>
        </nav>
        <main class="main" id="app">
            <div class="container">
                <div class="campaign-col">
                    <img src="{{ asset('img/campaign-2020/logo.png') }}" alt="Programa prenatal 2020" class="campaign">
                </div>
                <div class="offers-col">
                    <div class="card-wrapper">
                        <div class="offers-card">
                            <div class="offer">
                                <div class="price">
                                    $1,000.00 <span class="currency">MXN</span>
                                </div>
                                <div class="date">
                                    Después del <b> 1 de Agosto</b>
                                </div>
                            </div>
                            <div class="offer">
                                <div class="price">
                                    $800.00 <span class="currency">MXN</span>
                                </div>
                                <div class="date">
                                    Antes del <b> 31 de Julio</b>
                                </div>
                            </div>
                        </div>
                        <div class="panel-card">
                            <a href="#" class="btn btn-outline">
                                Ver programa
                            </a>
                            <a href="#" class="btn btn-secondary">
                                Inscribirse
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container timer-wrapper">
                <timer-component></timer-component>
            </div>
        </main>
        @php
        phpinfo()
        @endphp
    </body>
    <script>
        var reference = new Date('2020-08-31T05:00:00');
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
