@extends('layouts.forms')
 
@section('title', 'Editar Item')

@section('url_form')
    {{ url('/item/' . $item->id . '/update') }}
@endsection

@section('style')
<style>
    body{
        background-image: url("{{ asset('img/Forms.png') }}");
        background-size: 100%;  /* A imagem cobrirá todo o fundo */
        background-position: center; /* Centraliza a imagem */
        background-repeat: no-repeat; /* Evita repetição da imagem */
    }
</style>
@endsection

@section('form_content')
    @method('PUT')
    <div class="form-group mb-3">
        <label class="form-label" for="Imagem">URL da Imagem</label>
        <input class="form-control shadow-lg" type="text" name="img" placeholder="Digite a URL da imagem" required value="{{$item->img}}">
    </div>
    <div class="form-group mb-3">
        <label class="form-label" for="Nome">Nome</label>
        <input class="form-control shadow-lg" type="text" name="nome" placeholder="Digite o nome do item" required value="{{$item->nome}}">
    </div>
    <div class="form-group mb-3">
        <label class="form-label" for="Descricao">Descricao</label>
        <input class="form-control shadow-lg" type="text" name="descricao" placeholder="Digite uma descricao" required value="{{$item->descricao}}">
    </div>
    <div class="form-group mb-5">
        <label class="form-label" for="Data">Data Adicionada</label>
        <input class="form-control shadow-lg" type="date" name="data_cadastro" placeholder="Digite a data" required value="{{$item->data_cadastro}}">
    </div>
    <center>
        <button type="submit" class="btn btn-success w-50 shadow-lg mb-4"><b>Atualizar</b></button>
    </center>
@endsection