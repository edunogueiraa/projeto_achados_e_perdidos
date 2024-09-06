<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide 1 - Achados e Perdidos</title>
    @vite('resources/css/styles.css')
</head>
<body>

<header>
    <h1>Achados e Perdidos</h1>
</header>

<section class="inicio">
    <h2>Bem-vindo ao Achados e Perdidos</h2>
    <p>IFRN - Campus Caicó</p>
    <input type="text" placeholder="Digite aqui o que deseja encontrar">
    <a href="{{ url('slide2') }}" class="btn">proximo</a>
</body>
</html>