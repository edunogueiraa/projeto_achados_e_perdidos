@extends('layouts.app')

@section('title')
    {{$item->nome}}
@endsection

@section('links')
    <a href="{{url('/dashboard')}}" class="ms-3">
        <svg xmlns="http://www.w3.org/2000/svg" height="8vh" viewBox="0 -960 960 960" width="8vh" fill="#ffffff">
            <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/>
        </svg>
    </a>
@endsection
@section('style')
<style>
    body {
        background-image: url("{{ asset('img/Show.png') }}");
        background-size: cover; /* Ajusta a imagem para cobrir toda a tela */
        background-position: center;
    }

    /* CSS para centralizar os elementos no modo coluna */
    @media (max-width: 992px) {
        .row {
            display: flex;
            flex-direction: column; /* Empilha os elementos verticalmente */
            align-items: center; /* Centraliza os elementos horizontalmente */
            justify-content: center; /* Centraliza os elementos verticalmente */
        }

        .col-md-4, .col-md-8 {
            width: 100%; /* Faz com que as colunas ocupem 100% da largura */
        }

        .container {
            text-align: center; /* Centraliza o texto */
        }
    }

    /* Quebra de palavras para textos longos */
    .list-group-item p {
        word-wrap: break-word; /* Quebra palavras longas para caber */
        word-break: break-word; /* Suporte adicional */
        overflow-wrap: break-word; /* Recomendado para navegadores modernos */
    }
</style>
@endsection

@section('main')
    <div class="container my-5">
        <div class="row justify-content-center">
            <!-- Card de item -->
            <div class="col-md-4 mb-4 d-flex justify-content-center">
                <div class="card" style="transition: none; justify-content: center; align-items: center;">
                    <img src="{{$item->img}}" class="card-img-top mt-3" alt="{{$item->nome}}" style="width: 150px; height: 150px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h2 class="card-title">Nome: {{$item->nome}}</h2>
                        <p class="card-text"><b>Descrição: </b>{{$item->descricao}}</p>
                        <p class="card-text"><b>Data adicionada: </b><i>{{$item->data_cadastro}}</i></p>
                    </div>
                </div>
            </div>

            <!-- Coluna de comentários e formulário -->
            <div class="col-md-8 d-flex flex-column align-items-center">
                <div class="container mt-4">
                    <h3>Comentários</h3>
                    <ul class="list-group">
                        @foreach($comentarios as $comentario)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <strong>{{ $comentario->user->name }}:</strong>
                                    <p>{{ $comentario->texto }}</p>
                                </div>
                                
                                @if ($comentario->user_id === Auth::user()->id)
                                    <form action="{{url('/item/'. $comentario->id . '/coment/delete')}}" method="POST" class="mb-0">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="3.5vh" viewBox="0 -960 960 960" width="3.5vh" fill="#FFFFFF">
                                                <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                                            </svg>
                                        </button>
                                    </form>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="container mt-4">
                    <h3>Deixe seu comentário</h3>
                    <form action="{{ url('/item/' . $item->id . '/coment') }}" method="POST" class="d-flex">
                        @csrf
                        <div class="form-group flex-grow-1 me-2">
                            <textarea class="form-control" id="comentario" name="texto" rows="1" placeholder="Escreva um comentário"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
