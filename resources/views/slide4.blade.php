<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide 4 - Achados e Perdidos</title>
    @vite('resources/css/styles.css')
</head>
<body>

<header>
    <h1>Achados e Perdidos - Campus Caicó</h1>
</header>

<section id="slide">
    <h2>Item Encontrado</h2>
    <div class="espaco-item"></div>
    <div id="texto-item">
    <p><strong>Item:</strong> Moletom de zíper, azul marinho</p>  
    <p><strong>Mês:</strong> Julho</p>
    <p><strong>Encontrado:</strong> 03 de Julho</p>
    <p><strong>Data limite:</strong> 03 de Setembro</p>
    <div>
        <a href="{{ url('slide3') }}" class="btn">volte</a>
        <a href="{{ url('resgatar') }}" class="btn">resgatar</a>
        <a href="{{ url('slide5') }}" class="btn">proximo</a>
    </div>
    
    
</section>

</body>
</html>
