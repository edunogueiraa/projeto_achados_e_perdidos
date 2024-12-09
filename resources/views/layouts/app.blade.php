<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        /* Configurações do body e html */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        /* O main ocupa o espaço restante */
        main {
            flex: 1;
            margin-top: 18vh;
        }
        /* Configurações da navbar */
        .navbar {
            position: fixed; /* Mantém a navbar fixada no topo */
            top: 0; /* Garante que ela fique no topo da página */
            left: 0; /* Garante que ela fique alinhada à esquerda */
            background-color: forestgreen;
            width: 100%;
            z-index: 1000; /* Define um z-index alto para garantir que fique acima de outros elementos */
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff !important;
        }
        .card {
            transition: transform 0.2s;
            margin: 10px;
            width: 50vh;
            height: 70vh;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        /* Footer que não é fixo */
        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            width: 100%;
        }
        h3{
            color: white;
        }
    </style>
    @yield('style')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark mb-3">
        @auth
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <!-- Links adicionais -->
                @yield('links')
    
                <!-- Centralizar o nome do site -->
                <span class="navbar-brand mx-auto">Achados e Pedidos</span>
    
                <!-- Botão "Sair" -->
                <form action="{{url('/user/logout')}}" method="POST" class="d-inline">
                    @csrf
                    <button class="btn btn-outline-danger" type="submit">Sair</button>
                </form>
    
                <!-- Botão para admin -->
                @if (Auth::user()->type === 'admin')
                    <a href="/item/create" class="btn btn-outline-light ms-3">Registrar Item</a>
                @endif
            </div>
        @endauth  
    
        @guest
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <!-- Nome do site -->
                <span class="navbar-brand">Achados e Pedidos</span>
    
                <!-- Botões de Login e Cadastro -->
                <div>
                    <a href="{{url('/user/login')}}" class="btn btn-outline-light me-3">Entrar</a>
                    <a href="{{url('/user/register')}}" class="btn btn-outline-light">Cadastrar</a>
                </div>
            </div>
        @endguest  
    </nav>
    

    <main>
        @yield('main', "aqui vem os couteudo do 'main'")
    </main>

    <!-- Footer que não é fixo, sempre ao final do conteúdo -->
    <footer>
        <p>&copy; 2024 IFRN. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
