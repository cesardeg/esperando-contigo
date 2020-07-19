<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Muli:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css?v=1.1') }}" rel="stylesheet">
        <link href="{{ asset('css/welcome.css?v=1.1') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar">
            <div class="container">
                <img src="{{ asset('img/logo.svg') }}" alt="Esperando contigo" class="logo">
                <span class="spacer"></span>
                @guest()
                <a href="{{ route('login') }}" class="link">
                    {{ __('Login') }}
                </a>
                @else
                <a href="{{ route('home') }}" class="link">
                    {{ __('Dashboard') }}
                </a>
                @endauth
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
                            <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#modal-inscription">
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
        <div class="modal fade" id="modal-inscription" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content" method="post" action="{{ route('apply') }}">
                    @csrf()
                    <div class="modal-header">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">1. Inscripción</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#!">2. Pago</a>
                            </li>
                        </ul>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="small">Nombre completo</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="name" class="small d-block">Sexo</label>
                            <div class="form-check form-check-inline custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="gender" id="gender-male" value="male" required>
                                <label class="custom-control-label small " for="gender-male">Hombre</label>
                            </div>
                            <div class="form-check form-check-inline custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="gender" id="gender-female" value="female" required>
                                <label class="custom-control-label small" for="gender-female">Mujer</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="country" class="small">País</label>
                            <input type="text" name="country" class="form-control" id="country" required>
                        </div>
                        <div class="form-group">
                            <label for="region" class="small">Estado</label>
                            <input type="text" name="region" class="form-control" id="region" required>
                        </div>
                        <div class="form-group">
                            <label for="city" class="small">Ciudad</label>
                            <input type="text" name="city" class="form-control" id="city" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="small">Correo electrónico</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="find-out" class="small">Como te enteraste</label>
                            <input type="text" name="find_out" class="form-control" id="find-out" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="modal-payment" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" method="post" action="{{ route('apply') }}">
                    @csrf()
                    <div class="modal-header">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link" href="#">1. Inscripción</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#!">2. Pago</a>
                            </li>
                        </ul>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <a href="{{ $link }}" class="stretched-link" target="_blank">Pagar paypal</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        window.eventDate = new Date('2020-08-23T16:00:00Z');
    </script>
    <script src="{{ asset('js/app.js?v=1.1') }}"></script>
    <script>
        @if(session('payment'))
            $('#modal-payment').modal('show');
        @endif
    </script>
</html>
