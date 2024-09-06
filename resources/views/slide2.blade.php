<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide 2 - Achados e Perdidos</title>
    @vite('resources/css/styles.css')
</head>
<body>

<header>
    <h1>Achados e Perdidos - Campus Caicó</h1>
</header>

<section class="slide">
    <h2>Aviso:</h2>
    <p id="p1">
    Os itens que estão nesse site foram perdidos no Campus Caicó.<br> Eles se encontram na COAPAC, mas só são guardados por 2 meses. <br> Após esse período, os objetos são doados para caridade.
    </p>
    <h2>Importante:</h2>
    <p id="p2">
     A COAPAC fica no corredor da assistência estudantil, sala A3.
    </p>
    <div>
        <a href="{{ url('dashboard') }}" class="btn">voltar</a>
        <a href="{{ url('slide3') }}" class="btn">proximo</a>
    </div>
</section>

</body>
</html>
