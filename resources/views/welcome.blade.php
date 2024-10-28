@extends('layouts.app')
 
@section('title', 'Bem-vindo | Achados e Perdidos')

@section('style')
    <style>
        body{
            background: linear-gradient(to bottom, #005700, #66ff66);
        }
        .section {
            padding:0;
            width: 100%;
            height: 115vh;
        }

        .carousel-item {
            text-align: center;
        }
        .carousel-item h5{
            margin-top: 5vh;
            margin-bottom: 5vh;
            color: white;
        }
        .carousel-item p{
            color: white;
        }
        .container h2,p,h4{
            color: white;
        }
        .container p{
            margin-top: 10vh;
            margin-bottom: 15vh;
        }
        .container h3{
            margin-bottom: 10vh;
        }
        img{
            border-radius: 100vh;
            width: 60vh;
            height: 60vh;
        }
        h2{
            color: white;
            margin-top: 5vh;
            margin-bottom: 5vh;
        }

        #coapac{
            background-image: url("{{ asset('img/Coapac.png') }}");
            background-size: 100%;  /* A imagem cobrirá todo o fundo */
            background-position: center; /* Centraliza a imagem */
        }
        
    </style>
@endsection

@section('main')
    <!-- Seção 1: Achados e Perdidos -->
    <section id="coapac" class="section bg-light text-center p-5">
        
    </section>

    <!-- Seção 2: Objetivos do Site -->
    <section class="section">
        <div class="container">
            <h2 class="text-center">Objetivos do Site</h2>
            <p class="text-center">
                Este site foi criado para ajudar a comunidade do IFRN Campus Caicó a recuperar itens perdidos e a
                promover a conscientização sobre a importância de devolver objetos encontrados.
            </p>
            <h3 class="text-center">Horários de Funcionamento</h4>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Dia</th>
                        <th>Horário</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Segunda</td>
                        <td>07:00 - 12:00 / 13:00 - 22:00</td>
                    </tr>
                    <tr>
                        <td>Terça</td>
                        <td>07:00 - 12:00 / 13:00 - 22:00</td>
                    </tr>
                    <tr>
                        <td>Quarta</td>
                        <td>07:00 - 12:00 / 13:00 - 22:00</td>
                    </tr>
                    <tr>
                        <td>Quinta</td>
                        <td>07:00 - 12:00 / 13:00 - 22:00</td>
                    </tr>
                    <tr>
                        <td>Sexta</td>
                        <td>07:00 - 12:00 / 13:00 - 22:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Seção 3: O Projeto de Romerito -->
    <section class="section bg-light text-center p-5">
        <div class="container">
            <h2 style="color: black">O Projeto de Romerito</h2>
            <p style="color: black">
                Este projeto é de cunho escolar, desenvolvido por alunos do IFRN Campus Caicó com o objetivo de
                facilitar a comunicação sobre itens perdidos e encontrados. Todos os dados gerados são para fins
                educacionais.
            </p>
            <p style="color: black">
                Para mais informações, consulte a <a href="LINK_DA_DOCUMENTACAO" target="_blank">documentação do projeto</a>.
            </p>
        </div>
    </section>

    <!-- Seção 4: Criadores do Site -->
    <section class="section">
        <div class="container">
            <h2 class="text-center">Criadores do Site</h2>
            <div id="creatorsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('alunos/Ianny.jpg') }}" class="d-block mx-auto" alt="Criador 1">
                        <h5>Ianny Daniely</h5>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('alunos/Ingridy.jpeg') }}" class="d-block mx-auto" alt="Criador 2">
                        <h5>Ingridy Gabriely</h5>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('alunos/Eduardo.jpeg') }}" class="d-block mx-auto" alt="Criador 3">
                        <h5>Eduardo Nogueira</h5>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('alunos/Katarina.jpg') }}" class="d-block mx-auto" alt="Criador 4">
                        <h5>Katarina Beatriz</h5>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('alunos/Matias.jpeg') }}" class="d-block mx-auto" alt="Criador 5" >
                        <h5>Matias Medeiros</h5>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#creatorsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#creatorsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
        </div>
    </section>
@endsection