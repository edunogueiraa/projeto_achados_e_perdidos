<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide 3 - Achados e Perdidos</title>
    @vite('resources/css/styles.css')
</head>
<body>

<header>
    <h1>Achados e Perdidos - Campus Caicó</h1>
</header>

<section class="slide">
    <h3>Destaques</h3>
    <ul>
        <li>Garrafa</li>
        <li>Farda</li>
        <li>Chinelo</li>
        <li>Carregador</li>
        <li>Outros</li>
    </ul>

    <h3>Categorias:</h3>
    <ul>
        <li>Garrafas</li>
        <li>Roupas</li>
        <li>Calçados</li>
        <li>Carregadores</li>
        <li>Outros</li>
    </ul>
    
    <div>
        <a href="{{ url('slide2') }}" class="btn">volte</a>
        <a href="{{ url('slide4') }}" class="btn">proximo</a>
    </div>
</section>

</body>
</html>
