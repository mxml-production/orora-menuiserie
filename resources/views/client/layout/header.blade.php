<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Orora Menuiserie est une entreprise de menuiserie située à Blois. Orora propose la rénovation de porte d'entrée, fenêtre, pergola et plus...">
    <title>{{ config('app.name', 'Orora') }} Menuiserie | Page @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/favicon/favicon.ico') }}" type="image/x-icon">
    <style>
        @font-face {
            font-family: 'Aquatico';
            font-style: normal;
            font-weight: normal;
            font-display: auto;
            src: url("{{ asset('assets/font/Aquatico-Regular.woff') }}") format('woff'),
            url("{{ asset('assets/font/Aquatico-Regular.ttf') }}") format('truetype');
        }
    </style>
</head>

<body>

    <a href="/catalogue" class="shadow" id="floating__catalog">
        <p class="text-white main-font">Nos catalogues</p>
        <i class="far fa-file-pdf"></i>        
    </a>

    <header class="header">
        <div class="header__brand">
            <a href="/">
                <img src="{{ asset('assets/img/logo-orora.png') }}" alt="Logo de l'entreprise Orora Menuiserie | L'ouverture sous un nouveau jour">
            </a>
        </div>
        <div class="header__menu">
            <ul>
                <li><a class="{{ request()->is('/') ? 'active' : '' }} main-font" href="/">Accueil</a></li>
                <li><a class="{{ request()->is('entreprise') ? 'active' : '' }} main-font" href="entreprise">Notre entreprise</a></li>
                <li><a class="{{ request()->is('realisation') ? 'active' : '' }} main-font" href="realisation">Nos realisations</a></li>
            </ul>
            <a class="main-font button" href="#contact">Nous contacter <span>&rarr;</span></a>
            <div class="header__burger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        
    </header>
