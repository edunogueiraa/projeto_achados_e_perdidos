@extends('layouts.app')
 
@section('title', 'Dashboard')

@section('style')
<style>
    body{
        background-image: url("{{ asset('img/Items.png') }}");
        background-size: 100%;  /* A imagem cobrirá todo o fundo */
        background-position: center; /* Centraliza a imagem */
    }
</style>
@endsection

@section('main')
    <section>
        <div class="container">
            <div class="row justify-content-center"> <!-- Centralizar as colunas -->
                @foreach ($items as $item)
                    <div class="col-md-4 d-flex justify-content-center mb-4"> <!-- Centralizar os cards -->
                        <a href="{{ url('/item/' . $item->id . '/show') }}" class="text-decoration-none">
                            <div class="card"> <!-- Centralizar o conteúdo do card -->
                                <div class="card-body d-flex flex-column"> <!-- Centralizar o conteúdo internamente -->
                                    <img src="{{$item->img}}" alt="{{$item->nome}}" class="mb-3 d-block mx-auto" style="width: 150px; height: 150px; object-fit: cover;">
                                    <h4 class="text-dark">Nome: {{$item->nome}}</h4>
                                    <p class="text-dark"><b>Descrição: </b>{{$item->descricao}}</p>
                                    <p class="text-dark"><b>Data adicionada: </b><i>{{$item->data_cadastro}}</i></p>
                                    @if (Auth::user()->type === 'admin')
                                        <div class="d-flex mt-3 justify-content-center align-items-center">
                                            <a href="{{ url('/item/' . $item->id . '/edit') }}" class="btn btn-primary me-2">Editar</a>
                                            <form action="{{ url('/item/' . $item->id . '/delete') }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Delete" class="btn btn-danger"> <!-- Adiciona espaço à direita -->
                                            </form>
                                        </div>            
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

