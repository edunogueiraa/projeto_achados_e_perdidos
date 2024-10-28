@extends('layouts.forms')
 
@section('title', 'Cadastrar Item')

@section('url_form')
    {{url('/item/create')}}
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
    <div class="form-group mb-3">
        <label class="form-label" for="Imagem"><b>URL da Imagem</b></label>
        <input class="form-control shadow-lg" type="text" name="img" placeholder="Digite a URL da imagem" required>
    </div>
    <div class="form-group mb-3">
        <label class="form-label" for="Nome"><b>Nome</b></label>
        <input class="form-control shadow-lg" type="text" name="nome" placeholder="Digite o nome do item" required>
    </div>
    <div class="form-group mb-3">
        <label class="form-label" for="Descricao"><b>Descricao</b></label>
        <input class="form-control shadow-lg" type="text" name="descricao" placeholder="Digite uma descricao" required>
    </div>
    <div class="form-group mb-5">
        <label class="form-label" for="Data"><b>Data Adicionada</b></label>
        <input class="form-control shadow-lg" type="date" name="data_cadastro" placeholder="Digite a data" required>
    </div>
    <center>
        <button type="submit" class="btn btn-success w-50 shadow-lg mb-4"><b>Cadastrar</b></button>
    </center>
@endsection