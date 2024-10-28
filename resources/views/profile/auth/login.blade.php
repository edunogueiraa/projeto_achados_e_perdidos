@extends('layouts.forms')

@section('title', 'Login')

@section('style')
<style>
    body{
        background-image: url("{{ asset('img/Fundo.png') }}");
        background-size: 100%;  /* A imagem cobrirá todo o fundo */
        background-position: center; /* Centraliza a imagem */
        background-repeat: no-repeat; /* Evita repetição da imagem */
    }
</style>
@endsection

@section('form_content')
    <div class="form-group mb-3">
        <label class="form-label" for="Email">Email</label>
        <input class="form-control shadow-lg" type="email" name="email" placeholder="Digite o Email" required>
    </div>
    <div class="form-group mb-5">
        <label class="form-label" for="Password">Senha</label>
        <input class="form-control shadow-lg" type="password" name="password" placeholder="Digite a Senha" required>
    </div>
    <center>
        <button type="submit" class="btn btn-success w-50 shadow-lg mb-4"><b>Login</b></button>
        <p>Não tem uma conta? <a href="{{url('/user/register')}} " class="text-decoration-none link-success"><b>Cadastra-se</b></a></p>
    </center>
@endsection