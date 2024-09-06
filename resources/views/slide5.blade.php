<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide 5 - Cadastro de Itens</title>
    @vite('resources/css/styles.css')
</head>
<body>

<header>
    <h1>Achados e Perdidos - Campus Caicó</h1>
</header>

<section class="slide">
    <h2>Painel de Cadastro de Itens</h2>
    <div class="container">
    <form>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">

        <label for="descricao"><br>Descrição:</label>
        <input type="text" id="descricao" name="descricao">

        <label for="data-coleta"><br>Data de Coleta:</label>
        <input type="date" id="data-coleta" name="data-coleta">

        <label for="data-doacao"><br>Data de Doação:</label>
        <input type="date" id="data-doacao" name="data-doacao">

        <input type="submit" value="Enviar">
    </form> 
    </div>
    <a href="{{ url('slide4') }}" class="btn">volte</a>
</section>

</body>
</html>
