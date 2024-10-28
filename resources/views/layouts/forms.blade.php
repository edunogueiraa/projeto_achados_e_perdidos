<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        /* Estiliza o título com um efeito 3D */
        .title-3d span {
            font-size: 3rem;
            font-weight: bold;
            display: inline-block;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        /* Efeito 3D nos inputs e botão */
        .form-control {
            border-radius: 10px;
            padding: 10px;
            font-size: 1.1rem;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-success {
            font-size: 1.2rem;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }

        /* Caixa de login com efeito de profundidade */
        .login-box {
            box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.2);
            transform: scale(0.8); /* Diminui o tamanho de toda a div para 80% */
            transform-origin: center; /* Mantém o centro da div ao aplicar o scale */
        }

        header{
            position: fixed;
        }   
    </style>
    @yield('style')
</head>
<body>
    <header>
        <nav>
            <div id="links">
                <a href="{{url('/')}}"><svg xmlns="http://www.w3.org/2000/svg" height="8vh" viewBox="0 -960 960 960" width="8vh" fill="#ffffff"><path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/></svg></a>
            </div>
        </nav>
    </header>
    <main class="container d-flex justify-content-center align-items-center vh-100">
        <div class="login-box p-5 shadow-lg rounded-3 bg-light w-50">
            <h1 class="title-3d text-center mb-5">@yield('title', 'Title')</h1>
            <form action="@yield('url_form')" method="POST">
                @csrf
                @yield('form_content', "aqui vem os couteudo do 'form_content'")
            </form>
        </div>
    </main>
</body>
</html>