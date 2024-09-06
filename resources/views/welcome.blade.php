<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Achados e Perdidos</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
        @vite('resources/css/styles.css')
    </head>
    <center>
        <body class="font-sans antialiased dark:bg-black dark:text-white/50">
            <header>
                <h1>Bem-vindo ao Achados e Perdidos - Campus Caicó</h1>
            </header>
            
            <section class="welcome">
                <h2>O que deseja fazer?</h2>
                <p>Faça login ou registre-se para acessar o sistema.</p>
                <a href="{{ route('login') }}" class="btn">Login</a>
                <a href="{{ route('register') }}" class="btn">Registrar-se</a>
            </section>
        </body>
    </center>
</html>
