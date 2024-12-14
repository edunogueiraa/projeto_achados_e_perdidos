<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
            margin-top: 18vh;
        }
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            background-color: forestgreen;
            width: 100%;
            z-index: 1000;
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff !important;
        }
        .card {
            transition: transform 0.2s;
            margin: 10px;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            width: 100%;
        }
        h3 {
            color: white;
        }
        /* Responsividade personalizada */
        @media (max-width: 768px) {
            .navbar .navbar-brand {
                font-size: 1.2rem;
            }
            .card {
                width: 100%;
            }
        }

        /* Estilo do menu flutuante */
        .floating-menu {
            position: fixed;
            top: 1rem;
            right: 1rem;
            width: 20rem;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            display: none; /* Inicialmente escondido */
            flex-direction: column;
            align-items: stretch;
            padding: 10px;
            z-index: 100000000;
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .floating-menu.open {
            display: flex;
            opacity: 1;
            transform: translateY(0);
        }

        /* Estilo dos itens do menu */
        .floating-menu .menu-item {
            padding: 10px 20px;
            text-decoration: none;
            color: #333;
            display: block;
            width: 100%;
            text-align: left;
        }

        .floating-menu .menu-item:hover {
            background-color: green;
            color: white;
        }

        .logout-btn {
            width: 100%;
            text-align: center; /* Centraliza o texto */
        }

        /* Botões de fechar no menu */
        .btn-close-menu {
            background-color: transparent;
            border: none;
            cursor: pointer;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        /* Efeito de animação ao passar o mouse sobre o ícone de fechar */
        .btn-close-menu:hover {
            transform: scale(1.2); /* Aumenta o tamanho ao passar o mouse */
        }

        .btn-close-menu svg {
            transition: transform 0.3s ease, fill 0.3s ease;
        }

        /* Animação de transformação nos ícones de fechar */
        .floating-menu:hover a {
            transform: rotate(360deg); /* Rotaciona o ícone */
            fill: red; /* Muda a cor do ícone */
        }

        /* Efeito de animação ao passar o mouse sobre o ícone de fechar */
        .navbar a:hover {
            transform: scale(1.2); /* Aumenta o tamanho ao passar o mouse */
        }

        /* Efeito de animação ao passar o mouse sobre o ícone de fechar */
        .navbar a:hover {
            transform: scale(1.2); /* Aumenta o tamanho ao passar o mouse */
        }

        /* Animação de transformação nos ícones de fechar */
        .btn-close-menu:hover svg {
            transform: rotate(360deg); /* Rotaciona o ícone */
            fill: red; /* Muda a cor do ícone */
        }

        /* Fundo para fechar ao clicar fora */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background-color: rgba(0, 0, 0, 0.3); */
            display: none; /* Inicialmente escondido */
            z-index: 999; /* Fica atrás do menu, mas acima do conteúdo */
        }

        .overlay.active {
            display: block;
        }
    </style>
    @yield('style')
</head>
<body>
    <!-- Menu flutuante -->
    <div class="floating-menu" id="floatingMenu">
        <!-- Linha com ícones nas extremidades -->
        <div class="d-flex justify-content-between w-100 mb-3">
            <form action="{{ url('/user/logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn-close-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 -960 960 960" width="25" fill="gray">
                        <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/>
                    </svg>
                </button>
            </form>
            <button class="btn-close-menu" onclick="closeMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 -960 960 960" width="25" fill="gray">
                    <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                </svg>
            </button>
        </div>

        <!-- Botão para admin -->
        @if (Auth::user()?->type === 'admin')
            <a href="/item/create" class="btn menu-item me-2 ">Registrar Item</a>
            <a href="/relatorio" class="btn menu-item">Relatório</a>
        @endif
        <!-- Botão de Logout -->
        <form action="{{ url('/user/logout') }}" method="POST">
            @csrf
            <button class="btn btn-outline-danger logout-btn mt-3">Sair</button>
        </form>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark mb-3">
        <div class="container-fluid">
            @auth
                <!-- Centralizar o nome do site -->
                <a href="{{ url('/dashboard') }}" class="link-underline link-underline-opacity-0 ms-3">
                    {{-- <img src="" alt=""> --}}
                    <span class="navbar-brand me-auto">Achados e Pedidos</span>
                </a>
                
                <div class="d-flex ms-auto">
                    <a href="#" style="color: white" id="link-animation" class="link-underline link-underline-opacity-0 ms-2 btn-toggle-menu" onclick="toggleMenu()">
                        {{ Auth::user()->name }}
                        <svg class="ms-1" xmlns="http://www.w3.org/2000/svg" height="35" viewBox="0 -960 960 960" width="35" fill="white">
                            <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
                        </svg>
                    </a>
                </div>
            @endauth  

            @guest
                <!-- Nome do site -->
                <span class="navbar-brand">Achados e Pedidos</span>

                <!-- Botões de Login e Cadastro -->
                <div class="d-flex">
                    <a href="{{url('/user/login')}}" class="btn btn-outline-light me-2">Entrar</a>
                    <a href="{{url('/user/register')}}" class="btn btn-outline-light">Cadastrar</a>
                </div>
            @endguest  
        </div>
    </nav>

    <!-- Overlay (fundo escuro para fechar ao clicar fora) -->
    <div class="overlay" id="overlay" onclick="closeMenu()"></div>

    <main>
        <div class="container">
            @yield('main', "Aqui vem os conteúdos do 'main'")
        </div>
    </main>

    <footer>
        <p>&copy; 2024 IFRN. Todos os direitos reservados.</p>
    </footer>
    <script>
        // Função para abrir o menu
        function toggleMenu() {
            const menu = document.getElementById('floatingMenu');
            const overlay = document.getElementById('overlay');
            menu.classList.toggle('open');
            overlay.classList.toggle('active');
        }

        // Função para fechar o menu
        function closeMenu() {
            const menu = document.getElementById('floatingMenu');
            const overlay = document.getElementById('overlay');
            menu.classList.remove('open');
            overlay.classList.remove('active');
        }
    </script>
</body>
</html>
