<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Muli:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                margin: 0;
                background-color: #fff;
                font-family: "Century Gothic","URW Gothic L","Avant Garde",Futura,sans-serif;
                color: #333;
                font-weight: 400;
                font-size: 16px;
            }
            .navbar {
                position: fixed;
                top: 0;
                width: 100%;
                background: rgb(176,149,220);
                background: linear-gradient(90deg, rgba(176,149,220,1) 0%, rgba(253,156,173,1) 100%);
                color: #ffffff;
            }
            .container {
                padding: 0 16px;
            }
            .navbar .container {
                display: flex;
                align-items: center;
                height: 64px;
            }
            .navbar .logo {
                display: block;
                height: 44px;
                width: 43px;
                object-fit: cover;
                object-position: left;
            }
            .navbar .icon {
                display: block;
                height: 32px;
            }
            .navbar .link {
                color: inherit;
                text-decoration: none;
            }
            .navbar .link + .link {
                margin-left: 8px;
            }
            .navbar .spacer {
                flex-grow: 1;
            }
            main.container {
                box-sizing: border-box;
                margin-top: 64px;
                padding-top: 64px;
                padding-bottom: 64px;
                min-height: calc(100vh - 64px);
                background: url('{{ asset('img/campaign-2020/bg.jpg') }}');
                background: linear-gradient(180deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 60%, rgba(255,255,255,0) 75%, rgba(255,255,255,1) 100%),
                    url('{{ asset('img/campaign-2020/bg.jpg') }}');
                background-size: 100% calc(100vh - 64px), auto calc(100vh - 64px);
                background-position: center top, 60% top;
                background-repeat: no-repeat;
            }
            .campaign {
                display: block;
                width: 240px;
                max-width: 100%;
                margin: auto;
            }
            .offers-card {
                box-sizing: border-box;
                width: 240px;
                max-width: 100%;;
                position: relative;
                background-color: #ffffff;
                padding: 8px;
                margin-top: 48px;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
                box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            }
            .offers-card .offer {
                border: 1px solid rgb(176,149,220);
                padding: 16px;
            }
            .offers-card .offer:nth-child(even)  {
                border-color: rgb(253,156,173);
            }
            .offers-card .offer + .offer {
                margin-top: 8px;
            }
            .offers-card .offer .price {
                color: rgb(176,149,220);
                font-weight: bold;
                font-size: 1.5rem;
            }
            .offers-card .offer .price .currency {
                position: absolute;
                margin-top: 0.25rem;
                margin-left: 0.5rem;
                vertical-align: super;
                font-size: 0.5rem;
            }
            .offers-card .offer:nth-child(even) .price {
                color: rgb(253,156,173);
            }
            .offers-card .offer .date {
                border-top: 1px solid rgb(176,149,220);
                margin-top: 0.75rem;
                padding-top: 0.75rem;
                font-size: 0.75rem;
            }
            .offers-card .offer:nth-child(even) .date {
                border-top-color: rgb(253,156,173);
            }
            .panel {
                box-sizing: border-box;
                width: 240px;
                max-width: 100%;
                margin: auto;
                margin-top: 32px;
                padding: 16px;
                border-radius: 16px;
                background-color: rgba(176,149,220,0.75);
            }
            .btn {
                display: block;
                padding: 8px 16px;
                border-radius: 8px;
                text-transform: uppercase;
                text-decoration: none;
                text-align: center;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            .panel .btn + .btn {
                margin-top: 16px;
            }
            .btn.btn-outline {
                border: 1.5px solid #ffffff;
                color: #ffffff;
            }
            .btn.btn-secondary {
                background-color: rgb(253,156,173);
                color: #ffffff;
            }
        </style>
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
        <main class="container">
            <img src="{{ asset('img/campaign-2020/logo.png') }}" alt="Programa prenatal 2020" class="campaign">
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
            <div class="panel">
                <a href="#" class="btn btn-outline">
                    Ver programa
                </a>
                <a href="#" class="btn btn-secondary">
                    Inscribirse
                </a>
            </div>
        </main>
    </body>
</html>
